<?php /* /var/www/web1.com/public_html/index.php */ ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Web1 • Port 2000</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    :root{
      --bg:#0f1226; --card:#161a36; --accent:#6c63ff; --muted:#9aa0b4; --text:#e8eaf7;
    }
    *{box-sizing:border-box}
    html,body{height:100%}
    body{
      margin:0; font-family:Poppins,system-ui,-apple-system,Segoe UI,Roboto,Arial;
      color:var(--text); background:
        radial-gradient(60rem 60rem at 10% -10%, #1a1f49 0%, transparent 60%),
        radial-gradient(50rem 50rem at 110% 10%, #1b1740 0%, transparent 60%),
        var(--bg);
      display:flex; align-items:center; justify-content:center; padding:32px;
    }
    .shell{max-width:980px; width:100%}
    .nav{display:flex; align-items:center; justify-content:space-between; margin-bottom:20px}
    .brand{font-weight:600; letter-spacing:.3px}
    .pill{padding:8px 12px; border:1px solid #272b52; border-radius:999px; font-size:12px; color:var(--muted)}
    .card{
      background:linear-gradient(180deg, rgba(255,255,255,.03), rgba(255,255,255,0));
      border:1px solid #262a50; border-radius:24px; padding:42px; backdrop-filter: blur(8px);
      box-shadow:0 30px 80px rgba(0,0,0,.35);
    }
    .title{font-size:38px; line-height:1.2; margin:0 0 10px}
    .lead{color:var(--muted); margin:0 0 28px}
    .cta{
      display:inline-block; padding:14px 22px; border-radius:14px; text-decoration:none;
      background:var(--accent); color:white; font-weight:600; transition:transform .15s ease, box-shadow .2s ease;
      box-shadow:0 10px 24px rgba(108,99,255,.35);
    }
    .cta:hover{transform:translateY(-1px); box-shadow:0 16px 36px rgba(108,99,255,.45)}
    .ghost{
      margin-left:10px; padding:12px 18px; border-radius:12px; text-decoration:none;
      border:1px solid #2a2f5f; color:var(--text); transition:background .2s ease, border-color .2s ease;
    }
    .ghost:hover{background:#1a1f49; border-color:#3a4085}
    .grid{display:grid; grid-template-columns:repeat(3,minmax(0,1fr)); gap:14px; margin-top:26px}
    .stat{background:var(--card); border:1px solid #262a50; border-radius:16px; padding:16px}
    .k{font-weight:600; font-size:18px}
    .v{color:var(--muted); font-size:13px}
    footer{margin-top:26px; color:#7d84a4; font-size:12px; text-align:center}
    @media (max-width:760px){
      .grid{grid-template-columns:1fr}
      .title{font-size:30px}
      .card{padding:28px}
      .nav{flex-direction:column; gap:10px}
    }
  </style>
</head>
<body>
  <div class="shell">
    <div class="nav">
      <div class="brand">Web1 • Port 2000</div>
      <div class="pill">Nginx • PHP • CI/CD</div>
    </div>

    <div class="card">
      <h1 class="title">Welcome to <span style="color:var(--accent)">Web1</span></h1>
      <p class="lead">Contoh landing minimalis: cepat, responsif, dan elegan. Halaman ini dideploy otomatis via GitHub Actions ke Nginx (port 2000).</p>
      <a class="cta" href="#">Get Started</a>
      <a class="ghost" href="#">Documentation</a>

      <div class="grid">
        <div class="stat"><div class="k">Oracle Cloud</div><div class="v">Ubuntu • Public IP</div></div>
        <div class="stat"><div class="k">Nginx</div><div class="v">Server block :2000</div></div>
        <div class="stat"><div class="k">GitHub Actions</div><div class="v">Push → Deploy</div></div>
      </div>
      <footer>© <?= date('Y'); ?> Web1. All rights reserved.</footer>
    </div>
  </div>
</body>
</html>
