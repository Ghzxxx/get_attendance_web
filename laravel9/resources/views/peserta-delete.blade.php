<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Peserta Edit</title>

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
        <img src="/img/user.png" alt="">
      </div>
    </div>

    {{-- Table Content --}}
    <div class="tabular--wrapper">
        <h3 class="mb-3">Hapus Data Peserta Magang</h3>

        <div class="mt-4">
            <p>Apakah kamu yakin ingin menghapus data ? {{ $peserta->nama }}</p>
            <form action="/peserta-destroy/{{ $peserta->id }}" method="post" class="d-inline-block">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger mt-2">Hapus</button>
            </form>
            <a href="/peserta" class="btn btn-primary mt-2">Cancel</a>
        </div>
        
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/3bf8feb25e.js" crossorigin="anonymous"></script>
</body>
</html>