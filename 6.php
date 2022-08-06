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
        <form method="get" action="cadastro.php">
            <label><br>Nome:</label>
            <input type="text" name="nome" />
            <label><br><br>Ano de Nascimento:</label>
            <input type="date" name="data" /><br><br>
            <fieldset id="fieldset_sexo">
                <legend>Sexo</legend>
                <input type="radio" id="masc" name="sexo" value="Homen" checked />
                <label for="masc">Masculino</label><br>
                <input type="radio" id="fem" name="sexo" value="Mulher" />
                <label for="fem">Feminino</label>
            </fieldset><br><br><br><br><br>
            <input type=submit value="Enviar">
        </form>
    </div>
</body>

</html>