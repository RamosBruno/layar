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
	$rawActions = getActions();
	$rawIcons = getIcons();?>

	<header>
		<nav>
			<ul>
				<li><a href="/formpoi.php?action=ajouter">Ajouter POI</a></li>
				<li><a href="/formaction.php?action=ajouter">Ajouter action</a></li>
				<li><a href="/formicon.php?action=ajouter">Ajouter icône</a></li>
			</ul>
		</nav>
	</header>
	<section>
		<h2>POI</h2>
		<table>
			<th>
				<td>ID</td>
				<td>URL Image</td>
				<td>Titre</td>
				<td>Description</td>
				<td>Foot Note</td>
				<td>Latitude</td>
				<td>Longitude</td>
				<td>Icone</td>
				<td>Objet</td>
				<td>Transform</td>
				<td></td>
			</th>
			<?php foreach($rawPois as $poi){ ?>
			<tr>
				<td><?php echo $poi['id']; ?></td>
				<td><?php echo $poi['imageURL']; ?></td>
				<td><?php echo $poi['title']; ?></td>
				<td><?php echo $poi['description']; ?></td>
				<td><?php echo $poi['footnote']; ?></td>
				<td><?php echo $poi['lat']; ?></td>
				<td><?php echo $poi['lon']; ?></td>
				<td><?php echo $poi['iconID']; ?></td>
				<td><?php echo $poi['objectID']; ?></td>
				<td><?php echo $poi['transformID']; ?></td>
				<td><a href="/formpoi.php?action=modifier&id=<?php echo $poi['id']; ?>">Modifier</a></td>
			</tr>
			<?php } ?>
		</table>
	</section>
	<section>
		<h2>Actions</h2>
		<table>
			<th>
				<td>ID Poi</td>
				<td>Label</td>
				<td>Uri</td>
				<td>Type contenu</td>
				<td>Méthode</td>
				<td>Paramètres</td>
				<td></td>
			</th>
			<?php foreach($rawActions as $action){ ?>
			<tr>
				<td><?php echo $action['poiID']; ?></td>
				<td><?php echo $action['label']; ?></td>
				<td><?php echo $action['uri']; ?></td>
				<td><?php echo $action['contentType']; ?></td>
				<td><?php echo $action['method']; ?></td>
				<td><?php echo $action['params']; ?></td>
				<td><a href="/formaction.php?action=modifier&id=<?php echo $action['id']; ?>">Modifier</a></td>
			</tr>
			<?php } ?>
		</table>
	</section>
	<section>
		<h2>Icônes</h2>
		<table>
			<th>
				<td>Url</td>
				<td>Type</td>
				<td></td>
			</th>
			<?php foreach($rawIcons as $icon){ ?>
			<tr>
				<td><?php echo $icon['url']; ?></td>
				<td><?php echo $icon['type']; ?></td>
				<td><a href="/formicon.php?action=modifier&id=<?php echo $icon['id']; ?>">Modifier</a></td>
			</tr>
			<?php } ?>
		</table>
	</section>
</body>
</html>