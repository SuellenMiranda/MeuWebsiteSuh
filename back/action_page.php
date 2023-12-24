<?php

// Obter os dados do formulário
$nome = $_POST['Name'];
$email = $_POST['Email'];
$mensagem = $_POST['Message'];

// Validar os dados do formulário
if (empty($nome)) {
  echo "O campo 'Nome' é obrigatório.";
  exit;
}

if (empty($email)) {
  echo "O campo 'E-mail' é obrigatório.";
  exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "O campo 'E-mail' não é um endereço de e-mail válido.";
  exit;
}

// Definir o remetente e o destinatário
$remetente = "seu-email@seu-dominio.com.br";
$destinatario = "suellen.org@gmail.com";

// Definir o assunto e a mensagem do e-mail
$assunto = "Mensagem do formulário";
$mensagem = "
De: $nome
E-mail: $email

$mensagem
";

// Enviar o e-mail
mail($destinatario, $assunto, $mensagem);

// Retornar um status
echo "Mensagem enviada com sucesso!";

?>
