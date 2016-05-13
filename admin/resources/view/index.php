<?php session_start();
include '../../app/app2.php'; ?>
<!DOCTYPE html>
<html>
<?php include '../layouts/head.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include '../layouts/menu_header.php'; ?>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Panel de Control
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Panel de Control</a></li>
      </ol>
    </section>

    <!-- contenedor principal -->
    <section class="content">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-1">
            <div class="inner">
              <h3 class="titcard">Comentarios</h3>
              <p>Comentarios de las publicaciones</p>
            </div>
            <div class="icon">
              <i class="ion-android-textsms"></i>
            </div>
            <a target="_blank" href="https://developers.facebook.com/tools/comments/1774999642714124" class="small-box-footer">Ir <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-2">
            <div class="inner">
              <h3 class="titcard">Chat</h3>
              <p>Chat en la pagina web</p>
            </div>
            <div class="icon">
              <i class="ion-chatbubbles"></i>
            </div>
            <a target="_blank" href="https://dashboard.tawk.to/login" class="small-box-footer">Ir <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-3">
            <div class="inner">
              <h3 class="titcard">Facebook</h3>
              <p>Fan Page SGTEL</p>
            </div>
            <div class="icon">
              <i class="ion-social-facebook"></i>
            </div>
            <a target="_blank" href="https://www.facebook.com/" class="small-box-footer">Ir <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-4">
            <div class="inner">
              <h3 class="titcard">Twitter</h3>
              <p>Twitter SGTEL</p>
            </div>
            <div class="icon">
              <i class="ion-social-twitter"></i>
            </div>
            <a target="_blank" href="https://twitter.com" class="small-box-footer">Ir <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-5">
            <div class="inner">
              <h3 class="titcard">Analytics</h3>
              <p>Google Analytics</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a target="_blank" href="https://analytics.google.com/analytics/" class="small-box-footer">Ir <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-6">
            <div class="inner">
              <h3 class="titcard">Cpanel</h3>
              <p>Cpanel del Servidor</p>
            </div>
            <div class="icon">
              <i class="ion-gear-a"></i>
            </div>
            <a target="_blank" href="http://sgtel.pe/cpanel" class="small-box-footer">Ir <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-7">
            <div class="inner">
              <h3 class="titcard">Post</h3>
              <p>Novedades</p>
            </div>
            <div class="icon">
              <i class="ion-pound"></i>
            </div>
            <a href="<?php echo $baseurl; ?>post" class="small-box-footer">Ir <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <?php if ($_SESSION['rol']== "A") {
        ?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-8">
            <div class="inner">
              <h3 class="titcard">Usuarios</h3>
              <p>Creadores de Contenido</p>
            </div>
            <div class="icon">
              <i class="ion-ios-people"></i>
            </div>
            <a href="<?php echo $baseurl; ?>users" class="small-box-footer">Ir <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <?php } ?>
      </div>
    </section>
  </div>

  <?php include '../layouts/footer.php'; ?>

</div>

<!-- REQUIRED JS SCRIPTS -->
<?php include '../layouts/scripts.php'; ?>


</body>

</html>
