<?php
session_start();
include 'app/app.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>SGTEL | Login</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo $baseurl.'public/bootstrap/css/bootstrap.min.css';?>" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo $baseurl.'public/dist/css/AdminLTE.min.css';?>" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="../"><b>SGTEL </b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Iniciar Sesión</p>
        <form id="fLogin" action="controller/login.controller.php" nethod="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="user" placeholder="Email" required/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="pass" placeholder="Password" required/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <?php if (isset($_SESSION["msg"])){ ?>
          <div class="form-group has-feedback">
            <label><?php echo $_SESSION["msg"]; unset($_SESSION["msg"]); ?></label>
          </div>
          <?php } ?>
          <div class="row">
            <div class="col-xs-8">                  
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
            </div><!-- /.col -->
          </div>
        </form>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo $baseurl.'public/plugins/jQuery/jQuery-2.2.0.min.js';?>"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo $baseurl.'public/bootstrap/js/bootstrap.min.js';?>" type="text/javascript"></script>

  </body>
</html>