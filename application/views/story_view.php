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
        <div class="card text-right">
          <img src="<?php echo base_url(); ?>uploads/gg14.jpg" class="card-img-top" alt="...">
          <blockquote class="blockquote mb-0 mt-3 mr-3">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer class="blockquote-footer">
              <small class="text-muted">
                Someone famous in <cite title="Source Title">Source Title</cite>
              </small>
            </footer>
          </blockquote>
        </div>
        <div class="card text-right">
          <img src="<?php echo base_url(); ?>uploads/SKEE8721.jpg" class="card-img-top" alt="...">
          <blockquote class="blockquote mb-0 mt-3 mr-3">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer class="blockquote-footer">
              <small class="text-muted">
                Someone famous in <cite title="Source Title">Source Title</cite>
              </small>
            </footer>
          </blockquote>
        </div>
        <div class="card text-right">
          <img src="<?php echo base_url(); ?>uploads/SKEE7693.jpg" class="card-img-top" alt="...">
          <blockquote class="blockquote mb-0 mt-3 mr-3">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer class="blockquote-footer">
              <small class="text-muted">
                Someone famous in <cite title="Source Title">Source Title</cite>
              </small>
            </footer>
          </blockquote>
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