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
        <?php
        $x = $_GET["a"];
        $y = $_GET["b"];
        echo "<h3>O valores recebidos insira no final da URL ?a=5&b=2&op=s que neste caso são: $x e $y</h3>";
        echo "<h2>1- Qual sua idade?</h2>";
        $n = 'Adriano';
        $i = 33;
        echo "$n tem $i anos.<br>";
        ?>
    </div>

    <div>
        <?php
        /*echo "<h2>2- Operadores Matemáticos:</h2>";
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "A soma é: " . $n1 + $n2 . ".<br>";
        echo "A subtração é: " . $n1 - $n2 . ".<br>";
        echo "A multiplicação é: " . $n1 * $n2 . ".<br>";
        echo "A divisão é: " . $n1 / $n2 . ".<br>";
        echo "O mod da divisão é: " . $n1 % $n2 . ".<br>";*/
        ?>
    </div>

    <div>
        <?php
        /*echo "<h2>3- Funções matemáticas:</h2>";
        echo "O valor absoluto de $y é: ".abs($y)."<br>";
        echo "O valor $x<sup>$y</sup> é: ".pow($x,$y)."<br>";
        echo "A raiz quadrada de $x e $y é: ".sqrt($x)." e ".sqrt($y)."<br>";
        echo "O valor arredondado de ".sqrt($x)." é ".round(sqrt($x))."<br>";
        echo "O valor inteiro do valor ".sqrt($y)." é ".intval(sqrt($y))."<br>";
        echo "O valor $x formatado em reai é R$".number_format($x,2,",",".");*/
        ?>
    </div>

    <div>
        <?php
        echo "<h2>4- Operadores de atribuição: ('+=', '-=', '*=', '/=', '%=', .=)</h2>";
        echo "X = X + y ou X += Y";
        ?>
    </div>

    <div>
        <?php
        /*
        $preco = 100;
        echo "<br>O preço do produto é R$".number_format($preco,2,",");
        $preco+=$preco*10/100;
        echo "<br>O novo preço com 10% de aumento é: R$".number_format($preco,2,",");
        $preco=100;
        $preco-=$preco*10/100;
        echo "<br>O novo preço com 10% de desconto é: R$".number_format($preco,2,",");
        echo "<br>Pré e Pós incremento: ++a ou a++";
        echo "<br>Pré e Pós decremento: --a ou a--";*/
        ?>
    </div>
    <div>
        <?php
        echo "<h2>5- Operadores Relacionaveis: Ex: <, >, <=, >=, <>, !=, == ou ===</h2>";
        echo "<h2>6- Operadores Unário: Ex: (expressão ? verdadeiro : falso) sem o parenteses</h2>";
        $x = $_GET["a"];
        $y = $_GET["b"];
        $tipo = $_GET["op"];
        $r = $tipo == "s" ? $x + $y : $x - $y;
        echo '$x = ' . $x . '<br>$y = ' . $y;
        echo '<br>$tipo == "s" ? $x + $y : $x - $y<br>';
        echo "O resultado é: " . $r . "<br><br>";

        $a = 3;
        $b = "3";
        echo (var_dump($a)) . "<br>";
        echo (var_dump($b)) . "<br>";
        echo '$a = 3 e $b = "3"';
        $r = $a === $b ? "SIM" : "NÃO";
        echo "<br>As variaveis A e B são identicas? $r<br><br>";
        
        $x = $_GET["a"];
        $y = $_GET["b"];
        echo (var_dump($x)) . "<br>";
        echo (var_dump($y)) . "<br>";
        echo '$m = ($x + $y) / 2;';
        $m = ($x + $y) / 2;
        echo "<br>A nota foi $m sendo que o minimo permitido é 6 situação do aluno é: " . ($m > 6 ? "APROVADO" : "REPROVADO");
        echo "testando commit testando";
        ?>
    </div>

</body>

</html>