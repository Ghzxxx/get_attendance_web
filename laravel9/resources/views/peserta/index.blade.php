<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Peserta</title>

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

    <div class="add d-flex justify-content-between">
        {{-- <a href="/peserta-add" class="btn btn-primary border-0"><i class="fas fa-plus"></i> Add Data</a> --}}
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="fas fa-plus"></i> Tambah
        </button>

        <a href="peserta-deleted-list" class="btn btn-info text-white"><i class="fa-solid fa-trash-arrow-up"></i> Deleted</a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger mt-3">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

    @if(session('message'))
      <div class="alert {{ session('alert-class') }} mt-3">
          {{ session('message') }}
      </div>
    @endif

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
              @foreach($pesertaMagangData as $peserta)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $peserta->nama }}</td>
                <td>{{ $peserta->asal }}</td>
                <td>{{ $peserta->nohp }}</td>
                <td>
                    <a href="/peserta/{{ $peserta->id }}" class="btn btn-info text-white"><i class="fas fa-eye"></i> Detail</a>
                    <a href="/peserta-edit/{{ $peserta->id }}" class="btn btn-warning text-white"><i class="fas fa-pen-to-square"></i> Edit</a>
                    <a href="/peserta-delete/{{ $peserta->id }}" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>

        <div class="my-3">
          {{ $pesertaMagangData->Links() }}
        </div>
      </div>
    </div>
  </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Tambah Data Peserta Magang</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="peserta" method="POST">
          @csrf
          <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" name="nama" class="form-control" id="nama" required>
          </div>

          <div class="mb-3">
            <label for="asal" class="form-label">Asal Sekolah</label>
            <textarea class="form-control" name="asal" id="asal" rows="3" required></textarea>
          </div>
  
          <div class="mb-3">
              <label for="nohp" class="form-label">Nomer Handphone</label>
              <input type="text" name="nohp" class="form-control" id="nohp" required>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script>
    function konfirmasiHapus(pesertaId) {
        var konfirmasi = confirm("Apakah Anda yakin ingin menghapus peserta ini?");
    
        if (konfirmasi) {
            // Redirect ke halaman hapus dengan ID peserta
            window.location.href = "/peserta-delete/" + pesertaId;
        } else {
            // Batal hapus
            // Tambahkan logika atau tindakan lain sesuai kebutuhan
        }
    }
    </script>

    
</body>
</html>