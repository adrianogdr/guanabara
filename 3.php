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
        $preco = 100;
        echo "<br>O preço do produto é R$".number_format($preco,2,",");
        $preco+=$preco*10/100;
        echo "<br>O novo preço com 10% de aumento é: R$".number_format($preco,2,",");
        $preco=100;
        $preco-=$preco*10/100;
        echo "<br>O novo preço com 10% de desconto é: R$".number_format($preco,2,",");
        echo "<br>Pré e Pós incremento: ++a ou a++";
        echo "<br>Pré e Pós decremento: --a ou a--";
        ?>
    </div>
</body>
</html>