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
							FORMULARIO Paciente
						</div>
						<div class="card-body">
							<?php if ($this->session->flashdata("error")) : ?>
								<div class="alert alert-danger alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
								</div>
							<?php endif; ?>
							<form action=" <?php echo base_url(); ?>pacientes/storenino" method="post">
								<div class="mb-3">
									<label for="" class="form-label">NOMBRE</label>
									<input onkeypress="return sololetras(event)" placeholder="Ingrese nombre del paciente" type="text" id="nombre" name="nombre" class="form-control" required>
									<?php echo form_error("nombre", "<span class='help-block'>", "</span>"); ?>
								</div>

								<div class="mb-3">
									<label for="" class="form-label">EDAD (1-15)</label>
									<input min="1" max="15" placeholder="Ingrese edad del paciente" type="number" id="edad" name="edad" class="form-control" required>
									<?php echo form_error("edad", "<span class='help-block'>", "</span>"); ?>
								</div>

								<div class="mb-3">
									<label for="" class="form-label">NUM-HISTORIA-CLINICA</label>
									<input readonly type="number" name="num_historiaclinica" id="num_historiaclinica" maxlength="16" size="16" class="form-control">
								</div>

								<div class="mb-3">
									<label for="" class="form-label">RELACION-PESO-ESTATURA (1-4)</label>
									<input min="1" max="4" placeholder="Ingrese RPE del paciente" type="number" id="relacion_pesoestatura" name="relacion_pesoestatura" class="form-control" required>
									<?php echo form_error("relacion_pesoestatura", "<span class='help-block'>", "</span>"); ?>
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
								const form = document.querySelector('form');
								const edadInput = form.querySelector('#edad');
								const pesoEstaturaInput = form.querySelector('#relacion_pesoestatura');
								const prioridadInput = form.querySelector('#prioridad');
								const riesgoInput = form.querySelector('#riesgo');

								function calcularPrioridad(edad, pesoEstatura) {
									if (edad >= 1 && edad <= 5) {
										return pesoEstatura + 3;
									} else if (edad >= 6 && edad <= 12) {
										return pesoEstatura + 2;
									} else {
										return pesoEstatura + 1;
									}
								}

								function calcularRiesgo(edad, prioridad) {
									return (edad * prioridad) / 100;
								}

								function actualizarValores() {
									const edad = parseInt(edadInput.value);
									const pesoEstatura = parseInt(pesoEstaturaInput.value);
									const prioridad = calcularPrioridad(edad, pesoEstatura);
									const riesgo = calcularRiesgo(edad, prioridad);

									prioridadInput.value = prioridad.toFixed(2);
									riesgoInput.value = riesgo.toFixed(2);
								}

								edadInput.addEventListener('input', actualizarValores);
								pesoEstaturaInput.addEventListener('input', actualizarValores);
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

<script>
	function randomNumber(len) {
		var randomNumber;
		var n = '';

		for (var count = 0; count < len; count++) {
			randomNumber = Math.floor(Math.random() * 10);
			n += randomNumber.toString();
		}
		return n;
	}

	document.getElementById("num_historiaclinica").value = randomNumber(9);
</script>
