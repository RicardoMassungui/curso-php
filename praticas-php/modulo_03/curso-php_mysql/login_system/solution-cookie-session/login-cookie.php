Script login.php para validação do login
<?php 
session_start();

$email = ($_POST['email']) ? $_POST['email'] : '';
$senha = ($_POST['senha']) ? $_POST['senha'] : '';
$lembrete = ($_POST['lembrete']) ? $_POST['lembrete'] : '';

if (!empty($email) && !empty($senha)):

	$conexao = new PDO('mysql:host=localhost;dbname=cfbcursos', 'root', '');
	$sql = 'SELECT cod, nome, email FROM tb_cadastro WHERE email = ? AND senha = ?';
	$stm = $conexao->prepare($sql);
	$stm->bindValue(1, $email);
	$stm->bindValue(2, $senha);
	$stm->execute();
	$dados = $stm->fetch(PDO::FETCH_OBJ);

	if(!empty($dados)):

		$_SESSION['id'] = $dados->id;
		$_SESSION['nome'] = $dados->nome;
		$_SESSION['email'] = $dados->email;
		$_SESSION['logado'] = TRUE;

		if($lembrete == 'SIM'):

		   $expira = time() + 60*60*24*30; 
		   setCookie('CookieLembrete', base64_encode('SIM'), $expira);
		   setCookie('CookieEmail', base64_encode($email), $expira);
		   setCookie('CookieSenha', base64_encode($senha), $expira);

		else:

		   setCookie('CookieLembrete');
		   setCookie('CookieEmail');
		   setCookie('CookieSenha');

		endif;

		echo "<script>window.location = 'home.php'</script>";
	else:

		$_SESSION['logado'] = FALSE;
	    echo "<script>window.location = 'index.php'</script>";

	endif;

endif;


?>
/*
Alguns pontos de destaque sobre o script acima:

Post relacionado:  Sistema de Login com AJAX e PHP - Blindado
1 – Recebo os valores enviados pelo formulário de login, observe que a variável $lembrete recebe o valor do checkbox se o mesmo foi marcado, essa variável será importante para verificar se vamos ou não gravar os Cookies desse usuário.

$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';
$lembrete = (isset($_POST['lembrete'])) ? $_POST['lembrete'] : '';
1
2
3
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';
$lembrete = (isset($_POST['lembrete'])) ? $_POST['lembrete'] : '';
 

2 – Nesse trecho estou verificando se o e-mail e a senha existem na tabela usuario sempre usando a extensão PDO,  observem que estou trabalhando com consultas parametrizadas mais uma boa prática de segurança, nesse exemplo gravei as senhas criptografadas com MD5 então antes de passar o parâmetro chamo a função md5() do PHP para transformar a senha.

$conexao = new PDO('mysql:host=localhost;dbname=db_blog', 'root', '123456');
$sql = 'SELECT id, nome, email FROM usuario WHERE email = ? AND senha = ?';
$stm = $conexao->prepare($sql);
$stm->bindValue(1, $email);
$stm->bindValue(2, md5($senha));
$stm->execute();
$dados = $stm->fetch(PDO::FETCH_OBJ);

$conexao = new PDO('mysql:host=localhost;dbname=db_blog', 'root', '123456');
$sql = 'SELECT id, nome, email FROM usuario WHERE email = ? AND senha = ?';
$stm = $conexao->prepare($sql);
$stm->bindValue(1, $email);
$stm->bindValue(2, md5($senha));
$stm->execute();
$dados = $stm->fetch(PDO::FETCH_OBJ);
 

3 – Agora chegamos ao ponto que envolve realmente o tema de login com cookie, abaixo verifico se foi marcado o checkbox “Lembre-me” caso sim, defino a data de expiração na variável $expira (nesse exemplo 30 dias) e usando a função setCookie() passo 3 parâmetros, sendo o primeiro o nome do Cookie, segundo parâmetro o valor que será atribuído nesse caso estou codificando em base64 e o terceiro parâmetro é a validade do Cookie que já foi definida na variável $expira.

Se a variável $lembrete for diferente de ‘SIM’ então significa que o usuário não quer ser lembrado do e-mail e a senha, nesse caso não precisamos gravar os cookies do login mas temos que limpar os valores caso existão, então chamo a função setCookie() passando somente o nome dos Cookies que quero limpar e não passo valores de atribuição.

if($lembrete == 'SIM'):

	$expira = time() + 60*60*24*30; 
	setCookie('CookieLembrete', base64_encode('SIM'), $expira);
	setCookie('CookieEmail', base64_encode($email), $expira);
	setCookie('CookieSenha', base64_encode($senha), $expira);

else:

	setCookie('CookieLembrete');
	setCookie('CookieEmail');
	setCookie('CookieSenha');

endif;
1
2
3
4
5
6
7
8
9
10
11
12
13
14
if($lembrete == 'SIM'):
 
	$expira = time() + 60*60*24*30; 
	setCookie('CookieLembrete', base64_encode('SIM'), $expira);
	setCookie('CookieEmail', base64_encode($email), $expira);
	setCookie('CookieSenha', base64_encode($senha), $expira);
 
else:
 
	setCookie('CookieLembrete');
	setCookie('CookieEmail');
	setCookie('CookieSenha');
 
endif;
 

Resultado final com Cookies gravados
Se o usuário efetuar o login e marcar o checkbox “Lembre-me” os cookies serão gravados então se o navegador for fechado e aberto novamente na página de login o resultado devera ser algo parecido como exibido na imagem abaixo:

Cookies do Login gravados

 

Bom pessoal nesse post demonstrei apenas o básico de como podemos construir um sistema de login com Cookie no PHP, mas é claro que existem diversas outras funcionalidade que podemos desenvolver utilizando Cookies. É importante salientar que quando estamos gravando informações em Cookies o ideal é tentar encriptar de alguma forma essas informações, mesmo não existindo sistema 100% seguro mas podemos dificultar um pouco mais certos ataques.

Se você gostou desse post compartilhe nas redes sociais, até a próxima …


*/
