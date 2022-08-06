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
        echo "<h2>7- Trabalhando com formularios: </h2>";
        ?>
        <form method="get" action="raiz.php">
            <label for="idvalor">Valor:&nbsp</label>
            <input type="number" id="idvalor" name="valor" />
            <input type="submit" value="Calcular" />
        </form>
    </div>
</body>

</html>