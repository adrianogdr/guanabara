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
        $text = $_GET["n"];
        echo "Variavel como escrita: ";
        var_dump($text);
        $igual = (integer)$text;
        echo "<br>Variavel como texto: ";
        var_dump($igual);
        $retVal = ($igual === $text) ? "SIM" : "NAO";
        echo "<br>Usando '===' as variaveis são idênticas? ".$retVal;
        $retVal = ($igual == $text) ? "SIM" : "NAO";
        echo "<br>Usando '==' as variaveis são iguais? ".$retVal;
        ?>
    </div>
</body>

</html>