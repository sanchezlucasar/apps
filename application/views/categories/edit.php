  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        CATEGORIES
        <small>Edit Category</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box box-solid">
        
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <form action="<?php echo base_url();?>index.php/categories/update" method="POST">
                <input type="hidden" id="idCategory" name="idCategory" value="<?php echo($categoria->id); ?>" >

                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="name" id="name" value="<?php echo($categoria->nombre); ?>" >
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" class="form-control" name="description" id="description" value="<?php echo $categoria->descripcion; ?>">
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