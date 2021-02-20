  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        CATEGORIES
        <small>New Category</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box box-solid">
        
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <form action="<?php echo base_url();?>index.php/categories/store" method="POST">
               
                <div class="form-group <?php echo !empty(form_error("name"))?'has-error':'' ?>">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="name" id="name" value="<?php echo set_value("name"); ?>">
                  <?php echo form_error("name","<span class='help-block' >","</span>") ?>
                </div> 

                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" class="form-control" name="description" id="description">
                </div>
                <div class="form-group">
                  <label for="imagen">Imagen</label>
                  <input type="file" name="foto_categoria">
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