<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Questão 1 - PHP + MySql </title> 
  <link rel="stylesheet" href="format-banco.css">

</head> 

<body> 
    <h1> Fundamentos de PHP com MySQL - exercício 1</h1>
    <form action="index.php" method= "POST">  
      <fieldset>
        
        <legend>Cadastro de Alunos</legend>

        <label class="alinha">Nome: </label>
        <input type="text" name="nome" autofocus> <br>
        
        <label class="alinha">Matrícula: </label>
        <input type="text" name="matric" autofocus> <br>
        
        <label class="alinha">Média Final em PRW: </label>
        <input type="number" name="media" autofocus min="0" max="10" step="0.01"> <br>

        <button type="submit" name="enviar">Efetuar Cadastro do Aluno</button> <br>
        <button type="submit" name="tabular">Mostrar Dados dos Alunos</button> <br>
        <button type="submit" name="aprovados">Mostrar Número de Aprovados</button> <br>

</fieldset>

    </form>

    <?php
      
      //devemos, antes de qualquer coisa, inserir as includes que irão conter as classes BancoDeDados e Alunos. 
      //as duas classes serão cinstruídas em arquivos externos para que possam ser reutilizadas em qualquer outra aplicacão php<->banco de dados. 

      require_once "criar-classe-banco-de-dados.inc.php";
      require_once "criar-classe-alunos.inc.php";


      //criando o objeto BancoDeDados por meio do construtor, e passando os parametros necessários. 127.0.0.1 = localhost (loopback de rede)

      $banco = new BancoDeDados("localhost", "root", "", "CTDS", "alunos");

      //visualuzar o conteúdo de um objetio criado na pagina web
      //var_dump($banco);

      //invocar o método do objeto $banco que cria a conexão fisica do php com mysql

      $conexao = $banco->criarConexao();

      echo "<p> A conexão com o banco de dados MySql foi concluida com sucesso</p>";

      //invocar o metodo e cria banco de dados fisico no servidor;

      $banco->criarBanco($conexao);

      echo"<p>Banco de dados criado com sucesso no servidor</p>";

      //invocar o metodo que seleciona o banco de dados
      
      $banco->abrirBanco($conexao);

      //invocar o método que define a tabela de símbolos no banco dedos

      $banco->definirCharset($conexao);

      //invocar o metodo que cria a tabela

      $banco->criarTabela($conexao);

      


    ?>
</body> 
</html> 
 