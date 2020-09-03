<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Exercício 6 </title> 
</head> 

<body> 
    <h1>Calculadora IMC</h1>

    <form method="POST" action="index.php">
        <fieldset>
            <label>Insira seu peso:</label>
            <input type="number" name="peso" step="0.01">
            <br>
            <label>Insira sua altura:</label>
            <input type="number" name="altura" step="0.01">
        </fieldset>
        <button type="submit" name="enviar">Calcular IMC</button>
    </form>
<?php

if(isset($_POST['enviar'])) {

    $altura = $_POST['altura'];
    $peso = $_POST['peso'];

    include_once "include.inc.php";

    $imc = calcula($altura, $peso);
    
    compara($imc);
}

?>
    
</body> 
</html> 