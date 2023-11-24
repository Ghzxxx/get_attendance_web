<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Peserta Detail</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  {{-- Bootstrap --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  {{-- CSS --}}
  <link rel="stylesheet" href="/css/peserta.css">

</head>
<body>
  <div class="sidebar">
    <div class="logo"><img src="/img/Logo.png" alt="Logo"></div>
    <ul class="menu">
      <li>
        <a href="/dashboard">
          <i class="fas fa-home"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="active">
        <a href="/peserta">
          <i class="fas fa-users"></i>
          <span>Peserta</span>
        </a>
      </li>
      <li>
        <a href="/absen">
          <i class="fas fa-chart-bar"></i>
          <span>Absen</span>
        </a>
      </li>
      <li>
        <a href="/user">
          <i class="fas fa-user"></i>
          <span>Users</span>
        </a>
      </li>
      <li class="logout">
        <a href="/logout">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span>
        </a>
      </li>
    </ul>
  </div>

  {{-- Content --}}
  <div class="main--content">
    <div class="header--wrapper">
      <div class="header--title">
        <span>Get Aplikasi Indonesia</span>
        <h2>Peserta Magang</h2>
      </div>
      <div class="user--info">
        {{-- <div class="search--box">
          <i class="fa-solid fa-search"></i>
          <input type="text" placeholder="Search">
        </div> --}}
        <img src="/img/user.png" alt="">
      </div>
    </div>

    {{-- Table Content --}}
    <div class="tabular--wrapper">
      <h3 class="main--title">Detail Peserta Magang</h3>
      
      <div class="container">
        <div class="card mx-auto" style="max-width: 400px;">
            <img src="https://placekitten.com/150/150" class="card-img-top" alt="User Image">
            <ul class="list-group list-group-flush mt-3">
                <li class="list-group-item"><strong>Nama:</strong> Bagus Daffa Firmansyah</li>
                <li class="list-group-item"><strong>Asal Sekolah:</strong> Politeknik Negeri Jember</li>
                <li class="list-group-item"><strong>Nomor Handphone:</strong> 081336703009</li>
                <li class="list-group-item"><strong>Jenis Kelamin:</strong> Laki-laki</li>
            </ul>
            <div class="card-body text-center">
                <a href="/peserta" class="btn btn-primary btn-action text-white">Kembali</a>
            </div>
        </div>
    </div>

    <style>

        .container {
            margin-top: 50px;
        }

        .card {
            background: #5d6ec7;
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-img-top {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin: 0 auto;
            margin-top: 20px;
        }

        .card-title {
            margin-top: 10px;
        }

        .list-group-item {
            border: none;
        }

        .btn-action {
            width: 120px;
            margin: 10px;
        }
    </style>

    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>