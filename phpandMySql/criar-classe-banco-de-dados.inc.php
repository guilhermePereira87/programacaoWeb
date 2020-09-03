<?php
    //definir a classe BancoDeDados que conterá as informações básicas de conexão do PHP com o MySql.

    class BancoDeDados {

        public $nomeDoBanco;
        public $nomeDaTabela;
        public $servidor;
        public $usuario;
        public $senha;


        //construtuor da classe

        function __construct($servidorBanco, $usuarioBanco, $senhaAcesso, $nomeBanco, $nomeTabela){

            $this->servidor     = $servidorBanco;
            $this->usuario      = $usuarioBanco;
            $this->senha        = $senhaAcesso;
            $this->nomeDoBanco  = $nomeBanco;
            $this->nomeDaTabela = $nomeTabela;
    }

        //estabelecer a ligação entre PHP e MySql
        
        function criarConexao() {

            $conexao = new mysqli($this->servidor, $this->usuario, $this->senha) or
            exit($conexao->error);
            
            return $conexao;
        }

        //método para a criaçao fisica do banco de dados no servidor

        function criarBanco($conexao)
        {
            $sql = "CREATE DATABASE IF NOT EXISTS $this->nomeDoBanco";
            $resultado = $conexao->query($sql) or exit($conexao->error);
        }


        //metodo para selecionar o banco de dados
        function abrirBanco($conexao)
        {
            $conexao->select_db($this->nomeDoBanco);
        }

        //metodo para unificar o padrão de fontes "UFT-8"

        function definirCharset($conexao) {

            $conexao->set_charset("uft8");
        }

         //criar tabela no Banco de Dacos

         function criarTabela($conexao) {

            $sql = "CREATE TABLE IF NOT EXISTS $this->nomeDaTabela (
                nome VARCHAR(45),
                matricula INT(6) PRIMARY KEY,
                media DECIMAL(3,1))";
                $resultado = $conexao->query($sql) or exit($conexao->error);
         }




}




?>