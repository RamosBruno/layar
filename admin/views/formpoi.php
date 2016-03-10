<?php include '/../layout/header.php'; ?>
<?php include '/../include/function.php';
$rawIcons = getIcons();
$mod=false;
if(isset($_GET)){
	if($_GET['action'] == 'modifier'){
		$poi = getPoiById($_GET['id']);
		$mod=true;
	}
}
?>
	<section class="content">
		<div class="row row-centered">
			<div class="col-xs-12 col-sm-8 col-centered">
				<div class="box box-primary">
					<div class="box-header with-border">
		            	<h3 class="box-title">Ajouter un POI</h3>
		            </div>
					<form method="post" action="/../include/poi.php" role="form">
						<div class="box-body">
							<input type="hidden" value="<?php echo (isset($_GET['action']))?$_GET['action']:''; ?>" name="action">
							<input type="hidden" value="<?php echo (isset($_GET['id']))?$_GET['id']:''; ?>" name="id">
							<div class="form-group">
								<label for="title">Titre</label><input type="text" value="<?php echo ($mod)?$poi[0]['title']:''; ?>" placeholder="Titre" id="title" name="title" class="form-control">
							</div>
							<div class="form-group">
								<label for="id">ID</label><input type="text" value="<?php echo ($mod)?$poi[0]['id']:''; ?>" placeholder="Id" class="form-control" id="id" name="id" <?php echo ($mod)?'readonly':''; ?>>
							</div>
							<div class="form-group">
								<label for="footnote">Foot Note</label><input type="text" value="<?php echo ($mod)?$poi[0]['footnote']:''; ?>" class="form-control" placeholder="Foot Note" id="footnote" name="footnote">
							</div>
							<div class="form-group">
								<label for="lat">Latitude</label><input type="text" value="<?php echo ($mod)?$poi[0]['lat']:''; ?>" class="form-control" placeholder="Latitude" id="lat" name="lat">
							</div>
							<div class="form-group">
								<label for="lon">Longitude</label><input type="text" value="<?php echo ($mod)?$poi[0]['lon']:''; ?>" class="form-control" placeholder="Longitude" id="lon" name="lon">
							</div>
							<div class="form-group">
								<label for="imageURL">Url Image</label><input type="text" value="<?php echo ($mod)?$poi[0]['imageURL']:''; ?>" class="form-control" placeholder="Url Image" id="imageURL" name="imageURL">
							</div>
							<div class="form-group">
								<label>Description</label><textarea rows="4" cols="50" name="description" placeholder="Description" class="form-control"><?php echo ($mod)?$poi[0]['description']:''; ?></textarea>
							</div>
							<div class="form-group">
								<label>Style</label>
								<select name="biwStyle" class="form-control">
									<option value="0">Sélectionner</option>
									<option value="classic" <?php echo (($mod) && ($poi[0]['biwStyle']=='classic'))?'selected':''; ?>>Classic</option>
									<option value="collapsed" <?php echo (($mod) && ($poi[0]['biwStyle']=='collapsed'))?'selected':''; ?>>Collapsed</option>
								</select>
							</div>
							<div class="form-group">
								<label>Type POI</label>
								<select name="poiType" class="form-control">
									<option value="0">Sélectionner</option>
									<option value="geo" <?php echo (($mod) && ($poi[0]['poiType']=='geo'))?'selected':''; ?>>Geo</option>
									<option value="vision" <?php echo (($mod) && ($poi[0]['poiType']=='vision'))?'selected':''; ?>>Vision</option>
								</select>
							</div>
							<div class="form-group">
								<label>iconID</label>
								<select name="iconID" class="form-control">
									<option value="0">Sélectionner</option>
									<?php foreach($rawIcons as $icon){ ?>
									<option value="<?php echo $icon['id']; ?>" <?php echo (($mod) && ($poi[0]['iconID']==$icon['id']))?'selected':''; ?>><?php echo $icon['url']; ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="checkbox">
								<label for="doNotIndex"><input type="checkbox" name="doNotIndex" id="doNotIndex" <?php echo (($mod) && ($poi[0]['doNotIndex']==1))?'checked':''; ?>>Do not index</label>
							</div>
							<div class="checkbox">
								<label for="showBiwOnClick"><input type="checkbox" name="showBiwOnClick" id="showBiwOnClick" <?php echo (($mod) && ($poi[0]['showBiwOnClick']==1))?'checked':''; ?>>Show Biw On Click</label>
							</div>
							<div class="checkbox">
								<label for="showSmallBiw"><input type="checkbox" name="showSmallBiw" id="showSmallBiw" <?php echo (($mod) && ($poi[0]['showSmallBiw']==1))?'checked':''; ?>>show Small Biw</label>
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