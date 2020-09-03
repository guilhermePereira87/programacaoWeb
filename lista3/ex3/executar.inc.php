<?php

	function verificar($a, $b){ 

		if($a > 0 and $b > 0 ){

			$verificar = true;
			return $verificar;
		}else{

			$verificar = false;
			return $verificar;
			
			}

	}

	function raiz($a){

		$raiz = sqrt($a);

		return $raiz;
	}

	function invalida(){

		echo"<p>Um ou ambos os valores inseridos são inválidos.</p>";

		exit();
	}

	function saida($a, $b, $c, $d){

		echo"<p>A raiz quadrada de $a é igual a $c;
		<br>
		A raiz quadrada  de $b é igual a $d.</p> ";

	}

	

?>