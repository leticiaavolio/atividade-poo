<?php
class Pessoa {
    private $nome;
    private $idade;
    private $profissao;

    public function __construct($nome, $idade, $profissao) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->profissao = $profissao;
    }

    public function calcularIdade() {
        // O método apenas retorna a idade que foi fornecida
        return $this->idade;
    }

    public function exibirInformacoes() {
        return "Nome: " . htmlspecialchars($this->nome) . "<br>" .
               "Idade: " . htmlspecialchars($this->calcularIdade()) . " anos<br>" .
               "Profissão: " . htmlspecialchars($this->profissao) . "<br>";
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $profissao = $_POST['profissao'];

    $pessoa = new Pessoa($nome, $idade, $profissao);
    $informacoes = $pessoa->exibirInformacoes();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Pessoa</title>
</head>
<body>
    <h1>Detalhes da Pessoa</h1>
    <div>
        <?php
        if (isset($informacoes)) {
            echo $informacoes;
        }
        ?>
    </div>
    <a href="index.php">Voltar</a>
</body>
</html>
