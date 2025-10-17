<?php /* /var/www/web2.com/public_html/index.php */ ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Web2 • Port 3000</title>
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    :root{
      --bg:#0f1412; --card:#121916; --accent:#ff6f61; --muted:#9fb0a7; --text:#e9f2ee;
    }
    *{box-sizing:border-box}
    html,body{height:100%}
    body{
      margin:0; font-family:Poppins,system-ui,-apple-system,Segoe UI,Roboto,Arial;
      color:var(--text); background:
        radial-gradient(60rem 60rem at 10% -10%, #1e2a25 0%, transparent 60%),
        radial-gradient(50rem 50rem at 110% 10%, #1a2420 0%, transparent 60%),
        var(--bg);
      display:flex; align-items:center; justify-content:center; padding:32px;
    }
    .shell{max-width:980px; width:100%}
    .nav{display:flex; align-items:center; justify-content:space-between; margin-bottom:20px}
    .brand{font-weight:600;}
    .pill{padding:8px 12px; border:1px solid #21322b; border-radius:999px; font-size:12px; color:var(--muted)}
    .card{
      background:linear-gradient(180deg, rgba(255,255,255,.03), rgba(255,255,255,0));
      border:1px solid #20352e; border-radius:24px; padding:42px; backdrop-filter: blur(8px);
      box-shadow:0 30px 80px rgba(0,0,0,.35);
    }
    .title{font-size:38px; margin:0 0 10px}
    .lead{color:var(--muted); margin:0 0 28px}
    .cta{
      display:inline-block; padding:14px 22px; border-radius:14px; text-decoration:none;
      background:var(--accent); color:white; font-weight:600; transition:transform .15s ease, box-shadow .2s ease;
      box-shadow:0 10px 24px rgba(255,111,97,.35);
    }
    .cta:hover{transform:translateY(-1px); box-shadow:0 16px 36px rgba(255,111,97,.45)}
    .ghost{margin-left:10px; padding:12px 18px; border-radius:12px; text-decoration:none; border:1px solid #2a3f37; color:var(--text)}
    .ghost:hover{background:#1a2420; border-color:#355247}
    .grid{display:grid; grid-template-columns:repeat(3,minmax(0,1fr)); gap:14px; margin-top:26px}
    .stat{background:var(--card); border:1px solid #20352e; border-radius:16px; padding:16px}
    .k{font-weight:600; font-size:18px}
    .v{color:var(--muted); font-size:13px}
    footer{margin-top:26px; color:#8aa198; font-size:12px; text-align:center}
    @media (max-width:760px){ .grid{grid-template-columns:1fr} .title{font-size:30px} .card{padding:28px} .nav{flex-direction:column; gap:10px}}
  </style>
</head>
<body>
  <div class="shell">
    <div class="nav">
      <div class="brand">Web2 • Port 3000</div>
      <div class="pill">Nginx • PHP • CI/CD</div>
    </div>

    <div class="card">
      <h1 class="title">Selamat datang di <span style="color:var(--accent)">Web2</span></h1>
      <p class="lead">Desain clean dengan aksen hangat. Halaman ini dideploy otomatis via GitHub Actions ke Nginx (port 3000).</p>
      <a class="cta" href="#">Mulai</a>
      <a class="ghost" href="#">Panduan</a>

      <div class="grid">
        <div class="stat"><div class="k">Kecepatan</div><div class="v">Tanpa framework berat</div></div>
        <div class="stat"><div class="k">Keamanan</div><div class="v">Tanpa inline script</div></div>
        <div class="stat"><div class="k">Akses</div><div class="v">Single IP, beda port</div></div>
      </div>
      <footer>© <?= date('Y'); ?> Web2. All rights reserved.</footer>
    </div>
  </div>
</body>
</html>
