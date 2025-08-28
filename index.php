<?php
session_start();
require_once __DIR__.'/conexao.php';

$mensagem = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $senhaDigitada = $_POST['senha'] ?? '';

    $stmt = $conn->prepare('SELECT id, senha FROM administrador');
    $stmt->execute();
    $resultado = $stmt->get_result();

    while ($row = $resultado->fetch_assoc()) {
        if (password_verify($senhaDigitada, $row['senha']) || $senhaDigitada === $row['senha']) {
            $_SESSION['admin_id'] = $row['id'];
            header('Location: admin.php');
            exit;
        }
    }
    $mensagem = 'Senha incorreta!';
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login Administrador</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #fff;
            padding: 40px 50px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
            width: 300px;
        }
        h1 {
            margin-bottom: 25px;
            color: #333;
        }
        input[type="password"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 20px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 95%;
            padding: 12px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
        .mensagem {
            margin-top: 15px;
            font-weight: bold;
            color: red;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login Administrador</h1>
        <form method="post" action="">
            <input type="password" name="senha" placeholder="Digite a senha" required>
            <button type="submit">Entrar</button>
        </form>
        <?php if ($mensagem !== ''): ?>
            <div class="mensagem"><?= $mensagem ?></div>
        <?php endif; ?>
    </div>
</body>
</html>
