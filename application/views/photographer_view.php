<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layouts/script_head'); ?>
    <title>Hello !!</title>

    
    


</head>
<body>
    <?php $this->load->view('layouts/navbar'); ?>
    
    

  












    <?php $pic = 'gg32.jpg'; ?>
    
    <div class="img-container">
    <img src="<?php echo base_url(); ?>uploads/<?php echo $pic ?>" class="img-fluid card-img-top" alt="Responsive image">
      <div class="overlay" data-toggle="modal" data-target="#imgModalCenter">
        <span><h1>GG</h1></span>
      </div>
    </div>


    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="imgModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
      <img src="<?php echo base_url(); ?>uploads/<?php echo $pic ?>" class="img-fluid card-img-top" alt="Responsive image">
      </div>
      <div class="modal-footer">
        <a href="<?php echo site_url('photographer_controller/picdownload/'.$pic) ?>"><button type="button" class="btn btn-primary">Download</button></a>
      </div>
    </div>
  </div>
</div>


    <?php $this->load->view('layouts/footer'); ?>
    <?php $this->load->view('layouts/script_body'); ?>
</body>
</html>


<style>
.img-container{
  position:relative;
  display:inline-block;
}
.img-container .overlay{
  position:absolute;
  top:0;
  left:0;
  width:100%;
  height:100%;
  background:rgb(0,0,0);
  opacity:0;
  transition:opacity 500ms ease-in-out;
}
.img-container:hover .overlay{
  opacity:0.5;
}
.overlay span{
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  color:#fff;
}
</style>