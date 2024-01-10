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

    {{-- Table Content --}}
    <div class="tabular--wrapper">
      <h3 class="main--title">Absen Peserta Magang</h3>

      <div class="container">
        <div class="row">
          <div class="col-md-9 mt-5">
          </div>
          <style>
            .custom-margin {
                margin-left: 8px;
            }
          </style>
      
          <div class="col-md-3 ml-auto">
              <form action="{{ route('filter') }}" method="get" class="my-4">
                  <div class="form-group">
                      <label for="selected_date" class="form-label">Pilih Tanggal:</label>
                      <div class="input-group">
                          <input type="date" id="selected_date" name="selected_date" class="form-control">
                          <div class="input-group-append">
                              <button type="submit" class="btn btn-primary dark-blue custom-margin">Filter</button>
                          </div>
                      </div>
                  </div>
              </form>
          </div>

        </div>
      </div>
      
    <div class="table-container">
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
              @foreach($absensiPesertaMagang as $absen)
              <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $absen->nama }}</td>
                  <td>{{ $absen->asal }}</td>
                  <td>
                      <img src="{{ asset('storage/'.$absen->foto) }}" alt="" width="50">
                  </td>
                  <td>{{ \Carbon\Carbon::parse($absen->created_at)->format('H:i:s') }}</td>
                  <td>
                      @if(\Carbon\Carbon::parse($absen->created_at)->format('H:i') > '08:00')
                          <button class="btn btn-danger fw-bold"><i class="fas fa-xmark"></i> Terlambat</button>
                      @else
                          <button class="btn btn-success fw-bold"><i class="fas fa-check"></i> Tepat Waktu</button>
                      @endif
                  </td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>