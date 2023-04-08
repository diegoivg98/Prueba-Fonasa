<div class="container-fluid">
  <div class="row mb-3">
    <div class="col-md-8">
      <h2 class="text-primary">Listado Paciente-Niño/a</h2>
    </div>
    <div class="col-md-4 text-end">
      <a href="<?php echo base_url(); ?>pacientes/addnino" class="btn btn-primary">
        <i class="fa fa-plus me-2"></i> Agregar Paciente
      </a>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover" id="mydatatable">
          <thead>
            <tr class="bg-danger text-white">
              <th>NOMBRE</th>
              <th>EDAD</th>
              <th>NUMERO-HISTORIA-CLINICA</th>
              <th>PRIORIDAD</th>
              <th>RIESGO</th>
            </tr>
          </thead>
          <tbody>
            <?php if(!empty($query)): ?>
              <?php foreach($query as $row): ?>
                <tr>
                  <td><?php echo $row->nombre; ?></td>
                  <td><?php echo $row->edad; ?></td>
                  <td><?php echo $row->num_historiaclinica; ?></td>
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
