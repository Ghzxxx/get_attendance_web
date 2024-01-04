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
  <li class="logout" onclick="activateMenu(this)">
    <a href="/logout">
      <i class="fas fa-sign-out-alt"></i>
      <span>Logout</span>
    </a>
  </li>
</ul>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Menentukan route saat ini dari URL
    var currentRoute = window.location.pathname;

    // Menambahkan kelas "active" ke elemen menu yang sesuai dengan route saat ini
    var menuItems = document.querySelectorAll('.menu a');
    menuItems.forEach(function (menuItem) {
        var menuItemRoute = menuItem.getAttribute('href');
        if (currentRoute === menuItemRoute) {
            menuItem.parentNode.classList.add('active');
        }
    });
});
</script>