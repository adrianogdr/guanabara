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
        $preco = $_GET['produt'];
        $perc = $_GET['percent'];
        $p = $_GET['bonus'];
        echo "<br>O preço informado é R$" . number_format($preco, 2, ",");
        if ($p=="up") {
            $preco += $preco * $perc / 100;
            echo "<br>O novo preço com aumento de ".$perc."% é: R$" . number_format($preco, 2, ",");
        }
        if ($p=="down") {
            $preco -= $preco * $perc / 100;
            echo "<br>O novo preço com desconto de ".$perc."% é: R$" . number_format($preco, 2, ",");
        }
        echo "<br><br>DICAS: lembre-se do...";
        echo "<br>Pré e Pós incremento: ++a ou a++";
        echo "<br>Pré e Pós decremento: --a ou a--";
        ?>
    </div>
</body>

</html>