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
<div>
        <?php
        $v1 = $_GET["a"];
        $v2 = $_GET["b"];
        $operacao = $_GET["op"];
        echo "Os valores informados são $v1 e $v2<br>";
        if ($operacao=="+") {
            echo "A soma é: " . $v1 + $v2 . ".<br>";
        }elseif ($operacao=="-") {
            echo "A subtração é: " . $v1 - $v2 . ".<br>";
        }elseif ($operacao=="*") {
            echo "A multiplicação é: " . $v1 * $v2 . ".<br>";
        }elseif ($operacao=="/") {
            echo "A divisão é: " . $v1 / $v2 . ".<br>";
            echo "O mod da divisão é: " . $v1 % $v2 . ".<br>";
        }
        ?>
    </div>
    <form method="POST" action="tela.php">
        <br>
        <input class="botao" type="submit" name="voltar" value="Back"/>
    </form>
</body>
</html>