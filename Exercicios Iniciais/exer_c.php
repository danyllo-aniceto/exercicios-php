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
			if($numero % 2 == 0) 
			{
				echo"O numero $numero é par";
			}
			else
			{
				echo"O numero $numero é impar";
			}
		?>
		
	</body>
</html>

