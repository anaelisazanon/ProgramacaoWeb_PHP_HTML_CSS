<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title>Vetores em PHP</title>
  <link rel="stylesheet" href="formata-formulario.css">
</head> 
<body> 
    <h1>Lista L2 - Exercício 04</h1>
    <?php
    //testando se o cliente comprou, no mínimo, um produto na loja
        if(isset($_POST['produtos'])){ //sem [] em produtos
        //criar, manualmente, o vetor com o nome e o preço de cada produto do carrinho
            $vetorProdutos = ["Produto cosmético" => 280.32, 
                                "Chocolate" => 30.85,
                                "Tênis" => 500.00];

        //recebendo o nome de cada produto comprado  
            $produtosComprados = $_POST['produtos']; //vetor
        //informando na tela o que foi selecionado
            /*echo "<pre>";
            print_r($produtosComprados);
            echo"</pre>";*/

        //percorrer vetor de produtos comprados com laço FOREACH. Antes criar variável somatória para PHP ir acumulando o valor de cada produto
            $soma = 0;
            echo "<p>";
            
            foreach($produtosComprados as $nomeDoProduto){
                //Com vetor índice associativo (Ex: "Produto cosmético") usa foreach completo:  $produtosComprados as $x => $nomeDoProduto
                //COM vetores índice numérico:  $produtosComprados as $nomeDoProduto
                $soma = $soma + $vetorProdutos[$nomeDoProduto];

                echo "Produto comprado = <span> $nomeDoProduto </span> <br>";
            }

            $somaFormatada = number_format($soma, 2, ",", ".");

            echo "Caro Cliente, de acordo com a compra efetuada o valor total é de <span>R$ $somaFormatada</span>. <br>Obrigado pela preferência e volte sempre.</p>";

        }
        else{ //não comprou nada
            echo "<p>Caro Cliente, você não adquiriu nenhum produto de nossa loja virtual. Portanto, o valor de sua compra é de <span>R$0,00</span>. <br>Obrigado pela preferência e volte sempre.</p>";
        }
    ?>
</body>
</html>