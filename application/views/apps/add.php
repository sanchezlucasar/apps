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
              <form action="<?php echo base_url();?>index.php/app/store" method="POST">
                
               
                <div class="form-group">
                  <label for="name">Name</label>
                  <input  requiredtype="text" class="form-control" name="name" id="name">
                </div>
               
                <div class="form-group">
                  <label required for="description">Description</label>
                  <input type="text" class="form-control" name="description" id="description">
                </div>
        
                <div class="form-group">
                  <label for="description">precio</label>
                  <input required type="text" class="form-control" name="price" id="price">
                </div>

                <input type="hidden" name='id' value="<?php echo $this->session->userdata('id'); ?>">

                <div class="form-group">
                  <label for="description">Category</label>
                  <select required name='categoria' class="form-control" >          
                  <?php  foreach ($categorias as $categoria):?>
                  <?php  echo "<option value='$categoria->id'>".$categoria->nombre."</option>"; ?>
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