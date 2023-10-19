<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-primary navbar-dark " style="background:#e6f0ff;">
  <!-- Left navbar links -->
  <ul class="navbar-nav " >
    <li class="nav-item">
      <a style="color:#4f5463;" class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    
      <?php if ($_SESSION['login_type'] == 1): ?>
        <li>
        <a class="nav-link text-white" href="./" role="button">
          <large><b style="color:#000000;">Online Survey System</b></large>
        </a>
        </li>
      <?php else: ?>
        <li>
        <a class="nav-link text-white" href="./" role="button">
          <img style="width: 30px;height:30px" src="assets/dist/img/logo.png" alt="">
          <large><b style="color:#000000;">Mindfull</b></large>
        </a>
        </li>
      <?php endif; ?>
    
  </ul>

  <ul class="navbar-nav ml-auto">

    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i style="color:#4f5463;" class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>
  </ul>
</nav>
<!-- /.navbar -->