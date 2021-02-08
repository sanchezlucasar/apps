<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()."assets"; ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()."assets"; ?>/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()."assets"; ?>/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."assets"; ?>/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()."assets"; ?>/plugins/iCheck/square/blue.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

   <form action="<?php echo base_url();?>index.php/user/registronuevo" method="POST">
                
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
                   <?php if ($rol->nombre!='superadmin'): ?> 
                  <?php  echo "<option value='$rol->id'>".$rol->nombre."</option>"; ?>
                <?php endif; ?>
                  <?php endforeach;?>

                  </select> 
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-success btn-flat">Save</button>
                </div>
              </form>

    
      

    <a href="<?php echo base_url(); ?>" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()."assets"; ?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()."assets"; ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url()."assets"; ?>/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
