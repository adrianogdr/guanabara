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
    <!-- 
    Ctrl + P e use @: para procurar funçoes e metodos e variaveis rapidamente
    Ctrl + Shft + L para locatilar e modificar todo o conteudo alvo semelhante
     -->
    <div>
        <h2>Questão 1:</h2>
        <form method="get" action="1.php">
            <label>Que ano estamos?:<br><br></label>
            <input type="date" placeholder="yyyy" name="data" />
            <label><br><br>Digite seu nome:<br><br></label>
            <input type="text" name="nome" />
            <label><br><br>Digite seu ano de nascimento:<br><br></label>
            <input style="width: 40px" type="number" name="nasc" />
            <input type="submit" value="Enter" />
        </form>
    </div>
    <div>
        <h2><br>Questão 2:</h2>
        <form method="get" action="2.php">
            <label>Digite o 1° valor:</label>
            <input type="number" name="a" />
            <label><br><br>Digite o 2° valor:</label>
            <input type="number" name="b" />
            <input type="submit" value="Enter" /><br><br>
            <fieldset style="width: 55%;">
                <legend>Digite qual operação:</legend>
                <input type="radio" name="op" value="+" />
                <label>Soma</label>
                <input type="radio" name="op" value="-" />
                <label>Subtração</label>
                <input type="radio" name="op" value="*" />
                <label>Multiplicação</label>
                <input type="radio" name="op" value="/" />
                <label>Divisão</label>
            </fieldset>
        </form>
    </div>

</body>

</html>