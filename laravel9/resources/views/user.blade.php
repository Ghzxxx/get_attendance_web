<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>User</title>

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
        <h2>User Administrator</h2>
      </div>
      <div class="user--info">
        <img src="/img/user.png" alt="">
      </div>
    </div>

    <div class="add">
        {{-- <a href="#" class="btn btn-primary border-0"><i class="fas fa-plus"></i> Add Data</a> --}}
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="fas fa-plus"></i> Tambah
        </button>
    </div>

    {{-- Table Content --}}
    <div class="tabular--wrapper">
      <h3 class="main--title">Data Admin</h3>
      <div class="table-container">
        <table>
          <thead>
            <tr>
              <th>No</th>
              <th>Email</th>
              <th>Password</th>
              <th>Action</th>
            </tr>
          </thead>
            <tbody>
              @foreach($userAdmin as $user)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td>
                    {{-- <a href="#" class="btn btn-info text-white"><i class="fas fa-eye"></i> Detail</a> --}}
                    {{-- <a href="#" class="btn btn-warning text-white"><i class="fas fa-pen-to-square"></i> Edit</a> --}}
                    <a href="/user-delete/{{ $user->id }}" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Tambah User Admin</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="user" method="POST">
          @csrf
          <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" name="email" class="form-control" id="email" required>
          </div>

          <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="password" required>
          </div>
  
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Kembali</button>
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>