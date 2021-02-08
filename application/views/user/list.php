<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        USERS
        <small>List</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Users List</h3>

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
              <a href="<?php echo base_url()?>index.php/user/add" class="btn btn-primary btn-flat"> <span class= "fa fa-plus"> Add User </span></a>
            </div>
          </div>
          <hr>
          
          <div class="row">
            <div class="col-md-12">
              <table id="example1" class=" table table-bordered btn-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Telephone</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Rol</th>
                    <th>Options</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php if (!empty($users)): ?>
                      <?php foreach ($users as $user) : ?>
                         <tr>
                             <td><?php echo $user->id; ?></td>
                             <td><?php echo $user->nombre; ?></td>
                             <td><?php echo $user->apellidos; ?></td>
                             <td><?php echo $user->telefono; ?></td>
                             <td><?php echo $user->email; ?></td>
                             <td><?php echo $user->username; ?></td>
                             <td><?php echo $user->rol; ?></td>
                             <td>
                                <div class="btn-group">
                                   <button type="button" class="btn btn-info btn-user" data-toggle="modal" data-target="#modal-default" value="<?php echo $user->id; ?>">
                                        <span class="fa fa-search"></span>
                                   </button>
                                   <a href="<?php echo base_url();?>index.php/user/edit/<?php echo  $user->id; ?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                   <a href="<?php echo base_url();?>index.php/user/delete/<?php echo $user->id; ?>"  class="btn btn-danger btn-removes"><span class="fa fa-remove"></span></a>
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
                <h4 class="modal-title">Information User</h4>
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

