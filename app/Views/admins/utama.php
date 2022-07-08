<?php $session = session() ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?= base_url();?>/assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url();?>/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="<?= base_url();?>/assets/css/adminlte.min.css">
  <?= $this->renderSection('style') ?>
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?= base_url();?>/admins" class="brand-link">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <p>Selamat Datang <?php echo $session->get('username')?></p>
        </div>
      </div>

      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           <li class="nav-item">
            <a href="<?= base_url();?>/admins" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url();?>/datawisata" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Wisata
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url();?>/jeniswisata" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Jenis Wisata
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url();?>/datakecamatan" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Kecamatan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url();?>/auth/logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
  <?= $this->renderSection('content') ?>
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2022.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>
<?= $this->renderSection('script') ?>
<script src="<?= base_url();?>/assets/plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url();?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url();?>/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?= base_url();?>/assets/js/adminlte.js"></script>
<script src="<?= base_url();?>/assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?= base_url();?>/assets/plugins/raphael/raphael.min.js"></script>
<script src="<?= base_url();?>/assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>

<script src="<?= base_url();?>/assets/js/pages/dashboard2.js"></script>
</body>
</html>