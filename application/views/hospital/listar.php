<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5 class="mb-0 text-gray-800">Listado Hospitales
                        <a href="<?php echo base_url(); ?>Hospitales/add" type="button" class="btn btn-primary">
                            <span class="fa fa-plus"></span> Agregar Hospital
                        </a>
                    </h5>
                </div>
                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </div>
    
    <section class="content">
        <div class="container-fluid">
            <div class="card card-default">
                <br>
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="mydatatable">
                            <thead>
                                <tr style="background-color: #f41e3c">
                                    <th scope="col">#</th>
                                    <th scope="col">NOMBRE</th>
                                    <th scope="col">DIRECCION</th>
                                    <th scope="col">OPCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($hospital)) : ?>
                                <?php foreach ($hospital as $row) : ?>
                                <tr>
                                    <td><?php echo $row->id_hospital; ?></td>
                                    <td><?php echo $row->nom_hospital; ?></td>
                                    <td><?php echo $row->direccion; ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href=" <?php echo base_url() ?>Hospitales/edit/<?php echo $row->id_hospital; ?>"
                                                class="btn btn-warning" title="EDITAR">
                                                <span class="fa fa-edit">EDITAR</span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
