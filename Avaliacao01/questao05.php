<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 05!</title>
</head>
<body>
<p>5. Faça a leitura da nota de cinco alunos e informe qual e quantos foram aprovados. Considere para aprovador notas maiores que 6.</p>
    <br><br>
    <p>Olá. Escreva a nota de 5 alunos e o programa dirá se foram aprovados (maior que 60%).</p>
    <form action="questao05.php" method="get">
        Aluno 1<input type="number" name="nota1"><br>
        Aluno 2<input type="number" name="nota2"><br>
        Aluno 3<input type="number" name="nota3"><br>
        Aluno 4<input type="number" name="nota4"><br>
        Aluno 5<input type="number" name="nota5"><br>
        <input type="submit" value="Calcular">
        <br>

        <?php

        function calculaAprovacao($nota1,$nota2,$nota3,$nota4,$nota5){
            if($nota1 >= 6){
                echo "<br>Aluno 1 aprovado";
            }   else {
                echo "<br>Aluno 1 reprovado";
            }

            if($nota2 >= 6){
                echo "<br>Aluno 2 aprovado";
            }   else {
                echo "<br>Aluno 2 reprovado";
            }

            if($nota3 >= 6){
                echo "<br>Aluno 3 aprovado";
            }   else {
                echo "<br>Aluno 3 reprovado";
            }

            if($nota4 >= 6){
                echo "<br>Aluno 4 aprovado";
            }   else {
                echo "<br>Aluno 4 reprovado";
            }

            if($nota5 >= 6){
                echo "<br>Aluno 5 aprovado";
            }   else {
                echo "<br>Aluno 5 reprovado";
            }
        }

        if(isset($_GET['nota1']) && isset($_GET['nota2']) && isset($_GET['nota3']) && isset($_GET['nota4']) && isset($_GET['nota5'])){
            $nota1 = $_GET['nota1'];
            $nota2 = $_GET['nota2'];
            $nota3 = $_GET['nota3'];
            $nota4 = $_GET['nota4'];
            $nota5 = $_GET['nota5'];
            echo calculaAprovacao($nota1,$nota2,$nota3,$nota4,$nota5);
        }   else{
            echo "<br>Os números ainda não foram setados.";
        }


        ?>

    </form>
</body>
</html>