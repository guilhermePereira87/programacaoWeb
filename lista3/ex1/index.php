<?php
function testarValor($teste) {

    $resultadoTeste = filter_var($teste, FILTER_VALIDATE_INT);
    if($resultadoTeste and $resultadoTeste>0) {
        return $resultadoTeste;
     }
     else {
         return false;
     }
}

?>

<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title>  </title> 
  <link rel="stylesheet" href="formatar.css">
</head> 

<body> 
    <form method="POST" action="index.php">
        <fieldset>
            <label>Forneça uma informação qualquer: </label>
            <input type="text" name="valor" autofocus><br>
            <button type="submit" name="enviar">Validar informação</button>
        </fieldset>
    </form>

    <?php
    if(isset($_POST['enviar'])) {

        $info = $_POST['valor'];

        //criar função de teste para valor numérico ou não. 

        $teste=testarValor($info);

        if($teste) {
            
            $raiz = sqrt($info);
            $raizFormatada = number_format($raiz, 2, ",", ".");

            echo"<p>Resultado final da raiz quadrada do valor fornecido é $raizFormatada.</p>";

        }
        else {

            echo"<p>O valor digitado não é numérico ou maior que 0.</p>";
        }

    }
    ?>
</body> 
</html> 

