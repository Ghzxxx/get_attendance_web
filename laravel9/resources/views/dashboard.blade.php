<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Admin Dashboard</title>

  <link rel="stylesheet" href="/css/dashboard.css">
</head>
<body>

  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar">
        <div class="text-center">
            <img src="https://via.placeholder.com/50" alt="Logo" class="rounded-circle mb-3">
            <h4>Get Aplikasi</h4>
        </div>
          
        <div class="position-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                Orders
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                Products
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                Customers
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                Reports
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="content">
          <h1 class="mb-4">Admin Dashboard</h1>
          <div class="row">
            <div class="col-lg-4 mb-4">
              <!-- Card 1 -->
              <div class="card">
                <div class="card-header">
                  Total Orders
                </div>
                <div class="card-body">
                  <h5 class="card-title">125</h5>
                  <p class="card-text">New orders this month</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <!-- Card 2 -->
              <div class="card">
                <div class="card-header">
                  Total Products
                </div>
                <div class="card-body">
                  <h5 class="card-title">85</h5>
                  <p class="card-text">Available products</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <!-- Card 3 -->
              <div class="card">
                <div class="card-header">
                  Total Customers
                </div>
                <div class="card-body">
                  <h5 class="card-title">50</h5>
                  <p class="card-text">Active customers</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

  <!-- Bootstrap JS, Popper.js, and jQuery (required for Bootstrap JavaScript plugins) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
