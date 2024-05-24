<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Membuat Form Login</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
<div class="wrapper">
      <div class="title-text">
        <div class="title login">Form Login</div>
        <div class="title signup">Form Registrasi</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Daftar</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form action="index.php?action=login" method="POST" class="login">
            <div class="field">
              <input type="text" name="email" placeholder="Masukan Email " required>
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="Masukan Password" required>
            </div>
            <div class="pass-link"><a href="#">Lupa password?</a></div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login">
            </div>
            <div class="signup-link">Buat akun <a href="">Daftar sekarang</a></div>
          </form>
          <form action="index.php?action=register" method="POST" class="signup">
            <div class="field">
              <input type="text" name="name" placeholder="Masukan Nama" required>
            </div>
            <div class="field">
              <input type="text" name="email" placeholder="Masukan Email" required>
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="Masukan Password" required>
            </div>
            <div class="field">
              <input type="password" name="confirm_password" placeholder="Ulangi password" required>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Daftar">
            </div>
            <div class="signup-link">Sudah punya akun? <a href="">Login</a></div>
          </form>
        </div>
      </div>
    </div>
  <script  src="./script.js"></script>
</body>
</html>
