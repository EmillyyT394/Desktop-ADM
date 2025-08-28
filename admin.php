<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Lista de Agendamentos</title>

  <!-- Fonte Inter -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />

  <style>
    :root{
      --nav-bg:#01004C;      /* azul escuro */
      --accent:#F2FF42;      /* amarelo neon */
      --text:#1E1E1E;
      --zebra-1:#D9D9D9;
      --zebra-2:#BBBBBB;
      --radius:20px;
    }

    *{box-sizing:border-box}
    html,body{height:100%}
    body{
      margin:0;
      font-family:Inter,system-ui,Segoe UI,Roboto,Arial,sans-serif;
      color:var(--text);
      background:#fff;
      display:flex;
      min-height:100vh;
    }

    /* SIDEBAR */
    .sidebar{
      width:82px;
      background:var(--nav-bg);
      display:flex;
      flex-direction:column;
      align-items:center;
      padding:28px 0;
      gap:28px;
      position:relative;
    }

    /* Triângulos decorativos (topo/rodapé) para lembrar o Figma */
    .sidebar::before,
    .sidebar::after{
      content:"";
      position:absolute;
      left:0; width:0; border-left:82px solid transparent;
    }
    .sidebar::before{
      top:0; border-top:28px solid #00000020;
    }
    .sidebar::after{
      bottom:0; border-bottom:28px solid #00000020;
    }

    .icon{
      width:56px; height:56px;
      display:grid; place-items:center;
      border-radius:12px;
      transition:transform .12s ease;
    }
    .icon svg{width:28px;height:28px;fill:var(--accent)}
    .icon:is(:hover,:focus){transform:translateY(-2px)}
    .icon--active{outline:3px solid #ffffff55; outline-offset:0}

    /* CONTEÚDO */
    .content{
      flex:1;
      padding:48px 48px 64px 48px;
    }

    h1{
      margin:0 0 28px;
      font-size:clamp(24px,3.2vw,48px);
      font-weight:700;
      color:var(--text);
    }

    /* TABELA / LISTA */
    .card{
      border-radius:14px;
      overflow:hidden;
      border:1px solid #e6e6e6;
    }

    .table{
      width:100%;
      border-collapse:collapse;
      font-size:16px;
    }
    .table thead th{
      background:var(--nav-bg);
      color:#fff;
      text-align:left;
      padding:18px 20px;
      font-weight:600;
    }
    .table tbody tr:nth-child(odd){background:var(--zebra-1)}
    .table tbody tr:nth-child(even){background:var(--zebra-2)}
    .table td{
      padding:18px 20px;
      color:#222;
    }

    /* BOTÃO */
    .actions{
      margin-top:28px;
      display:flex; gap:12px; flex-wrap:wrap;
    }
    .btn{
      background:var(--nav-bg);
      color:#fff;
      border:none;
      border-radius:var(--radius);
      padding:14px 22px;
      font-size:16px;
      font-weight:600;
      cursor:pointer;
      transition:transform .12s ease, opacity .12s ease;
    }
    .btn:hover{transform:translateY(-1px);opacity:.95}
    .btn:active{transform:translateY(0)}

    /* RESPONSIVO */
    @media (max-width: 920px){
      .sidebar{width:68px}
      .icon{width:48px;height:48px}
      .icon svg{width:24px;height:24px}
      .content{padding:32px 20px}
      .table{font-size:15px}
    }
  </style>
</head>
<body>

  <!-- LATERAL -->
  <nav class="sidebar" aria-label="Navegação principal">
    <!-- Home -->
    <a class="icon icon--active" href="#" title="Início" aria-current="page">
      <!-- ícone casa -->
      <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3 2 12h3v9h6v-6h2v6h6v-9h3z"/></svg>
    </a>
    <!-- Clientes -->
    <a class="icon" href="#" title="Clientes">
      <svg viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3A3 3 0 1 0 16 11zm-8 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 2c-2.67 0-8 1.34-8 4v3h8v-3c0-.7.18-1.37.5-2-.16-.01-.33 0-.5 0zm8 0c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"/></svg>
    </a>
    <!-- Caixa -->
    <a class="icon" href="#" title="Caixa">
      <svg viewBox="0 0 24 24"><path d="M21 7H3l3-4h12l3 4zM3 9h18v10H3z"/></svg>
    </a>
    <!-- Config -->
    <a class="icon" href="#" title="Configurações">
      <svg viewBox="0 0 24 24"><path d="M19.14 12.94a7.48 7.48 0 0 0 0-1.88l2.03-1.58-2-3.46-2.39.96a7.64 7.64 0 0 0-1.63-.95L14.5 2h-5l-.65 3.03c-.58.24-1.12.56-1.63.95l-2.39-.96-2 3.46 2.03 1.58a7.48 7.48 0 0 0 0 1.88L2.83 14.5l2 3.46 2.39-.96c.5.39 1.05.71 1.63.95L9.5 22h5l.65-3.03c.58-.24 1.12-.56 1.63-.95l2.39.96 2-3.46-2.03-1.58zM12 15.5A3.5 3.5 0 1 1 12 8.5a3.5 3.5 0 0 1 0 7z"/></svg>
    </a>
    <!-- Frota -->
    <a class="icon" href="#" title="Frota">
      <svg viewBox="0 0 24 24"><path d="M3 13h18l-1.5-4.5A3 3 0 0 0 16.65 7H7.35A3 3 0 0 0 4.5 8.5L3 13zm0 2h18v4h-2v-2H5v2H3v-4z"/></svg>
    </a>
  </nav>

  <!-- CONTEÚDO -->
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
          <!-- Linhas de exemplo / placeholders -->
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
