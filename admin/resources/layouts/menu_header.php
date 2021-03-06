  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SGTEL</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SGTEL</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs"><?php echo $_SESSION["nombre"]; ?></span>
              <i class="fa fa-chevron-down"></i>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <p>
                  <?php 
                    if ($_SESSION['rol'] == 'A') {
                      echo $_SESSION["nombre"] . ' - Adminstrador';
                    }elseif ($_SESSION['rol'] == 'U') {
                      echo $_SESSION["nombre"] . ' - Creador de Contenidos';
                    }elseif ($_SESSION['rol'] == 'C'){
                      echo $_SESSION["nombre"] . ' - Community Manager';
                    }
                  ?>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo $baseurl; ?>perfil" class="btn btn-default btn-flat">Ver Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo $baseurl; ?>controller/login.controller.php?salir=exit" class="btn btn-default btn-flat">Cerrar Sesión</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu">
        <li class="header">Menu de Navegación</li>
        <li id="ac1"><a href="<?php echo $baseurl; ?>inicio"><i class="fa fa-dashboard"></i> <span>Panel de Control</span></a></li>
        <?php if ($_SESSION['rol']== "A" || $_SESSION['rol']== "U") {
        ?>
        <li id="ac2"><a href="<?php echo $baseurl; ?>post"><i class="fa fa-hashtag"></i> <span>Posts</span></a></li>
        <?php } ?>
        <?php if ($_SESSION['rol']== "A") {
        ?>
        <li id="ac4"><a href="<?php echo $baseurl; ?>users"><i class="fa fa-users"></i> <span>Creadores</span></a></li>
        <li id="ac5"><a href="<?php echo $baseurl; ?>analytics"><i class="fa fa-line-chart"></i> <span>Analytics</span></a></li>
        <?php } ?>
      </ul>
    </section>
  </aside>
