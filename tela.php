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
            <fieldset id="q1field">
                <div id="elements">
                    <label>Digite seu nome:</label>
                    <input type="text" name="nome" placeholder="Jose da Silva..." />
                </div>
                <div id="elements">
                    <label>Selecione a data de nascimento:</label>
                    <input type="date" name="data" />
                    <input type="submit" value="Enter" />
                </div>
            </fieldset>
        </form>
    </div>
    <div>
        <h2><br>Questão 2:</h2>
        <form method="get" action="2.php">
            <fieldset id="fset">
                <legend>Calculadora</legend>
                <div id="elements">
                    <label>1° valor:</label>
                    <!-- Este input usa type="text" para permitir inserir numeros descimais e serem convertidos na 2.php-->
                    <input type="text" name="a" style="width: 100px;" />
                </div>
                <div id="elements">
                    <label>2° valor:</label>
                    <!-- Este input usa type="text" para permitir inserir numeros descimais e serem convertidos na 2.php-->
                    <input type="text" name="b" style="width: 100px;" />
                    <input type="submit" value="Enter" />
                </div>
                <div id="elements">
                    <input type="radio" name="op" value="+" />
                    <label>Soma</label>
                    <input type="radio" name="op" value="-" />
                    <label>Subtração</label>
                    <input type="radio" name="op" value="*" />
                    <label>Multiplicação</label>
                    <input type="radio" name="op" value="/" />
                    <label>Divisão</label>
                </div>
            </fieldset>
        </form>
    </div>

</body>

</html>