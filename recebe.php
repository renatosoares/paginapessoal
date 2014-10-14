<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Renato Soares formulário</title>
</head>
<body>
	<?php
	  $name = $_POST['nome'];
	  $email = $_POST['email'];
	  $mensagem = $_POST['mensagem'];

	  $to = 'programador@renatosoares.net.br';
	  $subject = 'Mensagem de visitante';
	  $msg =  "Nome: $name \n" .
	          "Email: $email\n" .
	          "Mensagem: $mensagem";
	  mail($to, $subject, $msg, 'From:' . $email);

	  echo '<h1>Obrigado por enviar sua mensagem</h1>.<br /> <br />';

	  echo 'Seu nome: ' . $name . '<br />';
	  echo 'Seu email: ' . $email . '<br />';
	  echo 'Mensagem: ' . $mensagem ;
	?>
</body>
</html>