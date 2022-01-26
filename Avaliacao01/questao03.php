<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 3!</title>
</head>

<body>
    <p>3. Faça um programa que leia um número inteiro positivo ímpar N e imprima todos os números ímpares de 1 até N em ordem decrescente.</p>
    <br><br>
    <p>Olá. Escreva um valor ímpar e o programa irá imprimir os ímpares que estão abaixo.</p>
    <form action="questao03.php" method="get">
        Valor <input type="number" name="num">
        <input type="submit" value="Calcular">
        <br>

        <?php

        function calcula($num)
        {
            if ($num % 2 == 0) {
                echo "O número não é impar.";
            } else {
                for ($i = $num; $i >= 1; $i -= 2) {
                    echo $i . " - ";
                }
            }
        }

        if (isset($_GET['num'])) {
            $num = $_GET['num'];
            calcula($num);
        } else {
            echo "O número ainda não foi setado";
        }
        ?>

    </form>
</body>

</html>