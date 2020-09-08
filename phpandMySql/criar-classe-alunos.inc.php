<?php

//criação da classe Alunos. Esta classe irá conter métodos e atributos necessários ao PHP para que, intergindo com o banco de dados possa executar as 
//operaçoes identificadas como requisitos funcionais da nossa aplicação

class Alunos {

    public $nome;
    public $matricula;
    public $mediaFinal;

     //receber dados do formulário
     function receberDadosdoFormulario($conexao) {

        //atencao para as funcoes do PHP que evitam ataques do tipo injeção de sql
        $nome = trim($conexao->escape_string($_POST["nome"]));
        $matricula = trim($conexao->escape_string($_POST["matric"]));
        $mediaFinal = trim($conexao->escape_string($_POST["media"]));

        //atribuir os dados do formulario ao objeto

        $this->nome       = $nome;
        $this->matricula  = $matricula;
        $this->mediaFinal = $mediaFinal;
     
    }

//método que efetua, de fato, o cadastro dos dados do aluno no mySQL
//Não esquecer de usar apostofre ('') para atribuir valor que não seja string no comando para o mySQL

    function cadastrar($conexao, $nomeDaTabela){

        $sql = "INSERT $nomeDaTabela VALUES (
                '$this->nome',
                '$this->matricula',
                '$this->mediaFinal')";

        $resultado = $conexao->query($sql) or exit($conexao->error);
    }

    //método para recuperar os dados do banco de dados e exibi-los em formato tabular
    function tabularDados($conexao, $nomeDaTabela){
        $sql = "SELECT * FROM $nomeDaTabela";
        $resultado = $conexao->query($sql) or exit($conexao->error);

        echo"<table>
        <caption> Dados dos alunos cadastrados </caption>
        <tr>
        <th>Matricula</th>
        <th>Aluno</th>
        <th>Média em PRW</th>
        </tr>";
        "
        
        </table>";
    }


}

   

?>
