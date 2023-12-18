<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  {{-- Bootstrap --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  {{-- CSS --}}
  <link rel="stylesheet" href="/css/dashboard.css">

</head>
<body>
  <div class="sidebar">
    <div class="logo"><img src="/img/Logo.png" alt="Logo"></div>
    @include('layouts.sidebar')
  </div>

  {{-- Navbar --}}
  <div class="main--content">
    <div class="header--wrapper">
      <div class="header--title">
        <span>Get Aplikasi Indonesia</span>
        <h2>Dashboard</h2>
      </div>
      <div class="user--info">
        <img src="/img/user.png" alt="User">
      </div>
    </div>

    {{-- Card Content --}}
    <div class="card--container">
      <h3 class="main--title">Today data</h3>
      <div class="card--wrapper">
        <div class="payment--card dark-green">
          <div class="card--header">
            <div class="amount">
              <span class="title">User</span>
              <span class="amount--value">30 Orang</span>
            </div>
            <i class="fas fa-users icon"></i>
          </div>
          <span class="card--detail">Peserta Magang</span>
        </div>

        <div class="payment--card dark-red">
          <div class="card--header">
            <div class="amount">
              <span class="title">Terlambat</span>
              <span class="amount--value">2 Orang</span>
            </div>
            <i class="fas fa-list icon"></i>
          </div>
          <span class="card--detail">Peserta Magang</span>
        </div>

        <div class="payment--card dark-blue">
          <div class="card--header">
            <div class="amount">
              <span class="title">Admin</span>
              <span class="amount--value">2 Orang</span>
            </div>
            <i class="fas fa-user icon"></i>
          </div>
          <span class="card--detail">Administrator</span>
        </div>

        <div class="payment--card">
          <div class="card--header">
            <div class="amount">
              <span class="title"></span>
              <span class="amount--value"></span>
            </div>
            <a href="/qrcode" class="btn btn-emphasis"><i class="fas fa-qrcode icon"></i></a>
          </div>
          <span class="card--detail">QR Code</span>
        </div>
      </div>
    </div>

    {{-- Table Content --}}
    <div class="tabular--wrapper">
      <h3 class="main--title">Peserta magang</h3>
      <div class="table-container">
        <table>
          <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Asal Sekolah</th>
              <th>Action</th>
            </tr>
          </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Bagus Daffa Firmansyah</td>
                <td>Politeknik Negeri Jember</td>
                <td><button>Terlambat</button></td>
              </tr>

              <tr>
                <td>2</td>
                <td>Bagus Daffa Firmansyah</td>
                <td>Politeknik Negeri Jember</td>
                <td><button>Terlambat</button></td>
              </tr>

              <tr>
                <td>3</td>
                <td>-</td>
                <td>-</td>
                <td><button>-</button></td>
              </tr>
            </tbody>
        </table>
      </div>
      <a href="/absen">Detail <i class="fa-solid fa-arrow-right"></i></a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>