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
            <fieldset id="fset">
                <div>
                    <label>Digite seu nome:</label>
                    <input type="text" name="nome" placeholder="Jose da Silva..." style="width: 250px;"/>
                </div>
                <br>
                <div>
                    <label>Selecione a data de nascimento:</label>
                    <input type="date" name="data" />
                    <input type="submit" value="Enter" />
                </div>
            </fieldset>
        </form>
    </div>
    <div>
        <h2><br><br><br><br>Questão 2:</h2>
        <form method="get" action="2.php">
            <fieldset id="fset">
                <legend>Calculadora</legend>
                <div>
                    <label>1° valor:</label>
                    <!-- Este input usa type="text" para permitir inserir numeros descimais e serem convertidos na 2.php-->
                    <input type="text" name="a" style="width: 100px;" />
                </div>
                <div>
                    <label>2° valor:</label>
                    <!-- Este input usa type="text" para permitir inserir numeros descimais e serem convertidos na 2.php-->
                    <input type="text" name="b" style="width: 100px;" />
                    <input type="submit" value="Enter" />
                </div>
                <br>
                <div>
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

    <div>
        <h2><br><br><br><br><br><br>Questão 3:</h2>
        <form method="get" action="3.php">
            <fieldset id="fset">
                <label>Valor do produto em R$:</label>
                <input style="width: 100px;" type="text" name="produt" placeholder="0.00"/>
                <label>%:</label>
                <input style="width: 30px;" type="number" name="percent"/>
                <br><br>
                <input type="radio" name="bonus" value="up"/>
                <label>Aumento</label>
                <input type="radio" name="bonus" value="down"/>
                <label>Desconto</label>
                <input type="submit" value="Enter"/>
            </fieldset>
        </form>
    </div>
</body>

</html>