<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title>Fundamentos do PHP</title>
  <link rel="stylesheet" href="formata-formulario.css">
</head> 
<body> 
    <h1>Lista L1 - Exercício 08</h1>
    
    <?php
    //representando os percentuais por meio de constantes da linguagem PHP
        define("DESCONTO", 5/100);  
        define("ACRESCIMO", 2/100);

    //Recebendo o valor da compra do cliente
        $valorCompra = $_POST['valor-compra'];

    //botões de checkbox
        $desconto = 0;

        if(isset($_POST['forma-pagamento'])){
            //isset-> analisa se o usuário selecionou um botão

            //TESTAR SE MARCADO O CHECKBOX
            $desconto = $valorCompra * DESCONTO;
        }

    //botões de checkbox entrega
        $acrescimo= 0;

        if(isset($_POST['forma-entrega'])){

            //TESTAR SE MARCADO O CHECKBOX
            $acrescimo = $valorCompra * ACRESCIMO;
        }
    
    //calculando valor da compra
        $valorFinalCompra = $valorCompra - $desconto + $acrescimo;

        //Format
        $valorCompraForm = number_format($valorCompra, 2, ",", ".");
        $valorFinalCompraForm = number_format($valorFinalCompra, 2, ",", ".");
        $descontoForm = number_format($desconto, 2, ",", ".");
        $acrescimoForm = number_format($acrescimo, 2, ",", ".");

        echo "<p> Valor inicial da compra: R$<span> $valorCompra</span><br>
        Valor desconto: <span> $descontoForm</span>.<br>
        Valor acrescimo entrega:<span> $acrescimoForm</span>.<br>
        Valor final = <span> $valorFinalCompraForm </span>.
        ";   
    ?>

</body>
</html>