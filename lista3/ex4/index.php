<?php

	$calendario = ["janeiro" => 31, "fevereiro" => 28, "março" => 31,
					"abril" => 30, "maio" => 31, "junho" => 31, 
					"julho" => 31, "agosto" => 31, "setembro" => 30, 
					"outubro" => 31, "novembro" =>30, "dezembro" =>31];

?>

<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Calendário </title> 
</head> 

<body> 
    <h1>Duração dos meses</h1>
    <form method="POST" action="index.php">
    	<fieldset>
    		<legend>Selecione o mês</legend>
    		<select name="meses">
    			<?php
    				foreach ($calendario as $meses => $dias) {
    					
    					echo"<option>$meses</option>";
    				}

    			?>
            </select>
    	</fieldset>

        <button type="submit" name="enviar">Enviar</button>
    </form>
    
    <?php
    	if(isset($_POST['enviar'])){

    		$mes = $_POST['meses'];

    		include "include.inc.php";

            resultado($mes, $calendario);
    	}

    ?>

</body> 
</html> 

