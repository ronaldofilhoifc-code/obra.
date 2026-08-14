<?php 

$recuperaEmail = $_POST["recupera-email"];

$AssuntoDoEmail = "Código de Recuperação obra.";
$MensagemDoEmail = "Aqui está o código referente a sua solicitação de recuperação de conta. Não compartilhe-o a ninguém.<br>Agnes Tachyon";
$Remetente = "tudo.e.obra@gmail.com";

// mail($recuperaEmail, $AssuntoDoEmail, $MensagemDoEmail, $Remetente); //só funciona em server local

echo $recuperaEmail;

?>