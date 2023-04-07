<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">

				</div><!-- /.col -->
				<div class="col-sm-6">
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- SELECT2 EXAMPLE -->
			<div class="card card-default">

				<!-- /.card-header -->
				<!-- /.card-body -->
				<br>
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							FORMULARIO PACIENTE ADULTO
						</div>
						<div class="card-body">
							<?php if ($this->session->flashdata("error")) : ?>
								<div class="alert alert-danger alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
								</div>
							<?php endif; ?>
							<form action=" <?php echo base_url(); ?>pacientes/storeanciano" method="post">
								<div class="mb-3">
									<label for="" class="form-label">NOMBRE</label>
									<input onkeypress="return sololetras(event)" placeholder="Ingrese nombre del paciente" type="text" id="nombre" name="nombre" class="form-control">
									<?php echo form_error("nombre", "<span class='help-block'>", "</span>"); ?>
								</div>

								<div class="mb-3">
									<label for="" class="form-label">EDAD (41-100)</label>
									<input min="41" max="100" placeholder="Ingrese edad del paciente" type="number" id="edad" name="edad" class="form-control">
									<?php echo form_error("edad", "<span class='help-block'>", "</span>"); ?>
								</div>

								<div class="mb-3">
									<label for="">NUM HISTORIA CLINICA</label>
									<input readonly name="num_historiaclinica" id="num_historiaclinica" maxlength="16" size="16" class="form-control">
								</div>

								<div class="mb-3">
									<label for="">¿TIENE DIETA?:</label>
									<select name="tiene_dieta" id="tiene_dieta" class="form-control">
										<option value="si">SI</option>
										<option value="no">NO</option>
									</select>
								</div>

								<div class="mb-3">
									<label for="">PRIORIDAD</label>
									<input readonly type="number" name="prioridad" id="prioridad" class="form-control">
									<?php echo form_error("prioridad", "<span class='help-block'>", "</span>"); ?>
								</div>

								<div class="mb-3">
									<label for="">RIESGO</label>
									<input readonly type="number" name="riesgo" id="riesgo" class="form-control">
									<?php echo form_error("riesgo", "<span class='help-block'>", "</span>"); ?>
								</div>

								<button type="submit" class="btn btn-primary">INGRESAR</button>
							</form>
							<script>
								const edadInput = document.getElementById('edad');
								const dietaInput = document.getElementById('tiene_dieta');
								const prioridadInput = document.getElementById('prioridad');
								const riesgoInput = document.getElementById('riesgo');

								function calcularPrioridad() {
									const edad = parseInt(edadInput.value);
									const tieneDieta = dietaInput.value === 'si';

									if (tieneDieta) {
										if (edad < 60 || edad > 100) {
											alert('Si tiene dieta, la edad debe estar entre 60 y 100 años');
											prioridadInput.value = '';
											riesgoInput.value = '';
											document.getElementById('submitBtn').disabled = true;
											return;
										}
									}

									let prioridad = 0;
									if (tieneDieta && edad >= 60 && edad <= 100) {
										prioridad = (edad / 20) + 4;
									} else {
										prioridad = (edad / 30) + 3;
									}

									// redondea el valor de prioridad a 2 decimales
									prioridadInput.value = prioridad.toFixed(2);

									calcularRiesgo();
								}



								function calcularRiesgo() {
									const edad = parseInt(edadInput.value);
									const prioridad = parseInt(prioridadInput.value);

									riesgoInput.value = (edad * prioridad) / 100 + 5.3;
								}

								edadInput.addEventListener('change', calcularPrioridad);
								dietaInput.addEventListener('change', calcularPrioridad);
							</script>

						</div>
						<div class="card-footer text-muted">
							Footer
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.card -->
</div>
<!-- /.content-wrapper -->

<script src="<?=base_url()?>application/views/js/randomNumber.js" type="text/javascript" charset="utf-8"></script>
