<?php
$host = 'localhost';
$usuario = 'root'; // altere se necessário
$senha = '';       // altere se necessário
$banco = 'estetic';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    $conn = new mysqli($host, $usuario, $senha, $banco);
    $conn->set_charset('utf8mb4');
} catch (mysqli_sql_exception $e) {
    die('Falha na conexão: ' . $e->getMessage());
}
?>
