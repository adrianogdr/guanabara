<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css" />
    <title>Document</title>
</head>

<body>
    <?php
    $idade = $_GET["idade"];
    echo "Você tem $idade<br>";
    if ($idade>=16 && $idade<18) {
        echo "Voto opcional!";
        echo "<br>Não pode dirigir!";
    }elseif ($idade>=18 && $idade<=65) {
        echo "Voto obrigatório!";
        echo "<br>Pode dirigir!";
    }elseif ($idade>65) {
        echo "Voto opcional!";
        echo "<br>Pode dirigir!";
    }elseif ($idade<16) {
        echo "Não pode votar!";
        echo "<br>Não pode dirigir!";
    }
    ?>
    <form method="POST" action="tela.php">
        <br>
        <input class="botao" type="submit" name="voltar" value="Back"/>
    </form>
</body>

</html>