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
    $n = $_GET["nome"];
    $d = $_GET["data"];
    $s = $_GET["sexo"];
    echo "Meu nome é " . $n . " e meu aniversário é dia " . $d . " sou " . $s;
    ?>
    <form method="POST" action="tela.php">
        <br>
        <input class="botao" type="submit" name="voltar" value="Back"/>
    </form>
</body>

</html>