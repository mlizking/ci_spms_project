<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo site_url('home_controller') ?>">SPMS</a>
  <!-- <p><?php //echo anchor('Home_controller', 'SPMS', 'class="navbar-brand"'); ?></p> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Story</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Photographer</a>
      </li>
    </ul>
    <div class="form-inline my-2 my-lg-0">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Sign-up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('userlogin_controller') ?>">sign-in</a>
        </li>
      </ul>
    </div>
  </div>
</nav>