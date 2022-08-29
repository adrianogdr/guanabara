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
    $nome = $_GET["nome"];
    $data = $_GET["data"];
    $sexo = $_GET["sexo"];
    echo "<h2>Cadastrado:</h2>";
    ?>
    <table>
        <tr>
            <th>NOME</th>
            <th>DATA DE NASCIMENTO</th>
            <th>SEXO</th>
        </tr>
        <tr>
            <td><?php echo $nome; ?></td>
            <td><?php echo $data; ?></td>
            <td><?php echo $sexo; ?></td>
        </tr>
    </table>
    <form method="POST" action="tela.php">
        <br>
        <input class="botao" type="submit" name="voltar" value="Back"/>
    </form>
</body>

</html>