<div class="content-wrapper">
	<section class="content">
		<div class="container-fluid">
			<div class="card card-default">
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
						</div>
						<div class="card-footer text-muted">
							Footer
						</div>
					</div>
				</div>
			</div>
		</div>
</div>

<script src="<?=base_url()?>application/views/js/randomNumber.js" type="text/javascript" charset="utf-8"></script>
<script src="<?=base_url()?>application/views/js/calculoadulto.js" type="text/javascript" charset="utf-8"></script>
