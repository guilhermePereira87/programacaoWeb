<?php

	function resultado($a, $calendario){

		foreach ($calendario as $mes => $dias) {
			if ($a == $mes) {
			
			echo"<p>O mês de $a possui $dias dias.</p>";
			}
		}
	} 

?>