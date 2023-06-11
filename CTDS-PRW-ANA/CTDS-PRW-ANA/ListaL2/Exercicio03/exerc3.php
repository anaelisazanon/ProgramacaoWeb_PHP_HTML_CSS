<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title>Vetores em PHP</title>
  <link rel="stylesheet" href="formata-formulario.css">
</head> 
<body> 
    <h1>Lista L2 - Exercício 03</h1>
    <?php
   //recebemos os dados do form. e guardamos em 3 variáveis escaláveis (simples)
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];

        $nome1 = $_POST['nome1'];
        $nome2 = $_POST['nome2'];
        $nome3 = $_POST['nome3'];
    
    //criar vetor com índice associativo. O nome de cada aluno será o endereço de memória e a nota de cada aluno será o conteúdo dentro das células do vetor
        $vetorNotas = array($nome1 => $nota1,
                        $nome2 => $nota2,
                        $nome3 => $nota3); 
            //versão nova usa [] // versão antiga usa array( ) mesma função
    
    //!!ex 3 - ordenar vetor pelo conteúdo descrescente!!
        arsort($vetorNotas); //muda o vetorNotas original, ent quando chamar vai estar sempre ordenado, se n quiser mudar o original criar um novo: // vetorOrdenado = arsort($vetorNotas);

    //fazendo PHP percorrer o vetor e montar uma tabela na página web com so dados retirados do vetor
        echo "<table>
                <tr>
                    <th> Aluno</th>
                    <th> Nota de PRW </th>
                </tr>";
        foreach($vetorNotas as $nome => $nota){
            //laço for -> a cada repetição o x guarda o y
            echo "<tr>
                    <td>$nome</td>
                    <td>$nota</td>
                </tr>";
        }
        echo "</table>";

    //mostrar nome do aluno e nota que teve a maior nota registrada no vetor
        $maiorNota = max($vetorNotas);
    
    //localizar célula com a maior nota e devolver o índice desta célula que é o nome do aluno com maior nota
        $alunoComMaiorNota = array_search($maiorNota, $vetorNotas);

        echo "<p> De acordo com as notas e alunos cadastrados no vetor, temos os seguintes resultados: <br><br>
            Aluno com maior nota = <span> $alunoComMaiorNota </span> <br><br>
            Nota deste aluno = <span> $maiorNota </span></p>"
            //em caso de 2 valores iguais mostra somente o primeiro valor
    ?>
</body>
</html>