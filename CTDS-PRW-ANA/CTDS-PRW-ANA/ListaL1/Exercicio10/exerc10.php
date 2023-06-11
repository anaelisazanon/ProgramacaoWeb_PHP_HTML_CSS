<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title>Fundamentos do PHP</title>
  <link rel="stylesheet" href="formata-formulario.css">
</head> 
<body> 
    <h1>Lista L1 - Exercício 10 - Ana Elisa Zanon</h1>
    
    <?php
    //representando os percentuais por meio de constantes da linguagem PHP
        define("DESCONTO55", 5/100);  
        define("DESCONTO70", 7/100);
        define("DESCONTOFIDEL", 5/100);

    //Recebendo o valor da compra do cliente
        $valorCompra = $_POST['valor-compra'];

    //botões de radio
        if(isset($_POST['idade'])){
            $desconto = 0;

            $idade = $_POST['idade'];

            if($idade == 0){
                $desconto = $valorCompra - $valorCompra;
            }elseif ($idade == 1){
                $desconto = $valorCompra * DESCONTO55;
            }else{
                $desconto = $valorCompra * DESCONTO70;  
            }
       
        }else{
            exit("<p>Caro usuário, selecione uma opção de pagamento</p>");
        }

    //botões de checkbox 
        $descontoFidel = 0;
        if(isset($_POST['fidelidade'])){
            $descontoFidel = $valorCompra * DESCONTOFIDEL;
        }

    //calculando valor final
        $valorFinalCompra = $valorCompra - $desconto - $descontoFidel;

    //formatação
        $descontoForm = number_format($desconto, 2, ",", ".");
        $descontoForm2 = number_format($descontoFidel, 2, ",", ".");
        $valorCompraForm = number_format($valorCompra, 2, ",", ".");
        $valorFinalCompraForm = number_format($valorFinalCompra, 2, ",", ".");

    //mensagem final
        echo "<p> Valor inicial da compra: R$<span> $valorCompraForm </span>
        <br>Valor desconto por Idade: R$<span>$descontoForm</span>
        <br>Valor desconto fidelidade: R$<span>$descontoForm2</span>
        <br>Valor final: R$<span>$valorFinalCompraForm</span>.<br>";
    ?>
</body>
</html>