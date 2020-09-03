<?php

//criação da classe Alunos. Esta classe irá conter métodos e atributos necessários ao PHP para que, intergindo com o banco de dados possa executar as 
//operaçoes identificadas como requisitos funcionais da nossa aplicação

class Alunos {

    public $nome;
    public $matricula;
    public $mediaFinal;

     //receber dados do formulário
     function receberDadosdoFormulário($conexao) {

        //atencao para as funcoes do PHP que evitam ataques do tipo injeção de sql
        $nome = trim($conexao->escape_string($_POST["nome"]));
        $matricula = trim($conexao->escape_string($_POST["matric"]));
        $mediaFinal = trim($conexao->escape_string($_POST["media"]));

        //atribuir os dados do formulario ao objeto

        $this->nome       = $nome;
        $this->matricula  = $matricula;
        $this->mediaFinal = $mediaFinal;
     
    }



}

   

?>
