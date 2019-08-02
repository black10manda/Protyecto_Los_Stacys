 
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Reportes
        <small>Mensajes</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre Cliente</th>
                                    <th>Correo</th>
                                    <th>Asunto</th>
                                    <th>Mensaje</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($mensajes)): ?>
                                    <?php foreach($mensajes as $mensaje):?>
                                        <tr>
                                            <td><?php echo $mensaje->id;?></td>
                                            <td><?php echo $mensaje->nombre;?></td>
                                            <td><?php echo $mensaje->correo;?></td>
                                            <td><?php echo $mensaje->asunto;?></td>
                                            <td><?php echo $mensaje->mensaje;?></td>
                                            
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
