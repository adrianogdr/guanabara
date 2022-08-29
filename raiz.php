<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $valor = $_GET["valor"];
    $rq = sqrt($valor);
    echo "Digitou o valor $valor<br>";
    echo "A raiz quadrada de $valor é: " . number_format($rq, 2, ",");
    ?>
    <form method="POST" action="tela.php">
        <br>
        <input type="submit" name="voltar" value="Back"/>
    </form>
</body>

</html>