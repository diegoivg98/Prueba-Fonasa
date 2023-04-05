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
									<input onkeypress="return sololetras(event)" placeholder="Ingrese nombre del paciente" type="text" id="nombre" name="nombre" class="form-control">
									<?php echo form_error("nombre", "<span class='help-block'>", "</span>"); ?>
								</div>

								<div class="mb-3">
									<label for="" class="form-label">EDAD (16-40)</label>
									<input min="16" max="40" placeholder="Ingrese edad del paciente" type="number" id="edad" name="edad" class="form-control">
									<?php echo form_error("edad", "<span class='help-block'>", "</span>"); ?>
								</div>

								<div class="mb-3">
									<label for="" class="form-label">NUMERO HISTORIA CLINICA</label>
									<input readonly name="num_historiaclinica" id="num_historiaclinica" maxlength="16" size="16" class="form-control">
								</div>

								<div class="mb-3">
									<label for="Pefil">¿ES FUMADOR?:</label>
									<select onchange="carg(this)" ; onselect="calpriori()" name="fumador" id="fumador" class="form-control">
										<option value="1">SI</option>
										<option value="0">NO</option>
									</select>
								</div>

								<div class="mb-3">
									<label for="" class="form-label">AÑOS FUMADOR</label>
									<input oninput="calpriori(),calriesgo()" min="0" max="99" placeholder="Ingrese cuantos años lleva fumando" type="number" id="años_fumador" name="años_fumador" class="form-control">
									<?php echo form_error("años_fumador", "<span class='help-block'>", "</span>"); ?>
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
