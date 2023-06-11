<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title>Fundamentos do PHP</title>
  <link rel="stylesheet" href="formata-formulario.css">
</head> 
<body> 
    <h1>Lista L1 - Exercício 03 - Loja</h1>
    
    <?php
    //representando os percentuais por meio de constantes da linguagem PHP
        define("DESCONTO", 0.1); //normalmente em maiusculo constantes
            //define("DESCONTO", 10/100); 
        define("ICMS", 0.12);
        define("COMISSAO",0.05);

    //Recebendo os Dados Entregues pelo navegador
        $valorVenda = $_GET['valorVenda'];

    //calcular o valor dos desconto
        $valorDesconto = $valorVenda * DESCONTO;

    //calcular ICMS
        $valorIcms = $valorVenda * ICMS;

    //calcular Comissão
        $valorComissao = $valorVenda * COMISSAO;
    
    //Format
        $valorDesconto = number_format($valorDesconto, 2, ",", ".");
        $valorVenda  = number_format($valorVenda, 2, ",", ".");
        $valorIcms = number_format($valorIcms, 2, ",", ".");
        $valorComissao = number_format($valorComissao, 2, ",", ".");

    //Retornando a resposta do cálculo
        echo "<p> O valor do desconto obtido pelo cliente: <span>$valorDesconto reais</span>.<br>
        O valor do ICMS pago pela loja (12% sobre o total da compra) é <span>$valorIcms reais</span>.<br>
        A comissão do vendedor (5% sobre o total da compra) <span>$valorComissao reais</span>.<br>
        ";
    ?>
</body>
</html>