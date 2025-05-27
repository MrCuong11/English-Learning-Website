<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset your password</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
  <style>
    :root {
      --main-purple: #431a82;
      --accent: #6329c2;
      --shadow: rgba(60, 40, 120, 0.15);
      --radius: 18px;
    }
    * { box-sizing: border-box; }
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
    body {
      min-height: 100vh;
      font-family: 'Montserrat', Arial, sans-serif;
      background: url('/login/pngtree-website-purple-geometric-background-picture-image_2443564.jpg') no-repeat center center fixed;
      background-size: cover;
      position: relative;
      overflow: hidden;
    }
    .container {
      position: relative;
      z-index: 2;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .form-box {
      width: 650px;
      background: #fff;
      border-radius: 20px 0 20px 20px;
      box-shadow: 0 10px 32px var(--shadow);
      padding: 52px 50px 54px 50px;
      text-align: left;
      position: relative;
      z-index: 3;
      min-height: 410px;
    }
    .logo {
      display: flex;
      align-items: center;
      gap: 16px;
      margin-bottom: 30px;
      margin-left: 11px;
    }
    .logo .dot {
      width: 22px; height: 22px;
      background: #3b187c;
      border-radius: 50%;
      display: inline-block;
      margin: 1.5px;
    }
    .logo-title {
      font-size: 1.55rem;
      font-weight: bold;
      color: var(--main-purple);
      letter-spacing: -1px;
      line-height: 1.1;
    }
    .form-box h1 {
      font-size: 2.4rem;
      color: var(--main-purple);
      font-weight: 700;
      margin: 0 0 12px 0;
      line-height: 1.1;
    }
    .form-box .divider {
      display: block;
      width: 44px;
      height: 4px;
      background: var(--accent);
      border-radius: 2px;
      margin-bottom: 24px;
      margin-top: 8px;
    }
    .form-box p {
      color: #444;
      font-size: 1.13rem;
      margin: 0 0 18px 0;
      font-weight: 400;
    }
    .form-box .back-link {
      display: block;
      margin: 70px auto 0 auto;
      text-align: center;
      color: #444;
      font-size: 1rem;
    }
    .form-box .back-link a {
      color: #2261a9;
      font-weight: 600;
      text-decoration: none;
      transition: color 0.18s;
    }
    .form-box .back-link a:hover { color: var(--accent); }
    @media (max-width: 700px) {
      .form-box {
        width: 97vw;
        min-width: 0;
        padding: 32px 10px 32px 10px;
      }
      .logo-title {
        font-size: 1.25rem;
      }
      .form-box h1 {
        font-size: 1.3rem;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="form-box">
      <div class="logo">
        <span>
          <span class="dot"></span>
          <span class="dot"></span>
          <br>
          <span class="dot"></span>
          <span class="dot"></span>
        </span>
        <span class="logo-title">English<br>Learning</span>
      </div>
      <h1>Reset your password</h1>
      <span class="divider"></span>
      <p>If your email is registered you will receive an email and instructions to reset your password.</p>
      <div class="back-link">
        If you’re not ready, you can <a href="{{ route('loginDB') }}">go back.</a>
      </div>
    </div>
  </div>
</body>
</html>