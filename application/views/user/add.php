<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Aplicattions 
        <small>New App</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box box-solid">
        
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <form action="<?php echo base_url();?>index.php/user/store" method="POST">
                
                <div class="form-group">
                  <label for="name">Name</label>
                  <input  required type="text" class="form-control" name="name">
                </div>
               
                <div class="form-group">
                  <label required for="description">Last Name</label>
                  <input type="text" class="form-control" name="apellido" >
                </div>
        
                <div class="form-group">
                  <label for="description">Telephone</label>
                  <input required type="text" class="form-control" name="telefono">
                </div>

                <div class="form-group">
                  <label for="description">Email</label>
                  <input required type="email" class="form-control" name="email">
                </div>


                <div class="form-group">
                  <label for="description">Username</label>
                  <input required type="text" class="form-control" name="username">
                </div>


                <div class="form-group">
                  <label for="description">Password</label>
                  <input required type="password" class="form-control" name="password">
                </div>

                <div class="form-group">
                  <label for="description">Rol</label>
                  <select required name='rol' class="form-control" >          
                  <?php  foreach ($roles as $rol):?>
                  <?php  echo "<option value='$rol->id'>".$rol->nombre."</option>"; ?>
                  <?php endforeach;?>

                  </select> 
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-success btn-flat">Save</button>
                </div>
              </form>

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