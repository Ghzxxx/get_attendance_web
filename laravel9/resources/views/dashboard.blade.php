@extends('layouts.main')

@section('title', 'Dashboard')

@section('container')
  {{-- Navbar --}}
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
                <td>08.01 WIB</td>
                <td><button>Terlambat</button></td>
              </tr>
            </tbody>
          </table>
          <a href="/absen">Detail <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
@endsection