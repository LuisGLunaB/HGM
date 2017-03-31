<?php
	$ROOT = "."
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html lang="es-MX" xml:lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>Hola Mundo</title>
	<meta name="description" content="Descripción" />

	<?php
	include_once("$ROOT/html/metatags-configurations.php");
	include_once("$ROOT/html/metatags-stylesheets.php");
	include_once("$ROOT/html/javascript-files.php");
	include_once("$ROOT/html/tracking-head.php");
	?>

	<!-- CSS SOLO PARA LA PÁGINA ACTUAL  -->
	<style type="text/css">
	</style>

</head>

<body onresize="" onload="">
	<?php include_once("$ROOT/html/main-menu.php"); ?>

	<!-- Contenido antes del container -->
  <div class="container">
		<div class="card-panel deep-purple lighten-5">
			<span class="blue-text text-darken-2">This is a card panel with dark blue text</span>
		</div>
		<a class="btn btn-floating pulse"><i class="material-icons">menu</i></a>
		<a class="btn btn-floating btn-large pulse"><i class="material-icons">cloud</i></a>
		<a class="btn btn-floating btn-large cyan pulse"><i class="material-icons">edit</i></a>
  </div>

	<?php
	include_once("$ROOT/html/footer.php");
	include_once("$ROOT/html/tracking-body.php");
	?>
	<script src="<?php echo $ROOT;?>/javascript/general-controller.js"></script>
</body>

</html>
