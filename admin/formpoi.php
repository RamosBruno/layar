<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="design.css" />
  <script src="script.js"></script>
</head>
<body>

	<?php include 'function.php';
	$rawIcons = getIcons();
	$mod=false;
	if(isset($_GET)){
		if($_GET['action'] == 'modifier'){
			$poi = getPoiById($_GET['id']);
			$mod=true;
		}
	}
	?>

	<header>
		<nav>
			<ul>
				<li><a href="/index.php">Accueil</a></li>
				<li><a href="/formaction.php?action=ajouter">Ajouter action</a></li>
				<li><a href="/formicon.php?action=ajouter">Ajouter icône</a></li>
			</ul>
		</nav>
	</header>
	<section>
		<form method="post" action="poi.php">
			<input type="hidden" value="<?php echo (isset($_GET['action']))?$_GET['action']:''; ?>" name="action">
			<input type="hidden" value="<?php echo (isset($_GET['id']))?$_GET['id']:''; ?>" name="id">
			<label>Titre</label><input type="text" value="<?php echo ($mod)?$poi[0]['title']:''; ?>" placeholder="Titre" name="title"><br>
			<label>ID</label><input type="text" value="<?php echo ($mod)?$poi[0]['id']:''; ?>" placeholder="Id" name="id" <?php echo ($mod)?'readonly':''; ?>><br>
			<label>Foot Note</label><input type="text" value="<?php echo ($mod)?$poi[0]['footnote']:''; ?>" placeholder="Foot Note" name="footnote"><br>
			<label>Latitude</label><input type="text" value="<?php echo ($mod)?$poi[0]['lat']:''; ?>" placeholder="Latitude" name="lat"><br>
			<label>Longitude</label><input type="text" value="<?php echo ($mod)?$poi[0]['lon']:''; ?>" placeholder="Longitude" name="lon"><br>
			<label>Url Image</label><input type="text" value="<?php echo ($mod)?$poi[0]['imageURL']:''; ?>" placeholder="Url Image" name="imageURL"><br>
			<label>Description</label><textarea rows="4" cols="50" name="description" placeholder="Description"><?php echo ($mod)?$poi[0]['description']:''; ?></textarea><br>
			<label>Style</label>
			<select name="biwStyle">
				<option value="0">Sélectionner</option>
				<option value="classic" <?php echo (($mod) && ($poi[0]['biwStyle']=='classic'))?'selected':''; ?>>Classic</option>
				<option value="collapsed" <?php echo (($mod) && ($poi[0]['biwStyle']=='collapsed'))?'selected':''; ?>>Collapsed</option>
			</select><br>
			<label for="doNotIndex">Do not index</label><input type="checkbox" name="doNotIndex" id="doNotIndex" <?php echo (($mod) && ($poi[0]['doNotIndex']==1))?'checked':''; ?>><br>
			<label for="showBiwOnClick">Show Biw On Click</label><input type="checkbox" name="showBiwOnClick" id="showBiwOnClick" <?php echo (($mod) && ($poi[0]['showBiwOnClick']==1))?'checked':''; ?>><br>
			<label for="showSmallBiw">show Small Biw</label><input type="checkbox" name="showSmallBiw" id="showSmallBiw" <?php echo (($mod) && ($poi[0]['showSmallBiw']==1))?'checked':''; ?>><br>
			<label>Type POI</label>
			<select name="poiType">
				<option value="0">Sélectionner</option>
				<option value="geo" <?php echo (($mod) && ($poi[0]['poiType']=='geo'))?'selected':''; ?>>Geo</option>
				<option value="vision" <?php echo (($mod) && ($poi[0]['poiType']=='vision'))?'selected':''; ?>>Vision</option>
			</select><br>
			<label>iconID</label>
			<select name="iconID">
				<option value="0">Sélectionner</option>
				<?php foreach($rawIcons as $icon){ ?>
				<option value="<?php echo $icon['id']; ?>" <?php echo (($mod) && ($poi[0]['iconID']==$icon['id']))?'selected':''; ?>><?php echo $icon['url']; ?></option>
				<?php } ?>
			</select><br>
			<input type="submit" value="<?php echo $_GET['action']; ?>">
		</form>
	</section>
</body>
</html>