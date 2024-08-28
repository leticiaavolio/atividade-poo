<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Restaurante</title>
</head>
<body>
    <h1>Calculadora de Restaurante</h1>
    <form action="ContaRestaurante.php" method="post">
        <label for="valorPrato">Valor do Prato:</label>
        <input type="number" id="valorPrato" name="valorPrato" step="0.01" required><br>
        <input type="submit" value="Calcular Total">
    </form>
    <a href="../index.html">Voltar</a>
</body>
</html>
