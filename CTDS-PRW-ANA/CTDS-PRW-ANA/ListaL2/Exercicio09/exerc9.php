<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title>Vetores em PHP</title>
  <link rel="stylesheet" href="formata-formulario.css">
</head> 
<body> 
    <h1>Lista L2 - Exercício 09</h1>
    <?php

    define("DESCONTO", 5/100);

    //testando se o cliente comprou, no mínimo, um produto na loja
        if(isset($_POST['produtos'])){ //sem [] em produtos
        //criar, manualmente, o vetor com o nome e o preço de cada produto do carrinho (índice é o primeiro escrito [dorflex])
            $vetorProdutos = ["arroz" => 20.00, 
                                "feijao" => 15.00,
                                "carne" => 50.00,
                                "verduras" => 7.00];

        //recebendo o nome de cada produto comprado  
            $produtosComprados = $_POST['produtos']; //vetor

        //percorrer vetor de produtos comprados com laço FOREACH. Antes criar variável somatória para PHP ir acumulando o valor de cada produto
            $soma = 0;
            echo "<p>";
            
            foreach($produtosComprados as $nomeDoProduto){
                //COM vetores índice numérico:  $produtosComprados as $nomeDoProduto
                $soma = $soma + $vetorProdutos[$nomeDoProduto];
                echo "Produto comprado = <span> $nomeDoProduto </span><br>";

        //desconto 60+
            $desconto = 0;
                if(isset($_POST['descontofidel'])){
                        $desconto = $soma * DESCONTO;
                        $soma = $soma - $desconto;
                    }
        
            }

        //mensagem
            $somaFormatada = number_format($soma, 2, ",", ".");
            $descontoFormatado = number_format($desconto, 2, ",", ".");
            echo"Caro Cliente, de acordo com a compra efetuada o desconto foi de <span>R$ $descontoFormatado</span><br>
            O valor total é de <span>R$ $somaFormatada</span>. 
            <br>Obrigado pela preferência e volte sempre.</p>";

        }
        else{ //não comprou nada
            echo "<p>Caro Cliente, você não adquiriu nenhum produto. Portanto, o valor de sua compra é de <span>R$0,00</span>. <br>Obrigado pela preferência e volte sempre.</p>";
        }
    ?>
</body>
</html>