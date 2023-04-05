<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<section class="content">
		<div class="container-fluid">
			<div class="card card-default">
				<br>
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							AGREGAR HOSPITAL
						</div>
						<div class="card-body">
							<form action=" <?php echo base_url(); ?>Hospitales/store" method="post">
								<div class="mb-3">
									<label for="" class="form-label">NOMBRE</label>
									<input placeholder="Ingrese el nombre del hospital" type="text" id="nom_hospital" name="nom_hospital" class="form-control">
									<?php echo form_error("nom_hospital", "<span class='help-block'>", "</span>"); ?>
								</div>

								<div class="mb-3">
									<label for="" class="form-label">DIRECCION</label>
									<input placeholder="Ingrese la direccion del hospital" type="text" id="direccion" name="direccion" class="form-control">
									<?php echo form_error("direccion", "<span class='help-block'>", "</span>"); ?>
								</div>
								<button type="submit" class="btn btn-primary">INGRESAR</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
