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
							FORMULARIO PACIENTE JOVEN
						</div>
						<div class="card-body">
							<?php if ($this->session->flashdata("error")) : ?>
								<div class="alert alert-danger alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
								</div>
							<?php endif; ?>
							<form action=" <?php echo base_url(); ?>pacientes/storejoven" method="post">

								<div class="mb-3">
									<label for="" class="form-label">NOMBRE</label>
									<input required onkeypress="return sololetras(event)" placeholder="Ingrese nombre del paciente" type="text" id="nombre" name="nombre" class="form-control">
									<?php echo form_error("nombre", "<span class='help-block'>", "</span>"); ?>
								</div>

								<div class="mb-3">
									<label for="" class="form-label">EDAD (16-40)</label>
									<input min="16" max="40" placeholder="Ingrese edad del paciente" type="number" id="edad" name="edad" class="form-control" required>
									<?php echo form_error("edad", "<span class='help-block'>", "</span>"); ?>
								</div>

								<div class="mb-3">
									<label for="" class="form-label">NUMERO HISTORIA CLINICA</label>
									<input readonly name="num_historiaclinica" id="num_historiaclinica" maxlength="16" size="16" class="form-control">
								</div>

								<div class="mb-3">
									<label for="Pefil">¿ES FUMADOR?:</label>
									<select name="fumador" id="fumador" class="form-control">
										<option value="si">SI</option>
										<option value="no">NO</option>
									</select>
								</div>

								<div class="mb-3">
									<label for="" class="form-label">AÑOS FUMADOR</label>
									<input min="1" placeholder="Ingrese cuantos años lleva fumando" type="number" id="años_fumador" name="años_fumador" class="form-control">
									<?php echo form_error("años_fumador", "<span class='help-block'>", "</span>"); ?>
								</div>

								<div class="mb-3">
									<label for="">PRIORIDAD</label>
									<input readonly type="number" name="prioridad" id="prioridad" class="form-control" required>
									<?php echo form_error("prioridad", "<span class='help-block'>", "</span>"); ?>
								</div>

								<div class="mb-3">
									<label for="">RIESGO</label>
									<input readonly type="number" name="riesgo" id="riesgo" class="form-control" required>
									<?php echo form_error("riesgo", "<span class='help-block'>", "</span>"); ?>
								</div>

								<button type="submit" class="btn btn-primary">INGRESAR</button>
							</form>
							<script>
								const edadInput = document.getElementById("edad");
								const aniosFumadorInput = document.getElementById("años_fumador");
								const fumadorInput = document.getElementById("fumador");
								const prioridadInput = document.getElementById("prioridad");
								const riesgoInput = document.getElementById("riesgo");

								// Función que se ejecuta cuando se cambia algún campo
								function calcular() {
									const edad = parseInt(edadInput.value);
									const aniosFumador = parseInt(aniosFumadorInput.value);
									const esFumador = fumadorInput.value === "si";

									let prioridad;
									if (esFumador) {
										prioridad = aniosFumador / 4 + 2;
									} else {
										prioridadInput.value = 0;
										prioridad = 2;
									}
									prioridadInput.value = prioridad;

									const riesgo = (edad * prioridad) / 100;
									riesgoInput.value = riesgo;
								}

								// Escuchar los eventos de cambio en los campos
								edadInput.addEventListener("change", calcular);
								aniosFumadorInput.addEventListener("change", calcular);
								fumadorInput.addEventListener("change", calcular);
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

<script>
	fumadorInput.addEventListener('change', () => {
		if (fumadorInput.value === 'no') {
			aniosFumadorInput.value = 0;
			aniosFumadorInput.setAttribute('readonly', 'readonly');
		} else {
			aniosFumadorInput.value = '';
			aniosFumadorInput.removeAttribute('readonly');
		}
		calcular();
	});
</script>
