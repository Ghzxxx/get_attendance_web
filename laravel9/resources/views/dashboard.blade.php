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

  <div class="main--content">
    {{-- Navbar --}}
    <div class="header--wrapper">
      <div class="header--title">
        <span>Get Aplikasi Indonesia</span>
        <h2>Dashboard</h2>
      </div>
      <div class="user--info">
        <h5 class="text-white">Admin</h5>
      </div>
    </div>

    {{-- Card Content --}}
    <div class="card--container">
      <h3 class="main--title" style="font-size: 22px">Today data</h3>
      <div class="card--wrapper">
        <div class="payment--card dark-green">
          <div class="card--header">
            <div class="amount">
              <span class="title">User</span>
              <span class="amount--value">{{ $pesertaCount }} Orang</span>
            </div>
            <i class="fas fa-users icon"></i>
          </div>
          <span class="card--detail">Peserta Magang</span>
        </div>

        <div class="payment--card dark-red">
          <div class="card--header">
              <div class="amount">
                  <span class="title">User</span>
                  <span class="amount--value">{{ $terlambatCount }} Orang</span>
              </div>
              <i class="fas fa-users icon"></i>
          </div>
          <span class="card--detail">Terlambat</span>
        </div>      

        <div class="payment--card">
          <div class="card--header">
            <div class="amount">
              <span class="title">Admin</span>
              <span class="amount--value">QR Code</span>
            </div>
            <a href="/qrcode" class="btn btn-emphasis"><i class="fas fa-qrcode icon"></i></a>
          </div>
          <span class="card--detail">Administrator</span>
        </div>
      </div>
    </div>

    @if(isset($absensiPesertaMagang) && count($absensiPesertaMagang) > 0)
    {{-- Table Content --}}
    <div class="tabular--wrapper">
        <h3 class="main--title" style="font-size: 22px">Absensi magang</h3>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Asal Sekolah</th>
                        <th>Foto</th>
                        <th>Waktu</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($absensiPesertaMagang as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->asal }}</td>
                            <td>
                                <img src="{{ asset('storage/'.$data->foto) }}" alt="" width="90" class="rounded">
                            </td>
                            <td>{{ \Carbon\Carbon::parse($data->created_at)->format('H:i:s') }}</td>
                            <td>
                                @if(\Carbon\Carbon::parse($data->created_at)->format('H:i') > '08:00')
                                    <button class="btn btn-danger fw-bold"><i class="fas fa-xmark"></i> Terlambat</button>
                                @else
                                    <button class="btn btn-success fw-bold"><i class="fas fa-check"></i> Tepat Waktu</button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="/absen" class="dahsboard-link">Detail <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div>
@else
    <p>Tidak ada data absensi untuk ditampilkan.</p>
@endif

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>