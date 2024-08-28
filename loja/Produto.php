<?php
class Produto {
    private $nome;
    private $precoCompra;
    private $precoVenda;
    private $validade;

    public function __construct($nome, $precoCompra, $validade) {
        $this->nome = $nome;
        $this->precoCompra = $precoCompra;
        $this->validade = $validade;
        $this->calcularPrecoVenda();
    }

    private function calcularPrecoVenda() {
        $this->precoVenda = $this->precoCompra * 1.30; // 30% a mais que o preço de compra
    }

    public function mostrarProduto() {
        return [
            'nome' => $this->nome,
            'precoCompra' => number_format($this->precoCompra, 2),
            'precoVenda' => number_format($this->precoVenda, 2),
            'validade' => $this->validade
        ];
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $precoCompra = $_POST['precoCompra'];
    $validade = $_POST['validade'];

    $produto = new Produto($nome, $precoCompra, $validade);
    $detalhesProduto = $produto->mostrarProduto();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Produto</title>
</head>
<body>
    <h1>Detalhes do Produto</h1>
    <p><strong>Nome do Produto:</strong> <?php echo $detalhesProduto['nome']; ?></p>
    <p><strong>Preço de Compra:</strong> R$ <?php echo $detalhesProduto['precoCompra']; ?></p>
    <p><strong>Preço de Venda:</strong> R$ <?php echo $detalhesProduto['precoVenda']; ?></p>
    <p><strong>Validade:</strong> <?php echo $detalhesProduto['validade']; ?></p>
    <a href="index.php">Voltar</a>
</body>
</html>
