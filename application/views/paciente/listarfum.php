<div class="container-fluid">
	<div class="row mb-3">
		<div class="col-md-8">
			<h2 class="text-primary">Listado Paciente-Fumador</h2>
		</div>
	</div>

	<div class="card">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered table-hover table-space" id="mydatatable">
					<thead>
						<tr class="bg-danger text-white">
							<th scope="col">NOMBRE</th>
							<th scope="col">EDAD</th>
							<th scope="col">NHC</th>
							<th scope="col">AÑOS FUMANDO</th>
							<th scope="col">PRIORIDAD</th>
							<th scope="col">RIESGO</th>
						</tr>
					</thead>
					<tbody>
						<?php if (!empty($query5)) : ?>
							<?php foreach ($query5 as $row) : ?>
								<tr>
									<td><?php echo $row->nombre; ?></td>
									<td><?php echo $row->edad; ?></td>
									<td><?php echo $row->num_historiaclinica; ?></td>
									<td><?php echo $row->años_fumador; ?></td>
									<td><?php echo $row->prioridad; ?></td>
									<td><?php echo $row->riesgo; ?></td>
								</tr>
							<?php endforeach; ?>
						<?php endif; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
