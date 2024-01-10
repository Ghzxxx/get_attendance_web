<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Deleted</title>

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
        <h2>Peserta Magang</h2>
      </div>
      <div class="user--info">
        <h5 class="text-white">Admin</h5>
      </div>
    </div>

    {{-- Table Content --}}
    <div class="tabular--wrapper">
      <h3 class="main--title">Data Peserta Magang</h3>
      <div class="table-container">
        <table>
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Asal Sekolah</th>
              <th>Nomer Handphone</th>
              <th>Action</th>
            </tr>
          </thead>
            <tbody>
              @foreach($peserta as $item)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->asal }}</td>
                <td>{{ $item->nohp }}</td>
                <td>
                    <a href="/peserta/{{ $item->id }}/restore" class="btn btn-primary">Restore</a>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    
</body>
</html>