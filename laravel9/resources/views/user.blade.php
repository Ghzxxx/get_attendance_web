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
    <ul class="menu">
      <li>
        <a href="/dashboard">
          <i class="fas fa-home"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li>
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
      <li  class="active">
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
        <h2>User Administrator</h2>
      </div>
      <div class="user--info">
        {{-- <div class="search--box">
          <i class="fa-solid fa-search"></i>
          <input type="text" placeholder="Search">
        </div> --}}
        <img src="/img/user.png" alt="">
      </div>
    </div>

    <div class="add">
        <a href="#" class="btn btn-primary border-0"><i class="fas fa-plus"></i> Add Data</a>
    </div>

    {{-- Table Content --}}
    <div class="tabular--wrapper">
      <h3 class="main--title">Data Admin</h3>
      <div class="table-container">
        <table>
          <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>No.Telp</th>
              <th>Action</th>
            </tr>
          </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Bagus Daffa Firmansyah</td>
                <td>081336703009</td>
                <td>
                    <a href="#" class="btn btn-info text-white"><i class="fas fa-eye"></i> Detail</a>
                    <a href="#" class="btn btn-warning text-white"><i class="fas fa-pen-to-square"></i> Edit</a>
                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                </td>
              </tr>

              <tr>
                <td>2</td>
                <td>-</td>
                <td>-</td>
                <td></td>
                <td><button>-</button></td>
              </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>