<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Exercício 2 </title>
  <link rel="stylesheet" type="text/css" href="formatar.css">
</head> 

<body> 
	<h1>Functions and Includes</h1>
    <form method="POST" action="#">
    	<fieldset>
    		<input type="number" name="num1" placeholder="Primeiro num.">
    		<br>
    		<input type="number" name="num2" placeholder="Segundo num.">
    	</fieldset>
    	<button type="submit" name="enviar">Enviar</button>
    </form>
    	<?php

    	if(isset($_POST['enviar'])) {

    		$num1 = $_POST['num1'];
    		$num2 = $_POST['num2'];

    		include "soma.inc.php";

    		$soma = soma($num1, $num2);

    		$cubo = cubo($soma);

    		$string = resultado($num1, $num2, $soma, $cubo);

    		echo"$string";

    	}

    	?>
</body> 
</html> 