<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Compras
        <small>Lista</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Lista de Compras</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <a href="<?php echo base_url()?>index.php/ventas/add" class="btn btn-primary btn-flat"> <span class= "fa fa-plus"> Add Compra </span></a>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-12">
              <table id="example1" class=" table table-bordered btn-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Fecha</th>
                    <th>Cliente</th>
                    <th>Detalle</th>
                    <th>total</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php if (!empty($ventas)): ?>
                      <?php foreach ($ventas as $venta) : ?>
                         <tr>
                             <td><?php echo $venta->id; ?></td>
                             <td><?php echo $venta->fecha; ?></td>
                             <td><?php echo $venta->nombre_cliente;  ?></td>
                             <td><?php echo $venta->detalle; ?></td>
                             <td><?php echo $venta->total; ?></td>

                            
                      <?php endforeach; ?>
                    </tr>

                  <?php endif; ?>
                  

                </tbody>
              </table>
            </div>
          </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Information App</h4>
              </div>
              <div class="modal-body">
                
              </div>
              <div class="modal-footer">
               
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">
                Close</button>
                <button type="button" class="btn btn-warning pull-left btn-deseo" data-dismiss="modal">
                Add Deseo</button>
                    
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

