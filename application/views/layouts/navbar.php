<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo site_url('home_controller') ?>">SPMS</a>
  <!-- <p><?php //echo anchor('Home_controller', 'SPMS', 'class="navbar-brand"'); ?></p> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('userlogin_controller/kk') ?>">Story</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('userlogin_controller/kk') ?>">Photographer</a>
      </li>
      <?php if($_SESSION['statusid'] == '1')
      { ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin_controller') ?>">Dashboard</a>
      </li>
      <?php } ?>
    </ul>
    <div class="form-inline my-2 my-lg-0">

      <?php if($this->session->userdata('email') != '')
      { ?>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#"><?php echo $this->session->userdata('email') ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('userlogin_controller/logout') ?>">Logout</a>
        </li>
      </ul>
      <?php }else{ ?>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('userlogin_controller') ?>">Login</a>
        </li>
      </ul>
      <?php } ?>
    </div>
  </div>
</nav>