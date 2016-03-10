<?php include '../layout/header.php'; ?>
<?php include '../include/function.php';
$mod=false;
if(isset($_GET)){
	if($_GET['action'] == 'modifier'){
		$icon = getIconById($_GET['id']);
		$mod=true;
	}
}?>
	<section class="content">
		<div class="row row-centered">
			<div class="col-xs-12 col-sm-8 col-centered">
				<div class="box box-primary">
					<div class="box-header with-border">
		            	<h3 class="box-title">Ajouter une icône</h3>
		            </div>
					<form method="post" action="/admin/include/icon.php" role="form">
						<div class="box-body">
							<input type="hidden" value="<?php echo (isset($_GET['action']))?$_GET['action']:''; ?>" name="action">
							<input type="hidden" value="<?php echo (isset($_GET['id']))?$_GET['id']:''; ?>" name="id">
							<?php if(isset($_GET['redirect'])){ ?>
							<input type="hidden" value="<?php echo $_GET['redirect']; ?>" name="redirect">
							<?php } ?>
							<div class="form-group">
								<label>URL</label for="url"><input type="text" value="<?php echo ($mod)?$icon[0]['url']:''; ?>" placeholder="URL" class="form-control" name="url" id="url">
							</div>
							<div class="form-group">
								<label>type</label for"type"><input type="number" value="<?php echo ($mod)?$icon[0]['type']:''; ?>" placeholder="Type" class="form-control" name="type" id="type">
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