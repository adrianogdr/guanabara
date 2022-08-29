<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css" />
    <title>Document</title>
</head>

<body class="container flexivel vertical">
    <!-- 
    Ctrl + P e use @: para procurar funçoes e metodos e variaveis rapidamente
    Ctrl + Shft + L para locatilar e modificar todo o conteudo alvo semelhante
     -->
    <div class="centralizar fverde">
        
    </div>
    <div class="centralizar fverde">
        <h2>Questão 1:</h2>
        <form method="get" action="1.php">
            <fieldset>
                <label>Digite seu nome:</label><br>
                <input type="text" name="nome" placeholder="Jose da Silva..." style="width: 150px;" />
                <br><br>
                <label>Selecione a data de nascimento:</label><br>
                <br>
                <input type="date" name="data" />
                <input class="botao" type="submit" value="Enter" />
            </fieldset>
        </form>
    </div>
    <div class="centralizar fazul">
        <h2>Questão 2:</h2>
        <form method="get" action="2.php">
            <fieldset>
                <legend>Calculadora</legend>
                <label>1° valor:</label>
                <!-- Este input usa type="text" para permitir inserir numeros descimais e serem convertidos na 2.php-->
                <input type="text" name="a" />
                <label><br>2° valor:</label>
                <!-- Este input usa type="text" para permitir inserir numeros descimais e serem convertidos na 2.php-->
                <input type="text" name="b" />
                <input class="botao" type="submit" value="Enter" />
                <br><br>
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
    <div class="centralizar fcinza">
        <h2>Questão 3:</h2>
        <form method="get" action="3.php">
            <fieldset>
                <label>Valor do produto em R$:</label>
                <input style="width: 100px;" type="text" name="produt" placeholder="0.00" />
                <br><br>
                <input type="radio" name="bonus" value="up" />
                <label>Aumento</label>
                <input type="radio" name="bonus" value="down" />
                <label>Desconto de</label>
                <input style="width: 30px;" type="number" name="percent" />
                <label>%&nbsp</label>
                <input class="botao" type="submit" value="Enter" />
            </fieldset>
        </form>
    </div>
    <div class="centralizar fverde">
        <h2>Questão 4:</h2>
        <form method="get" action="4.php">
            <fieldset>
                <label>Digite um numero:<br><br></label>
                <input style="width: 50px;" type="number" name="n" />
                <input class="botao" type="submit" value="Enter" />
            </fieldset>
        </form>
    </div>
    <div class="centralizar fazul">
        <h2>Questão 5:</h2>
        <form method="get" action="5.php">
            <fieldset class="container flexivel vertical">
                <div>
                    <label>Nome:</label>
                    <input type="text" name="nome" />
                </div>
                <div>
                    <label><br>Ano de Nascimento:</label>
                    <input type="date" name="data" /><br><br>
                </div>
                <div class="container flexivel horizontal">
                    <fieldset style="width: 100px;">
                        <legend>Sexo</legend>
                        <input type="radio" id="masc" name="sexo" value="Homen" checked />
                        <label for="masc">Masculino<br></label>
                        <input type="radio" id="fem" name="sexo" value="Mulher" />
                        <label for="fem">Feminino</label>
                    </fieldset>
                </div>
                <div>
                    <input class="botao" type=submit value="Enviar">
                </div>
            </fieldset>
        </form>
    </div>
    <div class="centralizar fcinza">
        <h2>Questão 6:</h2>
        <form method="get" action="6.php">
            <fieldset>
                <label>Idade:</label>
                <input type="number" name="idade" />
                <input class="botao" type="submit" value="Enter" />
            </fieldset>
        </form>
    </div>
    <div class="centralizar fverde">
        <h2>Questão 7:</h2>
        <form method="get" action="7.php">
            <fieldset>
                <label>Escolha uma operação bancaria:<br><br></label>
                <input type="submit" name="op" value="SAQUE" />
                <input type="submit" name="op" value="EXTRATO" />
                <input type="submit" name="op" value="DEPOSITO" />
                <input type="submit" name="op" value="SAIR" />
            </fieldset>
        </form>
    </div>
    <div class="centralizar">
        <h2>Questão 8:<br></h2>
        <h2 style="color: red;">Orientado a objeto</h2>
        <form method="post" action="Objetos.php">
            <fieldset>
                <legend>Cadastro de produto</legend>
            <label>Nome: </label>
            <input type="text" name="nproduto"/>
            <br><br>
            <label>Preço: </label>
            <input type="text" name="vproduto"/>
            <input class="botao" type="submit" name="enviado" value="Enviar"/>
            </fieldset>
        </form>
    </div>
</body>

</html>