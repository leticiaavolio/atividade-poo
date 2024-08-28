<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
</head>
<body>
    <h1>Cadastro de Produto</h1>
    <form action="Produto.php" method="post">
        <label for="nome">Nome do Produto:</label>
        <input type="text" id="nome" name="nome" required><br>
        
        <label for="precoCompra">Preço de Compra:</label>
        <input type="number" id="precoCompra" name="precoCompra" step="0.01" required><br>
        
        <label for="validade">Validade (YYYY-MM-DD):</label>
        <input type="date" id="validade" name="validade" required><br>
        
        <input type="submit" value="Cadastrar Produto">
    </form>
    <a href="../index.html">Voltar</a>
</body>
</html>
