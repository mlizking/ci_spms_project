<?php foreach ($random_data->result() as $row) {
      echo $row->p_filename;
    } ?>

<div class="bd-example mb-3 mt-3">
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner text-center">
      
      <?php for($i=0;$i<3;$i++){ 
        if($i == 0){ ?>
          <div class="carousel-item active">
            <img src="<?php echo base_url(); ?>uploads/gg2<?php echo $i ?>.jpg" alt="Responsive image" class="centered-and-cropped" width=100% height="550">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>
        <?php }else{ ?>
          <div class="carousel-item">
            <img src="<?php echo base_url(); ?>uploads/gg2<?php echo $i ?>.jpg" alt="Responsive image" class="centered-and-cropped" width=100% height="550">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>  
        <?php }
      } ?>

    </div>

    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<style>
  .centered-and-cropped { 
    object-fit: cover 
  }
</style>