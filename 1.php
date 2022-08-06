<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css" />
    <title>Questão 1</title>
</head>

<body>
    <div>
        <?php
        $n = $_GET["nome"];
        $a = $_GET["nasc"];
        $i = (integer)$_GET["data"];
        echo "Seu nome é ".$n." e sua idade é ".$i-$a." anos.";
        ?>
    </div>
</body>

</html>