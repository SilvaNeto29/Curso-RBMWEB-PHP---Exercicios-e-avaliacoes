<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão Extra</title>
</head>

<body>
    <p>Questão extra. Escreva um programa que leia um número inteiro maior do que zero e devolva, na tela, a soma de todos os seus algarismos.</p>
    <br>
    <p>Olá. Digite um número</p>

    <form action="questaoextra.php" method="get">
        Valor <input type="number" name="num">
        <input type="submit" value="Calcular">
        <br>
        <br>
        <?php 
        
        function calculaSoma($num){
            $soma = 0;
            while ($num > 0){
            $resto = $num % 10;
            $num = ($num - $resto)/10;
            $soma = $soma + $resto;
            }
            echo "O valor da soma é: ".$soma;
        }
        
        if(isset($_GET['num'])){
            $num = $_GET['num'];
             calculaSoma($num);
        }   else {
            echo "O número ainda não foi setado";
        }

        ?>
    </form>
</body>

</html>