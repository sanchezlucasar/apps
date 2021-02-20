
  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree"><br>
        <li class="header"><a href="../../index.html">MAIN NAVIGATION <?php echo " | ".$this->session->userdata('rol'); ?></a></li>
        <li >
          <a href="<?php echo base_url();?>index.php/categories">
            <i class="fa fa-th"></i>
            <span >Categories</span>
          </a>
          
        </li>
        <li >
          <a href="<?php echo base_url();?>index.php/app">
            <i class="fa fa-laptop"></i>
            <span >Apps</span>
          </a>
        </li>
        <?php if( $this->session->userdata('Super admin') ): ?>

        <li>
          <a href="<?php echo base_url();?>index.php/user">
            <i class="fa fa-user"></i>
            <span>Usuarios</span>
          </a> 
        </li>
      <?php endif; ?>

        <li>
          <a href="<?php echo base_url();?>index.php/ventas">
            <i class="fa fa-user"></i>
            <span>Compras</span>
          </a> 
        </li>
          
   
        
          

        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

