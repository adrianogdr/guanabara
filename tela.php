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
                    <input type="text" name="nome" placeholder="Jose da Silva..." style="width: 250px;" />
                </div>
                <br>
                <div>
                    <label>Selecione a data de nascimento:</label>
                    <input type="date" name="data" />
                    <input id="enter" type="submit" value="Enter" />
                </div>
            </fieldset>
        </form>
    </div>
    <div>
        <h2><br><br><br><br><br>Questão 2:</h2>
        <form method="get" action="2.php">
            <fieldset id="fset">
                <legend>Calculadora</legend>
                <div>
                    <label>1° valor:</label>
                    <!-- Este input usa type="text" para permitir inserir numeros descimais e serem convertidos na 2.php-->
                    <input type="text" name="a" />
                </div>
                <div>
                    <label>2° valor:</label>
                    <!-- Este input usa type="text" para permitir inserir numeros descimais e serem convertidos na 2.php-->
                    <input type="text" name="b" />
                    <input id="enter" type="submit" value="Enter" />
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
        <h2><br><br><br><br><br><br><br>Questão 3:</h2>
        <form method="get" action="3.php">
            <fieldset id="fset">
                <label>Valor do produto em R$:</label>
                <input style="width: 100px;" type="text" name="produt" placeholder="0.00" />
                <br><br>
                <input type="radio" name="bonus" value="up" />
                <label>Aumento</label>
                <input type="radio" name="bonus" value="down" />
                <label>Desconto de</label>
                <input style="width: 30px;" type="number" name="percent" />
                <label>%</label>
                <input id="enter" type="submit" value="Enter" />
            </fieldset>
        </form>
    </div>

    <div>
        <h2><br><br><br><br><br>Questão 4:</h2>
        <form method="get" action="4.php">
            <fieldset id="fset">
                <label>Dado:</label>
                <input style="width: 50px;" type="number" name="n" />
                <input id="enter" type="submit" value="Enter" />
            </fieldset>
        </form>
    </div>

    <div>
        <h2><br><br><br>Questão 5:</h2>
        <form method="get" action="5.php">
            <fieldset id="fset">
                <label>Nome:</label>
                <input type="text" name="nome" />
                <label><br><br>Ano de Nascimento:</label>
                <input type="date" name="data" /><br><br>
                <div>
                    <fieldset id="fset_sexo">
                        <legend>Sexo</legend>
                        <input type="radio" id="masc" name="sexo" value="Homen" checked />
                        <label for="masc">Masculino</label>
                        <input type="radio" id="fem" name="sexo" value="Mulher" />
                        <label for="fem">Feminino</label>
                    </fieldset>
                </div>
                <div>
                    <input id="enter" type=submit value="Enviar">
                </div>
            </fieldset>
        </form>
    </div>
</body>

</html>