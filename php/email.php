<?php

if(isset($_POST['email']) && !empty($_POST['email'])){
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['message'];


$to = "edmilsonnhamposse@mail.com";
$subject = "Contato - Portfólio";
$body = "Nome: ".$nome. "\n".
        "Email ".$email. "\n".
        "Mensagem ".$mensagem;
$header = "From:edmilsonnhamposse@gmail.com"."\r\n".
            "Reply-To:".$email."\r\n".
            "X=Mailer:PHP/".phpversion();

    if(mail($to, $subject, $body, $header)){
        echo("Email enviado com sucesso!");
        #Apos enviar o email com sucesso, sera redirecionado para uma pagina de agredecimento(THANKING PAGE)
        header("Location: thanking.php");
    }else{
        echo("Email nao pode ser enviado");
    }
}


?>