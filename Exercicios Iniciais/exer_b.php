<!DOCTYPE HTML>
<html>
	<head>
		<title> Turma V3I </title>
	</head>
	<body>
		 <form method="post" action="">
			<p> Digite um número inteiro</p>
			<input type="number" name="numero1" />
			<input type="submit" value="enviar"/>
		 </form>
		<?php
			$numero= $_POST['numero1'];
			echo"O numero digitado é: $numero";
		?>
		
	</body>
</html>