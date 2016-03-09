<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="design.css" />
  <script src="script.js"></script>
</head>
<body>

	<?php include 'function.php';
	$rawIcons = getIcons();?>

	<header>
		<nav>
			<ul>
				<li><a href="/index.php">Accueil</a></li>
				<li><a href="/formpoi.php">Ajouter POI</a></li>
				<li><a href="/formaction.php">Ajouter action</a></li>
				<li><a href="/formicon.php">Ajouter icône</a></li>
			</ul>
		</nav>
	</header>
	<section>
		<form method="post" action="poi.php">
			<label>Titre</label><input type="text" value="" placeholder="Titre" name="title"><br>
			<label>ID</label><input type="text" value="" placeholder="Id" name="id"><br>
			<label>Foot Note</label><input type="text" value="" placeholder="Foot Note" name="footnote"><br>
			<label>Latitude</label><input type="text" value="" placeholder="Latitude" name="lat"><br>
			<label>Longitude</label><input type="text" value="" placeholder="Longitude" name="lon"><br>
			<label>Url Image</label><input type="text" value="" placeholder="Url Image" name="imageURL"><br>
			<label>Description</label><textarea rows="4" cols="50" name="description" placeholder="Description"></textarea><br>
			<label>Style</label>
			<select name="biwStyle">
				<option value="classic">Classic</option>
				<option value="collapsed">Collapsed</option>
			</select><br>
			<label for="doNotIndex">Do not index</label><input type="checkbox" name="doNotIndex" id="doNotIndex"><br>
			<label for="showBiwOnClick">Show Biw On Click</label><input type="checkbox" name="showBiwOnClick" id="showBiwOnClick"><br>
			<label for="showSmallBiw">show Small Biw</label><input type="checkbox" name="showSmallBiw" id="showSmallBiw"><br>
			<label>Type POI</label>
			<select name="poiType">
				<option value="geo">Geo</option>
				<option value="vision">Vision</option>
			</select><br>
			<label>iconID</label>
			<select name="iconID">
				<?php foreach($rawIcons as $icon){ ?>
				<option value="<?php echo $icon['id']; ?>"><?php echo $icon['url']; ?></option>
				<?php } ?>
			</select><br>
			<input type="submit" value="Envoyer">
		</form>
	</section>
</body>
</html>