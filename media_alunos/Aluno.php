<?php
class Aluno {
    private $nome;
    private $matricula;
    private $curso;
    private $disciplina;
    private $notas = [];
    private $media;

    public function __construct($nome, $matricula, $curso, $disciplina, $notas) {
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->curso = $curso;
        $this->disciplina = $disciplina;
        $this->notas = $notas;
        $this->calcularMedia();
    }

    private function calcularMedia() {
        $this->media = array_sum($this->notas) / count($this->notas);
    }

    public function estaAprovado() {
        return $this->media >= 7;
    }

    public function exibirInformacoes() {
        $status = $this->estaAprovado() ? 'Aprovado' : 'Retido';
        return "Nome: " . htmlspecialchars($this->nome) . "<br>" .
               "Matrícula: " . htmlspecialchars($this->matricula) . "<br>" .
               "Curso: " . htmlspecialchars($this->curso) . "<br>" .
               "Disciplina: " . htmlspecialchars($this->disciplina) . "<br>" .
               "Média: " . number_format($this->media, 2) . "<br>" .
               "Status: " . $status . "<br>";
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $curso = $_POST['curso'];
    $disciplina = $_POST['disciplina'];
    $notas = [
        $_POST['nota1'],
        $_POST['nota2'],
        $_POST['nota3'],
        $_POST['nota4']
    ];

    $aluno = new Aluno($nome, $matricula, $curso, $disciplina, $notas);
    $informacoesAluno = $aluno->exibirInformacoes();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Aluno</title>
</head>
<body>
    <h1>Detalhes do Aluno</h1>
    <div>
        <?php
        if (isset($informacoesAluno)) {
            echo $informacoesAluno;
        }
        ?>
    </div>
    <a href="index.php">Voltar</a>
</body>
</html>

