<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Absen</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  {{-- Bootstrap --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  {{-- CSS --}}
  <link rel="stylesheet" href="/css/peserta.css">

</head>
<body>
  <div class="sidebar">
    <div class="logo"><img src="/img/Logo.png" alt="Logo"></div>
    @include('layouts.sidebar')
  </div>

  {{-- Content --}}
  <div class="main--content">
    <div class="header--wrapper">
      <div class="header--title">
        <span>Get Aplikasi Indonesia</span>
        <h2>Absensi</h2>
      </div>
      <div class="user--info">
        <h5 class="text-white">Admin</h5>
      </div>
    </div>

    {{-- <div class="add">
        <a href="#" class="btn btn-primary border-0"><i class="fas fa-plus"></i> Add Data</a>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="fas fa-plus"></i> Tambah
        </button>
    </div> --}}

    {{-- Table Content --}}
    <div class="tabular--wrapper">
      <h3 class="main--title">Absen Peserta Magang</h3>
      <div class="table-container">
        <table>
          <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Asal Sekolah</th>
              <th>Foto</th>
              <th>Waktu</th>
              <th>Action</th>
            </tr>
          </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Bagus Daffa Firmansyah</td>
                <td>Politeknik Negeri Jember</td>
                <td>
                  <img src="/img/foto.jpg" alt="Logo" width="80" class="rounded">
                </td>
                <td>08.00 WIB</td>
                <td>
                    <a href="#" class="btn btn-success text-white"> <i class="fas fa-check"></i></a>
                </td>
              </tr>

              <tr>
                <td>2</td>
                <td>Bagus Daffa Firmansyah</td>
                <td>Politeknik Negeri Jember</td>
                <td>
                  <img src="/img/foto.jpg" alt="Logo" width="80" class="rounded">
                </td>
                <td>08.01 WIB</td>
                <td>
                    <a href="#" class="btn btn-danger"> <i class="fas fa-xmark"></i></a>
                </td>
              </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>