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
        /* Fundo estilizado com degradê em tons de azul */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #01004C, #003366, #004080);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #fff;
            padding: 40px 50px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.3);
            text-align: center;
            width: 380px;
        }
        /* Logo maior e centralizada */
        .logo img {
            max-width: 200px;
            margin-bottom: 25px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        h1 {
            margin-bottom: 25px;
            color: #01004C;
        }
        input[type="password"] {
            width: 90%;
            padding: 12px;
            margin-bottom: 20px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        /* Botão estilizado na mesma cor do menu */
        button {
            width: 95%;
            padding: 12px;
            font-size: 16px;
            background-color: #01004C;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background-color: #020070;
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
        <!-- Logo da empresa -->
        <div class="logo">
            <img src="imagens/logo.png" alt="Logo da Empresa">
        </div>
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
