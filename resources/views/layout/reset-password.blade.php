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
      --form-bg: #fff;
      --accent: #6329c2;
      --button: #2261a9;
      --button-hover: #194f8c;
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
      width: 520px;
      background: var(--form-bg);
      border-radius: var(--radius);
      box-shadow: 0 10px 32px var(--shadow);
      padding: 54px 48px 48px 48px;
      text-align: left;
      position: relative;
      z-index: 3;
      min-height: 520px;
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 16px;
      margin-bottom: 32px;
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
      font-size: 2.5rem;
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
      font-size: 1.06rem;
      margin: 0 0 18px 0;
      font-weight: 400;
    }

    label {
      display: block;
      font-weight: 600;
      margin: 18px 0 8px 0;
      color: #292040;
      font-size: 1rem;
    }
    input[type="email"] {
      width: 100%;
      border: 1.5px solid #d5d5e0;
      border-radius: 4px;
      padding: 12px 10px;
      font-size: 1.1rem;
      outline: none;
      transition: border 0.2s;
      margin-bottom: 22px;
      margin-top: 2px;
      background: #fafbfc;
    }
    input[type="email"]:focus {
      border-color: var(--accent);
      background: #fff;
    }

    .submit-btn {
      width: 160px;
      display: block;
      margin: 24px auto 0 auto;
      background: var(--button);
      color: #fff;
      font-size: 1.18rem;
      font-weight: 600;
      border: none;
      border-radius: 28px;
      padding: 13px 0;
      cursor: pointer;
      transition: background 0.18s;
      box-shadow: 0 4px 20px 0 rgba(34,97,169,0.08);
    }
    .submit-btn:hover {
      background: var(--button-hover);
    }

    .form-box .back-link {
      display: block;
      margin: 32px auto 0 auto;
      text-align: center;
      color: #444;
      font-size: 1rem;
    }
    .form-box .back-link a {
      color: var(--button);
      font-weight: 600;
      text-decoration: none;
      transition: color 0.18s;
    }
    .form-box .back-link a:hover { color: var(--accent); }

    @media (max-width: 600px) {
      .form-box {
        width: 95vw;
        min-width: 0;
        padding: 32px 10px 32px 10px;
      }
      .logo-title {
        font-size: 1.25rem;
      }
      .form-box h1 {
        font-size: 1.6rem;
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
      <p>Enter your email address below and we’ll send you a link with instructions.</p>
      <form id="resetForm" autocomplete="off" method="POST" action="{{ route('reset-password-post') }}">
        @csrf
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required placeholder=""/>
        <button type="submit" class="submit-btn">Submit</button>
      </form>
      <div class="back-link">
        If you’re not ready, you can <a href="{{ route('loginDB') }}">go back.</a>
      </div>
    </div>
  </div>
  <script>
  </script>
</body>
</html>