<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title>Fundamentos do PHP</title>
  <link rel="stylesheet" href="formata-formulario.css">
</head> 
<body> 
    <h1>Lista L1 - Exercício 02 - Viagem da Maria em PHP</h1>
    
    <?php
    //Recebendo os Dados Entregues pelo navegador
        $distancia= $_POST["distancia"];
        $consumo = $_POST["consumo"];
        $preco = $_POST["preco"];

    //Calculando quantia de litros de gasolina gastos
        $quantosLitros = $distancia / $consumo;

    //Calculando o valor gasto na viagem (R$)
        $valorGasto = $quantosLitros * $preco;


    //O PHP tem comandos prontos para formatação de valores numéricos - number_format() => imediatamente antes do echo
        $quantosLitros = number_format($quantosLitros, 1, ",", ".");
        $valorGasto = number_format($valorGasto, 2, ",", ".");
            //*0 -> número sem casa decimal
            //"," -> troca . por ,
            //"." -> Separa os milhares

    //Retornando a resposta do cálculo
        echo "<p> Cara Maria, resultados do processamento da viagem: <br>
                -  Quantia de litros gastos = <span>$quantosLitros litros</span> <br>
                -  Valor gasto com a viagem = <span>R$$valorGasto</span>
        ";


    ?>
</body>
</html>