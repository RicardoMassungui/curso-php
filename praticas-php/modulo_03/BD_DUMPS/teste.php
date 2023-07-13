<?php
    session_start();
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        

        #tabela,tr,td{
            border: 1px solid black;
            border-collapse: collapse;

        }

        #tabela tr td{
            padding: 10px;
            text-align: center;
        }
      
    </style>
</head>
<body>
    

<?php
    try{
     $con = new PDO("mysql:dbname=cfbcursos;host=localhost", "root", "");
    }catch(PDOException $e){
        echo "Erro com banco de dados: ". $e->getMessage();
    }
    catch(Exception $e){
        echo "Erro Genérico: ". $e->getMessage();
    }
   
    
  
if(!empty(isset($_POST["send"]))){
     $nome = $_POST["nome"];
   $email = $_POST["email"];
   $tel = $_POST["tel"];
   
   $sql = "INSERT INTO tb_cadastro (cod, nome, email, telefone) VALUES (NULL, :nome, :email, :tel)";

   $cmd = $con->prepare($sql);
   $cmd->bindParam(":nome", $nome);
   $cmd->bindParam(":email", $email);
   $cmd->bindParam(":tel", $tel); 
   $res=$cmd->fetch(PDO::FETCH_ASSOC);
   if($cmd->execute() AND $cmd->rowCount() > 0){
   echo $_SESSION["msg"]="<p>Dados Inseridos no Banco de Dados com Sucesso!</p>";
  
   }

}
  
 
?> 
<form method="POST" action="">
    <label for="nome">Noe</label>
    <input type="text" name="nome" value="<?php if(!empty(isset($_POST["nome"]))){echo $res["nome"];}?>"  placeholder="Digite o seu Nome"><br><br>

    <label for="email">Email</label>
    <input type="email" name="email" placeholder="Digite seu Email" required><br><br>

    <label for="tel">Telefone</label>
    <input type="tel" name="tel" placeholder="Digite o Número de telefone"><br><br>

    <input type="submit" name="send" value="cadastrar">
</form>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>