<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web2 — Arta DevOps Dashboard</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }
    body {
      background: linear-gradient(135deg, #0f0f0f, #1a1a1a);
      color: #f5f5f5;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }
    h1 {
      font-size: 2.5rem;
      margin-bottom: 10px;
      letter-spacing: 1px;
      text-align: center;
    }
    p {
      opacity: 0.8;
      margin-bottom: 40px;
      text-align: center;
    }
    .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      width: 100%;
      max-width: 900px;
    }
    .card {
      background: #242424;
      border-radius: 15px;
      padding: 25px;
      text-align: left;
      transition: all 0.3s ease;
      box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.4);
      background: #2f2f2f;
    }
    .card h2 {
      font-size: 1.3rem;
      margin-bottom: 10px;
      color: #9f8cff;
    }
    .card p {
      font-size: 0.95rem;
      opacity: 0.9;
      line-height: 1.4;
    }
    footer {
      margin-top: 60px;
      opacity: 0.6;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>
  <h1>Arta’s DevOps Dashboard ⚙️</h1>
  <p>Monitoring simple, fast, and elegant — deployed on Oracle Cloud with CI/CD integration.</p>
  
  <div class="cards">
    <div class="card">
      <h2>Server Info</h2>
      <p>IP Address: <strong>138.2.178.15</strong><br>OS: Ubuntu Server 22.04<br>Status: <span style="color: #00ff80;">Online</span></p>
    </div>
    <div class="card">
      <h2>CI/CD Status</h2>
      <p>Automated deployment configured with <strong>GitHub Actions</strong>.<br>Last Deploy: <?php echo date('F d, Y'); ?></p>
    </div>
    <div class="card">
      <h2>Repository</h2>
      <p>Project: <strong>web2-app</strong><br><a href="https://github.com/Artazzz/web2-app" style="color:#9f8cff;text-decoration:none;">→ View on GitHub</a></p>
    </div>
  </div>

  <footer>© <?php echo date('Y'); ?> Arta DevOps Dashboard</footer>
</body>
</html>
