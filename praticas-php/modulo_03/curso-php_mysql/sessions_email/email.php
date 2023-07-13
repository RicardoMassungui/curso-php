<?php

$email = $_POST['email'];
$assunto = $_POST['assunto'];
$msg = $_POST['msg'];
if(mail($email, $assunto, $msg, "Reply-To: ricardomassungui01@gmail.com")){
    echo"Mensagem enviado <br/>";
    echo"<a href = 'sendmail.php' target=_self>voltar</a>";
}else{
    echo "Erro de envio no email!";
}


?>