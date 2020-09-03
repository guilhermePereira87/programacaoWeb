<?php

	$aulas=["Banco de Dados II" => 4,
			"Programação Web" => 12,
			"Ética e Sociedade" => 4];	

?>


<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aulas </title> 
</head> 

<body> 
    <form method="POST" action="index.php">
    	<fieldset>
    		<?php
    		foreach ($aulas as $materia => $aulasSemana) {
    			echo"<input type='radio' name='materias' value='$materia'>$materia";
    		}
    		?>
    	</fieldset>
    	<button type="submit" name="enviar">OK</button>
    </form>
    <?php
    	if(isset($_POST['enviar'])) {
    		$aula = $_POST['materias'];

    		

    		include "include.inc.php";

    		aulas($aula, $aulas);
    	}
    ?>
</body> 
</html> 