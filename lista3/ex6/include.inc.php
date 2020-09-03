<?php

function calcula($altura, $peso) {

    $imc = $peso/($altura*$altura);

    return $imc;
}

function compara($imc) {

    if($imc<18.5) {
        echo"<p>IMC: $imc
        <br>
        Resultado indica paciente abaixo do peso ideal.
        </p>";
    }
    elseif($imc>=18.5 and $imc<25) {
        echo"<p>IMC: $imc
        <br>
        Resultado indica paciente no peso ideal.
        </p>";
    }
    elseif($imc>=25 and $imc<30) {
        echo"<p>IMC: $imc
        <br>
        Resultado indica paciente com sobrepeso.
        </p>";
    }
    elseif($imc>=30 and $imc<35) {
        echo"<p>IMC: $imc
        <br>
        Resultado indica paciente com obesidade grau 1.
        </p>";
    }
    elseif($imc>=35 and $imc<40) {
        echo"<p>IMC: $imc
        <br>
        Resultado indica paciente com obesidade grau 2.
        </p>";
    }
    else {
        echo"<p>IMC: $imc
        <br>
        Resultado indica paciente com obesidade grau 3.
        </p>";
    }        
}   

?>