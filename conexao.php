<?php
$host = 'localhost';
$usuario = 'root'; // altere se necessário
$senha = '';       // altere se necessário
$banco = 'estetic';

// Cria a conexão
$conn = new mysqli($host, $usuario, $senha, $banco);

// Verifica se houve erro
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
