<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Best Western Augmented Reality</title>
    <?php 
      $url = $_SERVER['REQUEST_URI'];
    $toto = explode('/', $url);

    if($toto[2] != 'views'): ?>
  <link rel="stylesheet" href="AdminLTE-2.3.0/bootstrap/css/bootstrap.min.css">
  <?php else: ?>
    <link rel="stylesheet" href="../AdminLTE-2.3.0/bootstrap/css/bootstrap.min.css">
  <?php endif ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <?php if($toto[2] != 'views'): ?>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="AdminLTE-2.3.0/plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="AdminLTE-2.3.0/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="AdminLTE-2.3.0/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="AdminLTE-2.3.0/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="AdminLTE-2.3.0/plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE-2.3.0/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="AdminLTE-2.3.0/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="public/css/style.css">
  <link rel="stylesheet" href="public/css/normalize.css">
  <link rel="icon" type="image/png" href="public/img/best_western_b.png" />
  <?php else: ?>
      <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../AdminLTE-2.3.0/plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../AdminLTE-2.3.0/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../AdminLTE-2.3.0/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../AdminLTE-2.3.0/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../AdminLTE-2.3.0/plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../AdminLTE-2.3.0/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../AdminLTE-2.3.0/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../public/css/style.css">
  <link rel="stylesheet" href="../public/css/normalize.css">
  <link rel="icon" type="image/png" href="../public/img/best_western_b.png" />
  <?php endif ?>
  <script src="//code.jquery.com/jquery-2.2.1.min.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
  <?php if($toto[2] != 'views'): ?>
    <script type="text/javascript" src="public/js/script.js"></script>
  <?php else: ?>  
    <script type="text/javascript" src="../public/js/script.js"></script>
  <?php endif ?>  
</head>
<body>
	<header class="bg-blue">
		<div class="container">
			<nav class="navbar-header">
				<a href="../index.php"><img src="public/img/best_western.png" class="logo"></a>
				<ul class="nav navbar-nav">
          <li><a id="nav-poi" style="cursor:pointer;">Ajouter POI</a></li>
					<li><a href="views/formaction.php?action=ajouter" id="nav-action">Ajouter action</a></li>
					<li><a href="views/formicon.php?action=ajouter" id="nav-icon">Ajouter icône</a></li>
				</ul>
			</nav>
      <div id="confirm-icon" style="display:none;">
        <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Créer une icône avant d'ajouter un point d'intérêt ?</p>
      </div>
		</div>
	</header>