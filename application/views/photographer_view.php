<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layouts/script_head'); ?>
    <title>Hello !!</title>
</head>
<body>
    <?php $this->load->view('layouts/navbar'); ?>
    <div class="container-fluid">
      <div class="card-deck mt-3">
        <div class="card">
          <div class="card-body">
            <img src="<?php echo base_url(); ?>uploads/gg30.jpg" class="card-img-top mt-5 rounded centered-and-cropped" height=150 alt="Card image cap">
          </div>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <img src="<?php echo base_url(); ?>uploads/gg3.jpg" class="card-img-top mt-5 rounded centered-and-cropped" height=150 alt="Card image cap">
          </div>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <img src="<?php echo base_url(); ?>uploads/gg8.jpg" class="card-img-top mt-5 rounded centered-and-cropped" height=150 alt="Card image cap">
          </div>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <img src="<?php echo base_url(); ?>uploads/gg11.jpg" class="card-img-top mt-5 rounded centered-and-cropped" height=150 alt="Card image cap">
          </div>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
      </div>
    </div>

  














    <?php $this->load->view('layouts/footer'); ?>
    <?php $this->load->view('layouts/script_body'); ?>
</body>
</html>
<style>
  .centered-and-cropped { 
    object-fit: cover 
  }
</style>
