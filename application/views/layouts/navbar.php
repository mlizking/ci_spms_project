<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo site_url('home_controller') ?>">
    <img src="<?php echo base_url(); ?>images/logo/logospms.ico" width="30" height="30" alt="">
  </a>
  <!-- <p><?php //echo anchor('Home_controller', 'SPMS', 'class="navbar-brand"'); ?></p> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <!-- <a class="nav-link" href="<?php //echo site_url('story_controller') ?>">Story</a> -->
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="<?php //echo site_url('photographer_controller') ?>">Photographer</a> -->
      </li>
    </ul>
    
    <div class="dropdown-divider"></div>
    <ul class="navbar-nav mr-auto">
      <li class="navbar-brand">
        <i class="fas fa-search"></i>
      </li>
      <li class="nav-item">
        <?php $this->load->view('layouts/searchbar_view'); ?>
      </li>
    </ul>
    <div class="dropdown-divider"></div>

    <div class="form-inline my-2 my-lg-0">
      
      <?php if($this->session->userdata('email') != '')
      { ?>

      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('profile_controller') ?>"><?php echo $this->session->userdata('email') ?></a>
        </li>

        <li class="nav-item">
          <a class="btn btn-outline-success" href="<?php echo site_url('upload_controller') ?>">อัพโหลดรูปภาพ</a>
        </li>

        <?php if($this->session->userdata('statusid') == '1')
        { ?>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Admin
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin_controller') ?>">Dashboard</a>
            <a class="dropdown-item" href="<?php echo site_url('admin_controller/user_manage') ?>">User Manage</a>
            <a class="dropdown-item" href="<?php echo site_url('admin_controller/photo_manage') ?>">Photo Manage</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">#####</a>
          </div>
        </li>

        <?php }elseif($this->session->userdata('statusid') == '2')
        { ?>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Manage
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo site_url('photographer_controller/manage_photo') ?>">Photo Manage</a>
            <a class="dropdown-item" href="<?php echo site_url('upload_controller') ?>">Upload</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">#####</a>
          </div>
        </li>

        <?php } ?>  

        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('userlogin_controller/logout') ?>">ออกจากระบบ</a>
        </li>
      </ul>

      <?php }else{ ?>

      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('userregister_controller') ?>">สมัครสมาชิก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('userlogin_controller') ?>">เข้าสู่ระบบ</a>
        </li>
      </ul>

      <?php } ?>

    </div>
  </div>
</nav>


