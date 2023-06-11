<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title>Fundamentos do PHP</title>
  <link rel="stylesheet" href="formata-formulario.css">
</head> 
<body> 
    <h1>Lista L1 - Exercício 05</h1>
    
    <?php
    //representando os percentuais por meio de constantes da linguagem PHP
        define("TAXA_CAMBIO", 5.23); //normalmente em maiusculo constantes
            //define("DESCONTO", 10/100); 

    //Recebendo os Dados Entregues pelo navegador
        $quantosDolares = $_POST['quantos-dolares'];

    //calcular o valor final da conversão em reais
        $valorReais = $quantosDolares * TAXA_CAMBIO;
    
    //Format
        $quantosDolares= number_format($quantosDolares, 2, ",", ".");
        $valorReais= number_format($valorReais, 2, ",", ".");

    //Retornando a resposta do cálculo
        echo "<p> Quantia de dólares: <span>$quantosDolares dóalres</span>.
        <br>O valor da conversão de dólar para reais é <span>$valorReais reais</span>.<br>
        Valor da taxa de câmbio: <span>",TAXA_CAMBIO, "</span>.
        ";
        //mostrar constante no comando ECHO -> 
    ?>
</body>
</html>