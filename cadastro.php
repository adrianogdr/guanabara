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
    $n=$_GET["nome"];
    $d=$_GET["data"];
    $s=$_GET["sexo"];
    echo "<br>Meu nome é ".$n." e meu aniversário é dia ".$d." sou ".$s;
    ?>
</body>
</html>