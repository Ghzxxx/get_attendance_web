<ul class="menu">
  <li>
    <a href="/" onclick="activateMenu(this)">
      <i class="fas fa-home"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li>
    <a href="/peserta" onclick="activateMenu(this)">
      <i class="fas fa-users"></i>
      <span>Peserta</span>
    </a>
  </li>
  <li>
    <a href="/absen" onclick="activateMenu(this)">
      <i class="fas fa-chart-bar"></i>
      <span>Absen</span>
    </a>
  </li>
  {{-- <li>
    <a href="/user" onclick="activateMenu(this)">
      <i class="fas fa-user"></i>
      <span>Users</span>
    </a>
  </li> --}}
  <li class="logout">
    <a href="#" onclick="confirmLogout()">
        <i class="fas fa-sign-out-alt"></i>
        <span>Logout</span>
    </a>
  </li>
</ul>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var currentRoute = window.location.pathname;

    var menuItems = document.querySelectorAll('.menu a');
    menuItems.forEach(function (menuItem) {
        var menuItemRoute = menuItem.getAttribute('href');
        if (currentRoute === menuItemRoute) {
            menuItem.parentNode.classList.add('active');
        }
    });
});
</script>

<script>
  function confirmLogout() {
      Swal.fire({
          title: 'Apakah Anda yakin ingin logout?',
          icon: 'question',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, Logout'
      }).then((result) => {
          if (result.isConfirmed) {
              window.location.href = "/logout";
          }
      });
  }
</script>