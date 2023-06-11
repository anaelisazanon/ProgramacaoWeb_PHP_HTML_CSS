<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title>Fundamentos do PHP</title>
  <link rel="stylesheet" href="formata-formulario.css">
</head> 
<body> 
    <h1>Lista L1 - Exercício 09</h1>
    
    <?php
    //representando os percentuais por meio de constantes da linguagem PHP
        define("DESCONTO", 5/100);  
        define("ACRESCIMO", 2/100);

    //Recebendo o valor da compra do cliente
        $valorCompra = $_POST['valor-compra'];

    //botões de radio
        if(isset($_POST['forma-pagamento'])){
            $acrescimo = 0;
            $desconto = 0;

            //isset-> analisa se o usuário selecionou um botão
            $formaPagamento = $_POST['forma-pagamento'];

            if($formaPagamento == 0){
                $desconto = $valorCompra * DESCONTO;

                $descontoForm = number_format($desconto, 2, ",", ".");
                $valorCompraForm = number_format($valorCompra, 2, ",", ".");
                echo "<p> Valor inicial da compra: R$<span> $valorCompraForm </span><br>Valor desconto pagamento à vista: <span> $descontoForm</span>.<br>";
            }else{
                $acrescimo = $valorCompra * ACRESCIMO;

                $acrescimoForm = number_format($acrescimo, 2, ",", ".");
                $valorCompraForm = number_format($valorCompra, 2, ",", ".");
                echo "<p> Valor inicial da compra: R$<span> $valorCompraForm </span><br>Valor acrescimo pagamento a prazo:<span> $acrescimoForm</span>.<br>"; 
            }
       
        }else{
            exit("<p>Caro usuário, selecione uma opção de pagamento</p>");
        }

        $visa = "<br><b>Cliente NÃO está participando do sorteio do cartão visa!</b>"; //vai por padrã dar print nessa mensagem mas se ver que está selecionado o checkbox vai ser subistituido pela próxima mensagem de estar participando

    //botões de checkbox entrega
        if(isset($_POST['visa'])){
            $visa = "<br><b>Cliente está participando do sorteio do cartão visa!</b>";
        }
    //calculando valor da compra
        $valorFinalCompra = $valorCompra - $desconto + $acrescimo;

        //Format
        $valorFinalCompraForm = number_format($valorFinalCompra, 2, ",", ".");
        
    //Valor final
        echo "<br><br>Valor final = <span> $valorFinalCompraForm </span>.<br> $visa";

    ?>
</body>
</html>