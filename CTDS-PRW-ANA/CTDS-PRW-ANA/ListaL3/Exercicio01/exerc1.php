<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title>Matrizes em PHP</title>
  <link rel="stylesheet" href="formata-formulario.css">
</head> 
<body> 
    <h1>Lista L3 - Exercício 01</h1>
    <?php
   //recebemos os dados do form. e guardamos em 3 variáveis escaláveis (simples)
        $nome1 = $_POST['nome1'];
        $nome2 = $_POST['nome2'];
        $nome3 = $_POST['nome3'];

        $matricula1 = $_POST['matricula1'];
        $matricula2 = $_POST['matricula2'];
        $matricula3 = $_POST['matricula3'];

        $media1 = $_POST['media1'];
        $media2 = $_POST['media2'];
        $media3 = $_POST['media3'];

    //criar vetor com índice associativo
        //*o índice vai ser sempre o primeiro// $matricula1 é índice
        $matrizAlunos = [$matricula1 => [$nome1, $media1],
                        $matricula2 => [$nome2, $media2],
                        $matricula3 => [$nome3, $media3]];

        //outra possibilidade de amazenamento os 3 dados (sem matrícula como índice principal)
            /*$matrizAlunos = [[$nome1, $matricula1, $media1],
                            [$nome2, $matricula2, $media2],
                            [$nome3, $matricula3, $media3]];*/

    //fazendo PHP percorrer o vetor e montar uma tabela na página web com so dados retirados do vetor
        echo "<table>
                <caption>Relatório do desempenho dos alunos</caption>
                <tr>
                    <th>Matrícula</th>
                    <th>Nome</th>
                    <th>Média</th>
                </tr>";

    //percorrendo a matriz com laço foreach para o PHP enviar ao navegador os dados que irão montar o corpo da tabela
        foreach($matrizAlunos as $matricula => $vetorInterno){
            //OU usar: foreach($matrizAlunos as $matricula => $vetor[$nome, $media])
            echo "<tr>
                    <td>$matricula</td>
                    <td>$vetorInterno[0]</td>
                    <td>$vetorInterno[1]</td>
                </tr>";
        }
        echo "</table>";
    ?>
</body>
</html>