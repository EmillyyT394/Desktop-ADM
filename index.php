<?php
// Inclui os arquivos
include 'conexao.php';
include 'telas.php';

// Se o formulário for enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];

    $sql = "INSERT INTO clientes (nome) VALUES ('$nome')";
    if ($conn->query($sql) === TRUE) {
        echo "<p>Registro salvo com sucesso!</p>";
    } else {
        echo "<p>Erro: " . $conn->error . "</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema Estética</title>
</head>
<body>
    <?php
        exibirCabecalho();
        exibirFormulario();
    ?>
</body>
</html>
