<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title>Fundamentos do PHP</title>
  <link rel="stylesheet" href="formata-formulario.css">
</head> 
<body> 
    <h1>Lista L1 - Exercício 07</h1>
    
    <?php
    //representando os percentuais por meio de constantes da linguagem PHP
        define("DESCONTO", 5/100);  
        define("ACRESCIMO", 2/100);

    //Recebendo o valor da compra do cliente
        $valorCompra = $_POST['valor-compra'];

    //botões de rádio e checkbox, deve testar se algum botão foi selecionado no formulário, se não o PHP emite uma mensagem de erro
        if(isset($_POST['forma-pagamento'])){
            //isset-> analisa se o usuário selecionou um botão

            //Recebendo a forma de pagamento do cliente
            $formaPagamento = $_POST['forma-pagamento'];

            //descobrir qual botão de rádio foi marcado pelo usuário
            if($formaPagamento == 0){
                $desconto = $valorCompra * DESCONTO;
            }else{
                $desconto = 0;
            }
        }else{
            exit("<p>Caro usuário, preste atenção nas informações fornecidas. A forma de pagamento é importante. Forneça o dado solicitado.</p>"); //exit-> qualquer comando não será mais executado
            //ou função die() = exit()
        }

    //botão de rádio para forma de entrega
        if(isset($_POST['forma-entrega'])){
            $entregaDomicilio = $_POST['forma-entrega'];
                //se marcou

            if($entregaDomicilio == 0){
                $acrescimo = $valorCompra * ACRESCIMO;
            }else{
                $acrescimo = 0;
            }
        }
        else{
            exit("<p>Caro usuário, preste atenção nas informações fornecidas. A forma de entrega é importante. Forneça o dado solicitado.</p>");
                //se não marcou 
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