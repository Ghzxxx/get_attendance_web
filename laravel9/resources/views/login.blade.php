<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Membuat Form Login</title>

    {{-- Bootstrap --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
    
    {{-- CSS --}}
    <link rel="stylesheet" href="/css/login.css" />
  </head>
  <body>
    <div class="wrapper">
      <div class="title-text">
        <div class="title login">Login</div>
        <div class="title signup">Registrasi</div>
      </div>

      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked />
          <input type="radio" name="slide" id="signup" />
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Daftar</label>
          <div class="slider-tab"></div>
        </div>

        <div class="form-inner">
          <form action="/dashboard" class="login">
            <pre></pre>
            <div class="field">
              <input type="text" placeholder="Masukan Email " required />
            </div>
            <div class="field">
              <input type="password" placeholder="Masukan Password" required />
            </div>
            {{-- <div class="pass-link"><a href="#">Lupa password?</a></div> --}}
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login" />
            </div>
            <div class="signup-link">Buat akun <a href="">Daftar sekarang</a></div>
          </form>
          
          <form action="#" class="signup">
            <div class="field">
              <input type="text" placeholder="Masukan Nama" required />
            </div>
            <div class="field">
              <input type="text" placeholder="Masukan Email" required />
            </div>
            <div class="field">
              <input type="password" placeholder="Masukan Password" required />
            </div>
            <div class="field">
              <input type="password" placeholder="Ulangi password" required />
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Daftar" />
            </div>
            <div class="signup-link">Sudah punya akun? <a href="">Login</a></div>
          </form>
        </div>
      </div>
    </div>

    {{-- Bootstrap --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> --}}
    
    
    {{-- Js --}}
    <script src="/js/login.js"></script>
  </body>
</html>
