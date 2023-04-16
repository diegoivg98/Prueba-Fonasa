<div class="container-fluid">
	<div class="row mb-3">
		<div class="col-md-8">
			<h2 class="text-primary">Listado Paciente-Mas-Anciano</h2>
		</div>
	</div>

	<div class="card">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered table-hover table-space">
					<thead>
						<tr class="bg-danger text-white">
							<th scope="col">NOMBRE</th>
							<th scope="col">EDAD</th>
							<th scope="col">Numero Historia Clinica</th>
						</tr>
					</thead>
					<tbody>
						<?php if (!empty($query6)) : ?>
							<?php foreach ($query6 as $row) : ?>
								<tr>
									<td><?php echo $row->nombre; ?></td>
									<td><?php echo $row->edad; ?></td>
									<td><?php echo $row->num_historiaclinica; ?></td>
								</tr>
							<?php endforeach; ?>
						<?php endif; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
