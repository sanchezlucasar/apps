  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users
        <small>Edit User</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box box-solid">
        
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              
              <form action="<?php echo base_url();?>index.php/user/update" method="POST">
                
                <input type="hidden" class="form-group" name="idUse" value="<?php echo($users->id); ?>" >
                

                <div class="form-group">
                  <label >Name</label>
                  <input type="text" class="form-control" name="name" value="<?php echo $users->nombre;?>"">
                </div>

                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" class="form-control" name="lastname" value="<?php echo $users->apellidos; ?>">
                </div>

                <div class="form-group">
                  <label>Telephone</label>
                  <input type="text" class="form-control" name="telephone" value="<?php echo $users->telefono; ?>">
                </div>

                <div class="form-group">
                  <label>E mail </label>
                  <input type="text" class="form-control" name="email" value="<?php echo $users->email; ?>">
                </div>

                <div class="form-group">
                  <label >Username</label>
                  <input type="text" class="form-control" name="username" value="<?php echo $users->username; ?>">
                </div>

                  <div class="form-group">
                  <label> User Rol </label>
                  <select  name='rol' class="form-control" >   
                  <option value='---'>---</option>       
                  <?php  foreach ($roles as $rol):?>
                  <?php  echo "<option value='$rol->id'>".$rol->nombre."</option>"; ?>
                  <?php endforeach;?>

                  </select> 
                </div>


                <div class="form-group">
                  <button type="submit" class="btn btn-success btn-flat">Update</button>
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