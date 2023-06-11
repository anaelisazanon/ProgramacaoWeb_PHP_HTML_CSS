<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title>Vetores em PHP</title>
  <link rel="stylesheet" href="formata-formulario.css">
</head> 
<body> 
    <h1>Lista L2 - Exercício 01</h1>
    <!-- <h1 (pode abrir uma tag php dentro da h1) > -->
    
    <?php
   //recebemos os dados do form. e guardamos em 3 variáveis escaláveis (simples)
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
    
    //criar vetor a partir das 3 variaveis acima
        $vetorNotas = [$nota1,$nota2,$nota3]; 
        //ou pode usar sem declarar antes
            //$vetorNotas = [$_POST['nota1'],$_POST['nota2'],$_POST['nota3']]; 
        
    //fazendo PHP mostrar conteúdo do vetor na página
        echo "<pre>"; //quebrar linha e melhor visualizar
        print_r($vetorNotas); //não pode usar echo com vetor
        echo "</pre>";

    //calcular e mostrar a média
        $soma = array_sum($vetorNotas);
        $media = $soma /count($vetorNotas); //count conta quantas células tem no vetor

    //mensagem
        echo "<p> A média dos alunos é <span>$media</span></p>";
    ?>
</body>
</html>