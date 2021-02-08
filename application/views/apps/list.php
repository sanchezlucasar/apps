  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Applications
        <small>List</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">App List</h3>

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
             <?php if (($this->session->userdata('rol')!='Cliente')): ?>
            <div class="col-md-12">
              <a href="<?php echo base_url()?>index.php/app/add" class="btn btn-primary btn-flat"> <span class= "fa fa-plus"> Add App </span></a>
            </div>
          <?php endif; ?>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-12">
              <table id="example1" class=" table table-bordered btn-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Cod</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Developer</td>
                    <th>Categoría</th>
                    <th>Opción</th>
                    

                  </tr>
                </thead>
                <tbody>
                  <?php if (!empty($apps)): ?>
                    

                      <?php foreach ( $apps as $app ) : ?>

                      <?php $dataproducto = $app->id."*".$app->codigo."*".$app->nombre."*".$app->descripcion."*".$app->precio."*".$app->categoria."*".$app->usuarios;
                       ?>
                       <form action="" method="POST"></form>
                         <tr> 
                            <?php if ( ($app->usuarios === $this->session->userdata('nombre')) or ($this->session->userdata('rol')==='Cliente')or ($this->session->userdata('rol')==='Super Admin')):  ?>   
                               <td><?php echo $app->id; ?></td>
                               <td><?php echo $app->codigo; ?></td>
                               <td><?php echo $app->nombre; ?></td>
                               <td><?php echo $app->descripcion; ?></td>
                               <td><?php echo $app->precio; ?></td>
                               <td><?php echo $app->usuarios; ?></td>
                               <td><?php echo $app->categoria; ?></td>
                              
                               <td>

                                <div class='btn-group'>                 
                                   <button type="button" class="btn btn-info btn-view-app" data-toggle="modal" data-target="#modal-default" value="<?php echo $dataproducto; ?>">
                                        <span class="fa fa-search"></span>
                                   </button>

                                   <?php if ($this->session->userdata('rol')==='Super Admin' or
                                             $this->session->userdata('rol')==='Developer'):  ?>

                                   <a href="<?php echo base_url();?>index.php/app/edit/<?php echo  $app->id; ?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                   <a href="<?php echo base_url();?>index.php/app/delete/<?php echo $app->id; ?>"  class="btn btn-danger btn-removes"><span class="fa fa-remove"></span></a>
                                   
                                   <?php endif; ?>

                              <?php endif; ?>
                               
                              </div>
                             </td>
                            
                      <?php endforeach; ?><td><input type="checkbox" name="" value="check"></td>
                    </tr>

                  <?php endif; ?>
                  

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

