<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <div class="brand-link d-flex justify-content-between align-items-center">
    <a href="#" class="brand-link">
      <img src="./assets/img/book-stack.png" alt="E-lib" class="brand-image img-circle elevation-3" style="opacity: 0.7" width="50px" />
      <span class="brand-text font-weight-light"> E-Library </span>
    </a>
    <a href="#" data-widget="pushmenu" role="button" class="pushmenu">
      <i class="fas fa-bars"></i>
    </a>
  </div>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="./assets/img/profile.png" alt="User" class="img-circle elevation-2" />
      </div>
      <div class="info">
        <a href="./index.php" class="d-block"> Andhita Bagas </a>
      </div>
    </div>

    <!-- Sidebar menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
        <li class="nav-item">
          <a href="./peminjaman.php" class="nav-link">
            <i class="nav-icon fas fa-list"></i>
            <p>Peminjaman</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="./anggota.php" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>Anggota</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="./katalog.php" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>Katalog Buku</p>
          </a>
        </li>

        <?php
        if (isset($_SESSION['username'])) {
        ?>
          <li class="nav-item">
            <a href="./logout.php" class="nav-link">
              <i class="nav-icon fas fa-door-open"></i>
              <p>Keluar</p>
            </a>
          </li>
        <?php
        } else {
        ?>
          <li class="nav-item">
            <a href="./login.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Masuk</p>
            </a>
          </li>
        <?php } ?>
      </ul>
    </nav>
  </div>
</aside>