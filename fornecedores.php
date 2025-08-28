<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Lista de Fornecedores</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/styles.css" />
</head>
<body>
  <?php $active='fornecedores'; include 'includes/sidebar.php'; ?>
  <main class="content">
    <h1>Lista de Fornecedores</h1>
    <div class="card">
      <table class="table" role="table" aria-label="Fornecedores">
        <thead>
          <tr>
            <th>Fornecedor</th>
            <th>Contato</th>
            <th>Telefone</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>—</td><td>—</td><td>—</td></tr>
          <tr><td>—</td><td>—</td><td>—</td></tr>
          <tr><td>—</td><td>—</td><td>—</td></tr>
          <tr><td>—</td><td>—</td><td>—</td></tr>
          <tr><td>—</td><td>—</td><td>—</td></tr>
        </tbody>
      </table>
    </div>
    <div class="actions">
      <button class="btn" type="button">Novo Fornecedor</button>
    </div>
  </main>
</body>
</html>
