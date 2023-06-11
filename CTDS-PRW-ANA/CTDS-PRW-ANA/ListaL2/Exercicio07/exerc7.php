<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title>Vetores em PHP</title>
  <link rel="stylesheet" href="formata-formulario.css">
</head> 
<body> 
    <h1>Lista L2 - Exercício 07</h1>
    <?php
   //recebemos os dados do form. e guardamos em 3 variáveis escaláveis (simples)
        $idade1 = $_POST['idade1'];
        $idade2 = $_POST['idade2'];
        $idade3 = $_POST['idade3'];

        $nome1 = $_POST['nome1'];
        $nome2 = $_POST['nome2'];
        $nome3 = $_POST['nome3'];
    
    //criar vetor com índice associativo
        //o índice vai ser sempre o primeiro $nome1 => $idade1 (nome1 é índice)
        $vetorPessoas = [$nome1 => $idade1,
                        $nome2 => $idade2,
                        $nome3 => $idade3];
    
    //!!ex 7 - ordenar vetor pelo nomes das pessoas mantendno a associação entre pessoa e idade em ordem alfabética crescente do nome da pessoa (sem r). Ordenação pelo índice (chave = k)
        ksort($vetorPessoas); //muda o vetorNotas original, ent quando chamar vai estar sempre ordenado, se n quiser mudar o original criar um novo: // vetorOrdenado = ksort($vetorPessoas);

    //fazendo PHP percorrer o vetor e montar uma tabela na página web com so dados retirados do vetor
        echo "<table>
                <tr>
                    <th> Nome</th>
                    <th> Idade </th>
                </tr>";

        foreach($vetorPessoas as $nome => $idade){
            //laço for -> a cada repetição o x guarda o y
            echo "<tr>
                    <td>$nome</td>
                    <td>$idade</td>
                </tr>";
        }
        echo "</table>";
    ?>
</body>
</html>