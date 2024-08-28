<?php
class ContaRestaurante {
    private $valorPrato;
    private $gorjeta;
    private $total;

    public function __construct($valorPrato) {
        $this->valorPrato = $valorPrato;
        $this->calcularGorjeta();
        $this->calcularTotal();
    }

    private function calcularGorjeta() {
        $this->gorjeta = $this->valorPrato * 0.10;
    }

    private function calcularTotal() {
        $this->total = $this->valorPrato + $this->gorjeta;
    }

    public function mostrarTotal() {
        return number_format($this->total, 2);
    }

    public function mostrarGorjeta() {
        return number_format($this->gorjeta, 2);
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $valorPrato = $_POST['valorPrato'];

    $conta = new ContaRestaurante($valorPrato);
    $total = $conta->mostrarTotal();
    $gorjeta = $conta->mostrarGorjeta();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Conta</title>
</head>
<body>
    <h1>Resultado da Conta</h1>
    <p>Valor do Prato: R$ <?php echo number_format($valorPrato, 2); ?></p>
    <p>Gorjeta (10%): R$ <?php echo $gorjeta; ?></p>
    <p><strong>Total a Pagar: R$ <?php echo $total; ?></strong></p>
    <a href="index.php">Voltar</a>
</body>
</html>
