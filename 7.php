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
    $o = $_GET["op"];

    switch ($o) {
        case 'SAQUE':
            echo "<h2>Você escolheu a operação saque!</h2>";
            break;
        case 'EXTRATO':
            echo "<h2>Você escolheu a operação extrato!</h2>";
            break;
        case 'DEPOSITO':
            echo "<h2>Você escolheu a operação deposito!</h2>";
            break;
        case 'SAIR':
            echo "<h2>Você escolheu a operação sair!<br><br>Muito obrigado tenha um bom dia!</h2>";
            break;
        default:
            echo "<h2>Tempo expirado insira o cartão novamente...</h2>";
            break;
    }
    ?>
    <form method="POST" action="tela.php">
    <br>
    <input class="botao" type="submit" name="voltar" value="Back"/>
</form>
</body>
</html>