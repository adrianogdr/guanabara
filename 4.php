<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php
        echo "<h2>5- Operadores Relacionaveis: Ex: <, >, <=, >=, <>, !=, == ou ===</h2>";
        echo "<h2>6- Operadores Unário: Ex: (expressão ? verdadeiro : falso) sem o parenteses</h2>";
        $x = $_GET["a"];
        $y = $_GET["b"];
        $tipo = $_GET["op"];
        $r = $tipo == "s" ? $x + $y : $x - $y;
        echo '$x = ' . $x . '<br>$y = ' . $y;
        echo '<br>$tipo == "s" ? $x + $y : $x - $y<br>';
        echo "O resultado é: " . $r . "<br><br>";

        $a = 3;
        $b = "3";
        echo (var_dump($a)) . "<br>";
        echo (var_dump($b)) . "<br>";
        echo '$a = 3 e $b = "3"';
        $r = $a === $b ? "SIM" : "NÃO";
        echo "<br>As variaveis A e B são identicas? $r<br><br>";

        $x = $_GET["a"];
        $y = $_GET["b"];
        echo (var_dump($x)) . "<br>";
        echo (var_dump($y)) . "<br>";
        echo '$m = ($x + $y) / 2;';
        $m = ($x + $y) / 2;
        echo "<br>A nota foi $m sendo que o minimo permitido é 6 situação do aluno é: " . ($m > 6 ? "APROVADO" : "REPROVADO");
        ?>
    </div>
</body>

</html>