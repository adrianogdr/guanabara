<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css" />
    <title>Document</title>
</head>
<?php
class produto
{
    private $nomep;
    private $preco;

    public function getNomep()
    {
        return $this->nomep;
    }

    public function setNomep($nomep)
    {
        $this->nomep = $nomep;
        return $this;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
        return $this;
    }

    public function msg(){
        echo "$this->nomep e $this->preco<br>";
        echo "Cadastrado com sucesso!!";
    }
}

$cadproduto = new produto();
if(isset($_POST["enviado"])){
    $cadproduto->setNomep($_POST["nproduto"]);
    $cadproduto->setPreco($_POST["vproduto"]);
    $cadproduto->msg();
}
?>

<body>
    <form method="POST" action="tela.php">
        <br>
        <input class="botao" type="submit" name="voltar" value="Back"/>
    </form>
</body>

</html>