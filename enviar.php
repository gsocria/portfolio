<?php

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
$from = '';

$headers      = "MIME-Version: 1.1\n";
$headers     .= "Content-type: text/html; charset=utf-8\n";
$headers     .= "From: Meu Site <$from>\n";
$headers     .= "Return-Path: $from\n";
$headers     .= "Reply-to: $email\n";

mail($email, $assunto, $mensagem, $headers, $from);

?>