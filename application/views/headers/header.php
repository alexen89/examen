
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Bienvenido</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="<?php echo $base_url?>../assets/js/boopstrap/bootstrap-3.3.7/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="<?php echo $base_url?>../assets/js/boopstrap/bootstrap-3.3.7/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="<?php echo $base_url?>../assets/css/style.css">
		<script src="<?php echo $base_url?>../assets/js/jquery-3.2.0.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="<?php echo $base_url?>../assets/js/boopstrap/bootstrap-3.3.7/js/bootstrap.min.js"></script>

    <?php echo $script ?>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $url ?>">Examen</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="<?php echo $class_ni ?>">
              <a href="<?php echo $url ?>">
                <span class="glyphicon glyphicon-home"></span>&nbsp;Inicio
              </a>
            </li>
            <li class="<?php echo $class_re ?>">
              <a href="<?php echo $url ?>nuevo">
                <span class="glyphicon glyphicon-plus"></span>&nbsp;Registro
              </a>
            </li>
            <li class="<?php echo $class_con ?>">
              <a href="<?php echo $url ?>consulta">
                <span class="glyphicon glyphicon-list-alt"></span>&nbsp;Consulta
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>