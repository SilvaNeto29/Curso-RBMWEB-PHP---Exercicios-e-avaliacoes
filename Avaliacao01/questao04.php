<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 04!</title>
</head>

<body>
    <p>4. Faça a leitura de três valores e apresente como resultado a soma dos quadrados dos três valores lidos. </p>
    <br><br>
    <p>Olá. Escreva três valores e o programa somará suas potências ao quadrado.</p>
    <form action="questao04.php" method="get">
        Num 1<input type="number" name="num1">
        <br>
        Num 2<input type="number" name="num2">
        <br>
        Num 3<input type="number" name="num3">
        <br>
        <input type="submit" value="Calcular">
        <br>

        <?php
        function potencia($num1, $num2, $num3)
        {
            $num1 = pow($num1, 2);
            $num2 = pow($num2, 2);
            $num3 = pow($num3, 2);
            $soma = $num1 + $num2 + $num3;
            return $soma;
        }

        
        if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])) {
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $num3 = $_GET['num3'];

            echo "A soma das potencias é igual a: " . potencia($num1, $num2, $num3);
        } else {
            echo "Os numeros ainda não foram setados";
        }

        ?>

    </form>
</body>

</html>