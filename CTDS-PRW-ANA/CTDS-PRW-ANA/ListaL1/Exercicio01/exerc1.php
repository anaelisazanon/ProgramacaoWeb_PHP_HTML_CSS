<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title>Fundamentos do PHP</title>
  <link rel="stylesheet" href="formata-formulario.css">
</head> 
<body> 
    <h1>Lista L1 - Exercício 01 - Envio de Dados ao Servidor com PHP</h1>
    <!-- <h1 (pode abrir uma tag php dentro da h1) > -->
    
    <?php
    /*comentário */
    //Recebendo os Dados Entregues pelo navegador
        $nomeDoAluno = $_POST["nome-aluno"];
            /*camel-case - primeira palavra minúscula e o resto maiúsculo*/ 
            /* $nomeDoAluno - variável criada agora*/
            /* name: nome-aluno (do input do html) */
            /* post - método usado no html */
        $nota1 = $_POST["nota1"]; /* pode ser " " ou ' ' */
        $peso1 = $_POST["peso1"];
        $nota2 = $_POST["nota2"];
        $peso2 = $_POST["peso2"];

    //Calculo da média
        $media = ($nota1*$peso1+$nota2*$peso2)/($peso1+$peso2);
    
    //Retornando a resposta do cálculo da média ao navegador - usar " "
        echo "<p> Caro(a) aluno(a) $nomeDoAluno, de acordo com os dados fornecidos, sua média na unidade Programação Web é igual <span> $media </span> </p>."; 
        //echo ou print
        //pode usar a tag <p> dentro do texto echo

    ?>
</body>
</html>