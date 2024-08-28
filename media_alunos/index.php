<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style_sis.css">
    <title>Cadastro de Aluno</title>
</head>
<body>
    <h1>Cadastro de Aluno</h1>
    <form action="Aluno.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="matricula">Matrícula:</label>
        <input type="text" id="matricula" name="matricula" required><br>

        <label for="curso">Curso:</label>
        <input type="text" id="curso" name="curso" required><br>

        <label for="disciplina">Disciplina:</label>
        <input type="text" id="disciplina" name="disciplina" required><br>

        <label for="nota1">Nota 1:</label>
        <input type="number" id="nota1" name="nota1" step="0.01" required><br>

        <label for="nota2">Nota 2:</label>
        <input type="number" id="nota2" name="nota2" step="0.01" required><br>

        <label for="nota3">Nota 3:</label>
        <input type="number" id="nota3" name="nota3" step="0.01" required><br>

        <label for="nota4">Nota 4:</label>
        <input type="number" id="nota4" name="nota4" step="0.01" required><br>

        <input type="submit" value="Cadastrar Aluno">
    </form>
    <a href="../index.html">Voltar</a>
</body>
</html>
