<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Exercício 3 </title> 
</head> 

<body> 
    <h1>Exercício 3</h1>

    <form method="POST" action="#">
    	<fieldset>
    		<input type="number" name="num1" placeholder="Insira num.1">
    		<input type="number" name="num2" placeholder="Insira num.2">
    	</fieldset>
    	<button type="submit" name="enviar">Enviar</button>
    </form>

    <?php
    	if(isset($_POST['enviar'])){

    		$num1 = $_POST['num1'];
    		$num2 = $_POST['num2'];

    		include "executar.inc.php";

    		$verificador = verificar($num1, $num2);

    		if($verificador) {

    			$powNum1 = raiz($num1);
    			$powNum2 = raiz($num2);

    			saida($num1, $num2, $powNum1, $powNum2);

    		
    		}else{

    			invalida();

    		}

    	}

    ?>

</body> 
</html> 