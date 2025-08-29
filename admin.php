<?php require_once __DIR__.'/auth.php'; ?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Painel do Administrador</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/styles.css" />
</head>
<body>
  <?php include __DIR__.'/menu.php'; ?>
  <main class="content">
    <h1>Lista de Agendamentos</h1>
    <div class="card">
      <table class="table" role="table" aria-label="Agendamentos">
        <thead>
          <tr>
            <th>Cliente</th>
            <th>Serviço</th>
            <th>Data</th>
            <th>Horário</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>—</td><td>—</td><td>—</td><td>—</td><td>—</td></tr>
          <tr><td>—</td><td>—</td><td>—</td><td>—</td><td>—</td></tr>
          <tr><td>—</td><td>—</td><td>—</td><td>—</td><td>—</td></tr>
          <tr><td>—</td><td>—</td><td>—</td><td>—</td><td>—</td></tr>
          <tr><td>—</td><td>—</td><td>—</td><td>—</td><td>—</td></tr>
        </tbody>
      </table>
    </div>
    <div class="actions">
      <button class="btn" type="button">Novo Agendamento</button>
    </div>
  </main>
</body>
</html>
