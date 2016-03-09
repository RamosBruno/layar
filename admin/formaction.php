<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="design.css" />
  <script src="script.js"></script>
</head>
<body>

	<?php include 'function.php';
	$rawPois = getPois();
	$mod=false;
	if(isset($_GET)){
		if($_GET['action'] == 'modifier'){
			$action = getActionById($_GET['id']);
			$uriTemp = explode(":",$action[0]['uri']);
			if(count(array_keys($uriTemp)) >= 2)
				$uri = $uriTemp[1];
			else
				$uri = $uriTemp[0];
			$mod=true;
		}
	}?>

	<header>
		<nav>
			<ul>
				<li><a href="/index.php">Accueil</a></li>
				<li><a href="/formpoi.php?action=ajouter">Ajouter POI</a></li>
				<li><a href="/formicon.php?action=ajouter">Ajouter icône</a></li>
			</ul>
		</nav>
	</header>
	<section>
		<form method="post" action="action.php">
			<input type="hidden" value="<?php echo (isset($_GET['action']))?$_GET['action']:''; ?>" name="action">
			<input type="hidden" value="<?php echo (isset($_GET['id']))?$_GET['id']:''; ?>" name="id">
			<label>ID POI</label>
			<select name="poiID">
				<option value="0">Sélectionner</option>
				<?php foreach($rawPois as $poi){ ?>
				<option value="<?php echo $poi['id']; ?>" <?php echo (($mod) && ($action[0]['poiID']==$poi['id']))?'selected':''; ?>><?php echo $poi['id']; ?></option>
				<?php } ?>
			</select><br>
			<label>Label</label><input type="text" value="<?php echo ($mod)?$action[0]['label']:''; ?>" placeholder="Label" name="label"><br>
			<label>URI</label><input type="text" value="<?php echo ($mod)?$uri:''; ?>" placeholder="URI" name="uri"><br>
			<label>Type Content</label>
			<select name="contentType">
				<option value="0">Sélectionner</option>
				<option value="text/html" <?php echo (($mod) && ($action[0]['activityType']=='1'))?'selected':''; ?>>Site internet</option>
				<option value="audio/mpeg" <?php echo (($mod) && ($action[0]['activityType']=='2'))?'selected':''; ?>>Audio</option>
				<option value="video/mp4" <?php echo (($mod) && ($action[0]['activityType']=='3'))?'selected':''; ?>>Video</option>
				<option value="application/vnd.layar.internal-tel" <?php echo (($mod) && ($action[0]['activityType']=='4'))?'selected':''; ?>>Téléphone</option>
				<option value="application/vnd.layar.internal-mail" <?php echo (($mod) && ($action[0]['activityType']=='5'))?'selected':''; ?>>Email</option>
				<option value="maps" <?php echo (($mod) && ($action[0]['activityType']=='6'))?'selected':''; ?>>Maps</option>
			</select><br>
			<label>Methode</label>
			<select name="method">
				<option value="0">Sélectionner</option>
				<option value="GET" <?php echo (($mod) && ($action[0]['method']=='GET'))?'selected':''; ?>>GET</option>
				<option value="POST" <?php echo (($mod) && ($action[0]['method']=='POST'))?'selected':''; ?>>POST</option>
			</select><br>
			<label>Paramètres</label><input type="text" value="<?php echo ($mod)?$action[0]['params']:''; ?>" placeholder="Paramètres" name="params"><br>
			<label>Activity Message</label><input type="text" value="<?php echo ($mod)?$action[0]['activityMessage']:''; ?>" placeholder="Activity Message" name="activityMessage"><br>
			<label>Auto Trigger Range</label><input type="checkbox" name="autoTriggerRange" <?php echo (($mod) && ($action[0]['autoTriggerRange']==1))?'checked':''; ?>><br>
			<label>Auto Trigger Only</label><input type="checkbox" name="autoTriggerOnly" <?php echo (($mod) && ($action[0]['autoTriggerOnly']==1))?'checked':''; ?>><br>
			<label>Close Biw</label><input type="checkbox" name="closeBiw" <?php echo (($mod) && ($action[0]['closeBiw']==1))?'checked':''; ?>><br>
			<label>Show activity</label><input type="checkbox" name="showActivity" <?php echo (($mod) && ($action[0]['showActivity']==1))?'checked':''; ?>><br>
			<label>Auto Trigger</label><input type="checkbox" name="autoTrigger" <?php echo (($mod) && ($action[0]['autoTrigger']==1))?'checked':''; ?>><br>
			<input type="submit" value="<?php echo $_GET['action']; ?>">
		</form>
	</section>
</body>
</html>