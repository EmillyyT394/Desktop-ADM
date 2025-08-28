<?php
$active = $active ?? '';
?>
<nav class="sidebar" aria-label="Navegação principal">
  <a class="icon <?= $active==='agendamentos' ? 'icon--active' : '' ?>" href="agendamentos.php" title="Agendamentos">
    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3 2 12h3v9h6v-6h2v6h6v-9h3z"/></svg>
  </a>
  <a class="icon <?= $active==='clientes' ? 'icon--active' : '' ?>" href="clientes.php" title="Clientes">
    <svg viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3A3 3 0 1 0 16 11zm-8 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 2c-2.67 0-8 1.34-8 4v3h8v-3c0-.7.18-1.37.5-2-.16-.01-.33 0-.5 0zm8 0c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"/></svg>
  </a>
  <a class="icon <?= $active==='produtos' ? 'icon--active' : '' ?>" href="produtos.php" title="Produtos">
    <svg viewBox="0 0 24 24"><path d="M21 7H3l3-4h12l3 4zM3 9h18v10H3z"/></svg>
  </a>
  <a class="icon <?= $active==='servicos' ? 'icon--active' : '' ?>" href="servicos.php" title="Serviços">
    <svg viewBox="0 0 24 24"><path d="M19.14 12.94a7.48 7.48 0 0 0 0-1.88l2.03-1.58-2-3.46-2.39.96a7.64 7.64 0 0 0-1.63-.95L14.5 2h-5l-.65 3.03c-.58.24-1.12.56-1.63.95l-2.39-.96-2 3.46 2.03 1.58a7.48 7.48 0 0 0 0 1.88L2.83 14.5l2 3.46 2.39-.96c.5.39 1.05.71 1.63.95L9.5 22h5l.65-3.03c.58-.24 1.12-.56 1.63-.95l2.39.96 2-3.46-2.03-1.58zM12 15.5A3.5 3.5 0 1 1 12 8.5a3.5 3.5 0 0 1 0 7z"/></svg>
  </a>
  <a class="icon <?= $active==='fornecedores' ? 'icon--active' : '' ?>" href="fornecedores.php" title="Fornecedores">
    <svg viewBox="0 0 24 24"><path d="M3 13h18l-1.5-4.5A3 3 0 0 0 16.65 7H7.35A3 3 0 0 0 4.5 8.5L3 13zm0 2h18v4h-2v-2H5v2H3v-4z"/></svg>
  </a>
</nav>
