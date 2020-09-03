<?php

function aulas($a, $aulas){
	foreach ($aulas as $key => $value) {
		if($a == $key) {

			echo"<p>A disciplina $a possui $value aulas por semana.</p>";
		}
	}
}

?>