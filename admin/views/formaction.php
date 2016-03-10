<?php include '../layout/header.php'; ?>
<?php include '../include/function.php';
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
	<section class="content">
		<div class="row row-centered">
			<div class="col-xs-12 col-sm-8 col-centered">
				<div class="box box-primary">
					<div class="box-header with-border">
		            	<h3 class="box-title">Ajouter une action</h3>
		            </div>

					<form method="post" action="/../include/action.php" role="form">
						<div class="box-body">
							<input type="hidden" value="<?php echo (isset($_GET['action']))?$_GET['action']:''; ?>" name="action">
							<input type="hidden" value="<?php echo (isset($_GET['id']))?$_GET['id']:''; ?>" name="id">
							<div class="form-group">
								<label>ID POI</label>
								<select name="poiID" class="form-control">
									<option value="0">Sélectionner</option>
									<?php foreach($rawPois as $poi){ ?>
									<option value="<?php echo $poi['id']; ?>" <?php echo (($mod) && ($action[0]['poiID']==$poi['id']))?'selected':''; ?>><?php echo $poi['id']; ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<label for="label">Label</label><input type="text" value="<?php echo ($mod)?$action[0]['label']:''; ?>" placeholder="Label" name="label" class="form-control" id="label">
							</div>
							<div class="form-group">
								<label for="uri">URI</label><input type="text" value="<?php echo ($mod)?$uri:''; ?>" placeholder="URI" name="uri" class="form-control" id="uri">
							</div>
							<div class="form-group">
								<label>Type Content</label>
								<select name="contentType" class="form-control">
									<option value="0">Sélectionner</option>
									<option value="text/html" <?php echo (($mod) && ($action[0]['activityType']=='1'))?'selected':''; ?>>Site internet</option>
									<option value="audio/mpeg" <?php echo (($mod) && ($action[0]['activityType']=='2'))?'selected':''; ?>>Audio</option>
									<option value="video/mp4" <?php echo (($mod) && ($action[0]['activityType']=='3'))?'selected':''; ?>>Video</option>
									<option value="application/vnd.layar.internal-tel" <?php echo (($mod) && ($action[0]['activityType']=='4'))?'selected':''; ?>>Téléphone</option>
									<option value="application/vnd.layar.internal-mail" <?php echo (($mod) && ($action[0]['activityType']=='5'))?'selected':''; ?>>Email</option>
									<option value="maps" <?php echo (($mod) && ($action[0]['activityType']=='6'))?'selected':''; ?>>Maps</option>
								</select>
							</div>
							<div class="form-group">
								<label>Methode</label>
								<select name="method" class="form-control">
									<option value="0">Sélectionner</option>
									<option value="GET" <?php echo (($mod) && ($action[0]['method']=='GET'))?'selected':''; ?>>GET</option>
									<option value="POST" <?php echo (($mod) && ($action[0]['method']=='POST'))?'selected':''; ?>>POST</option>
								</select>
							</div>
							<div class="form-group">
								<label for="params">Paramètres</label><input type="text" value="<?php echo ($mod)?$action[0]['params']:''; ?>" id="params" class="form-control" placeholder="Paramètres" name="params">
							</div>
							<div class="form-group">
								<label for="activityMessage">Activity Message</label><input type="text" value="<?php echo ($mod)?$action[0]['activityMessage']:''; ?>" id="activityMessage" class="form-control" placeholder="Activity Message" name="activityMessage"><br>
							</div>
							<div class="checkbox">
								<label><input type="checkbox" name="autoTriggerRange" <?php echo (($mod) && ($action[0]['autoTriggerRange']==1))?'checked':''; ?>>Auto Trigger Range</label>
							</div>
							<div class="checkbox">
								<label><input type="checkbox" name="autoTriggerOnly" <?php echo (($mod) && ($action[0]['autoTriggerOnly']==1))?'checked':''; ?>>Auto Trigger Only</label>
							</div>
							<div class="checkbox">
								<label><input type="checkbox" name="closeBiw" <?php echo (($mod) && ($action[0]['closeBiw']==1))?'checked':''; ?>>Close Biw</label>
							</div>
							<div class="checkbox">
								<label><input type="checkbox" name="showActivity" <?php echo (($mod) && ($action[0]['showActivity']==1))?'checked':''; ?>>Show activity</label>
							</div>
							<div class="checkbox">
								<label><input type="checkbox" name="autoTrigger" <?php echo (($mod) && ($action[0]['autoTrigger']==1))?'checked':''; ?>>Auto Trigger</label>
							</div>
						</div>
						<div class="box-footer">
							<input type="submit" value="<?php echo strtoupper($_GET['action']); ?>" class="btn btn-primary">
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</body>
</html>