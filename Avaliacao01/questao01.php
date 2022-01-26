<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 01</title>
</head>

<body>
    <p>1. Peça ao usuário para digitar três valores inteiros e imprima a soma deles.</p>
    <br><br>
    <p>Olá. Escreva dois valores abaixo e clique em calcular.</p>
    <form action="questao01.php" method="get">
        Valor 1<input type="number" name="num1">
        <br>
        Valor 2<input type="number" name="num2">
        <br>
        Valor 3<input type="number" name="num3">
        <br>
        <input type="submit" value="Calcular">
        <?php

        function soma($num1, $num2, $num3)
        {
            $soma = $num1 + $num2 + $num3;
            return $soma;
        }
        
        if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])){
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $num3 = $_GET['num3'];
            echo "A soma é: " . soma($num1, $num2, $num3);
        } else {
            echo "Os numeros ainda não estão setados";
        }
        ?>
    </form>
</body>

</html>