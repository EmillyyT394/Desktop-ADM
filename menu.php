<?php
// menu.php - menu lateral para todas as telas
?>
<div class="sidebar">
    <h2>Admin</h2>
    <ul>
        <li><a href="admin.php">Lista de Agendamentos</a></li>
        <li><a href="clientes.php">Lista de Clientes</a></li>
        <li><a href="produtos.php">Lista de Produtos</a></li>
        <li><a href="servicos.php">Lista de Serviços</a></li>
        <li><a href="fornecedores.php">Lista de Fornecedores</a></li>
    </ul>
</div>

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
}

.sidebar {
    width: 220px;
    background-color: #007bff;
    color: white;
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    padding: 20px;
    box-sizing: border-box;
}

.sidebar h2 {
    text-align: center;
    margin-bottom: 30px;
}

.sidebar ul {
    list-style: none;
    padding: 0;
}

.sidebar ul li {
    margin-bottom: 20px;
}

.sidebar ul li a {
    color: white;
    text-decoration: none;
    display: block;
    padding: 10px;
    border-radius: 5px;
    transition: 0.3s;
}

.sidebar ul li a:hover {
    background-color: #0056b3;
}

.main-content {
    margin-left: 220px;
    padding: 30px;
}
</style>
