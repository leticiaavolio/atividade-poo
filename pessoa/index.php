<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
</head>
<body>
    <h1>Cadastro de Pessoa</h1>
    <form action="Pessoa.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required><br>

        <label for="profissao">Profissão:</label>
        <input type="text" id="profissao" name="profissao" required><br>

        <input type="submit" value="Cadastrar Pessoa">
    </form>
    <a href="../index.html">Voltar</a>
</body>
</html>
