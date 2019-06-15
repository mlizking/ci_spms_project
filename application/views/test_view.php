<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layouts/script_head'); ?>
    <title>Hello !!</title>
</head>
<body>
    <?php $this->load->view('layouts/navbar'); ?>
  
    CONTENT!! 

    <img src="<?php echo base_url(); ?>uploads/<?php echo $path ?>" class="img-fluid" alt="Responsive image">

    <?php $this->load->view('layouts/footer'); ?>
    <?php $this->load->view('layouts/script_body'); ?>
</body>
</html>