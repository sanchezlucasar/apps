 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        App
        <small>Edit App</small>
      </h1>
      
    </section>

    <!-- Main content -->
  <section class="content">

      <!-- Default box -->
      <div class="box box-solid">
        
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              
              <form action="<?php echo base_url();?>index.php/app/update" method="POST">
               

               <div class="form-group">
                  <label>Id</label>
                  <input  readonly  type="text" class="form-control" value="<?php echo($apps->id); ?>" name="id" id="id">
                </div>

                <div class="form-group">
                  <label>Nombre</label>
                  <input  disabled type="text" class="form-control" value="<?php echo($apps->name); ?>" name="name" id="name">
                </div>
               
                <div class="form-group">
                  <label>Description</label>
                  <input  type="text"  name="description" class="form-control" value="<?php echo($apps->description); ?>">
                </div>
        
                <div class="form-group">
                  <label>Precio</label>
                  <input value="<?php echo($apps->price);?>" type="text" class="form-control" name="price" >
                </div>

                <div class="form-group">
                   <label>Categoria</label>
                  <input readonly value="<?php echo($apps->categorie); ?>" type="text" class="form-control" name="category" id="category">
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