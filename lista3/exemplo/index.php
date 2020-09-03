<?php
    function converterDolar($dolar, $taxa) {
        $valorConvertido = $dolar * $taxa;

        return $valorConvertido;
    }
?>

<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Conversor de moeda </title>
  <link rel="stylesheet" href="formatar.css">
</head> 

<body>
    
<?php

function mostrarResultados($dolar, $taxa, $valorConvertido) {

    echo"<p>O valor recebido foi de $ $dolar, com a taxa cambial de $taxa resultando no valor de R$ $valorConvertido. </p>";
}

?>
  <form method="POST" action="index.php">
      <fieldset>
        <input type="number" step="0.01" name="dolar1" placeholder="Insira valor em dólares">
        <br>
        <input type="number" step="0.01" name="taxa1" placeholder="Insira Taxa de Conversão">
      </fieldset>
      <br>
      <fieldset>
        <input type="number" step="0.01" name="dolar2" placeholder="Insira valor em dólares">
        <br>
        <input type="number" step="0.01" name="taxa2" placeholder="Insira Taxa de Conversão">
      </fieldset>
      <br>
      <fieldset>
        <input type="number" step="0.01" name="dolar3" placeholder="Insira valor em dólares">
        <br>
        <input type="number" step="0.01" name="taxa3" placeholder="Insira Taxa de Conversão">
      </fieldset>
      <br>
      <button type="submit" name="enviar">Enviar</button>
  </form>
  
  <?php

  if(isset($_POST['enviar'])) {

    $dolar1 = $_POST['dolar1'];
    $taxa1 = $_POST['taxa1'];
    $dolar2 = $_POST['dolar2'];
    $taxa2 = $_POST['taxa2'];
    $dolar3 = $_POST['dolar3'];
    $taxa3 = $_POST['taxa3'];

    $valorConvertido1 = converterDolar($dolar1, $taxa1);
    $valorConvertido2 = converterDolar($dolar2, $taxa2);
    $valorConvertido3 = converterDolar($dolar3, $taxa3);

    mostrarResultados($dolar1, $taxa1, $valorConvertido1);
    mostrarResultados($dolar2, $taxa2, $valorConvertido2);
    mostrarResultados($dolar3, $taxa3, $valorConvertido3);



  }

  ?>
</body> 
</html> 