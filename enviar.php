<?php

// Recebe os dados do formulário
$nome = $_POST["nome"];
$email = $_POST["email"];
$assunto = $_POST["assunto"];
$mensagem = $_POST["mensagem"];

// Envia um e-mail para o administrador do site
mail("contato@itech.rio.br", "Mensagem do formulário de contato", "Nome: $nome\nE-mail: $email\nAssunto: $assunto\nMensagem: $mensagem");

// Exibe uma mensagem de confirmação
echo "<p>Sua mensagem foi enviada com sucesso!</p>";

?>
