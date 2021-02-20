  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        categorieS
        <small>List</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Lista de categories </h3>

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
              <?php if (($this->session->userdata('rol')!='Cliente')): ?>
                
              <a href="<?php echo base_url()?>index.php/categories/add" class="btn btn-primary btn-flat"> <span class= "fa fa-plus"> Add Categories </span></a>

              <?php endif ?>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-12">
              <table id="example1" class=" table table-bordered btn-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Opción</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (!empty($categories)): ?>
                      <?php foreach ($categories as $categorie) : ?>
                         <tr>
                             <td><?php echo $categorie->id; ?></td>
                             <td><?php echo $categorie->name; ?></td>
                             <td><?php echo $categorie->description; ?></td>
                             <td>
                                <div class="btn-group">
                                   <button type="button" class="btn btn-info btn-view" data-toggle="modal" data-target="#modal-default" value="<?php echo $categorie->id; ?>">
                                        <span class="fa fa-search"></span>
                                   </button>
                                   <?php if ($this->session->userdata('rol')==='Super Admin' or
                                             $this->session->userdata('rol')==='Developer'):  ?>

                                                <a href="<?php echo base_url();?>index.php/categories/edit/<?php echo  $categorie->id; ?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                <a href="<?php echo base_url();?>index.php/categories/delete/<?php echo $categorie->id; ?>"  class="btn btn-danger btn-removes"><span class="fa fa-remove"></span></a>
                                 
                                  <?php endif; ?>
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
                <h4 class="modal-title">Information Category</h4>
              </div>
              <div class="modal-body">
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
               
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

