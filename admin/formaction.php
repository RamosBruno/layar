<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="design.css" />
  <script src="script.js"></script>
</head>
<body>

	<?php include 'function.php';
	$rawPois = getPois();?>

	<header>
		<nav>
			<ul>
				<li><a href="/index.php">Accueil</a></li>
				<li><a href="/formpoi.php">Ajouter POI</a></li>
				<li><a href="/formaction.php">Ajouter action</a></li>
			</ul>
		</nav>
	</header>
	<section>
		<form method="post" action="action.php">
			<label>ID POI</label>
			<select name="poiID">
				<?php foreach($rawPois as $poi){ ?>
				<option value="<?php echo $poi['id']; ?>"><?php echo $poi['id']; ?></option>
				<?php } ?>
			</select><br>
			<label>Label</label><input type="text" value="" placeholder="Label" name="label"><br>
			<label>URI</label><input type="text" value="" placeholder="URI" name="uri"><br>
			<label>Type Content</label>
			<select name="contentType">
				<option value="text/html">Site internet</option>
				<option value="audio/mpeg">Audio</option>
				<option value="video/mp4">Video</option>
				<option value="application/vnd.layar.internal-tel">Téléphone</option>
				<option value="application/vnd.layar.internal-mail">Email</option>
				<option value="maps">Maps</option>
			</select><br>
			<label>Methode</label>
			<select name="method">
				<option value="GET">GET</option>
				<option value="POST">POST</option>
			</select><br>
			<label>Paramètres</label><input type="text" value="" placeholder="Paramètres" name="params"><br>
			<label>Activity Message</label><input type="text" value="" placeholder="Activity Message" name="activityMessage"><br>
			<label>Auto Trigger Range</label><input type="checkbox" name="autoTriggerRange"><br>
			<label>Auto Trigger Only</label><input type="checkbox" name="autoTriggerOnly"><br>
			<label>Close Biw</label><input type="checkbox" name="closeBIw"><br>
			<label>Show activity</label><input type="checkbox" name="showActivity"><br>
			<label>Auto Trigger</label><input type="checkbox" name="autoTrigger"><br>
			<input type="submit" value="Envoyer">
		</form>
	</section>
</body>
</html>