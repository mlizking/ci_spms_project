<?php 
    // $i = 0;
    // foreach ($random_data->result() as $row) {
    //   echo $row->p_filename.' i = '.$i.' '; $i++;
    // } 
?>

<div class="bd-example mb-3 mt-3">
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
    </ol>

    <div class="carousel-inner text-center">
      
      <?php $i = 0; foreach ($random_data->result() as $row) {        
        $filename = $row->p_filename;
        $picname = $row->p_name;
        $id = $row->p_id;
        if($i == 0){ ?>

          
          <div class="carousel-item active">
            <div class="img-containerr">
              <img src="<?php echo base_url(); ?>uploads/<?php echo $filename ?>" alt="Responsive image" class="centered-and-cropped" width=100% height="550">
              <div class="overlayy" data-toggle="modal" data-target="#imgModalCenter<?php echo $id ?>"><!-- Trigger Modal -->
                <span><h1>SPMS&copy;</h1></span>
              </div>
            </div>
            <div class="carousel-caption d-none d-md-block">
              <h5><?php echo $picname ?></h5>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>

                      <!-- Modal -->
                      <div class="modal fade" id="imgModalCenter<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header text-center">
                              <h5 class="modal-title"><?php echo $picname ?></h5>
                            </div>
                            <div class="modal-body">
                              <div class="img-container">
                                <img class="img-fluid" src="<?php echo base_url(); ?>uploads/<?php echo $filename ?>" alt="Responsive image">
                                <div class="overlay">
                                  <span><h1>SPMS&copy;</h1></span>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <a href="<?php echo site_url('home_controller/picdownload/'.$filename) ?>"><button type="button" class="btn btn-primary">Download</button></a>
                            </div>
                          </div>
                        </div>
                      </div>

        <?php $i++;}else{ ?>


          <div class="carousel-item">
            <div class="img-containerr">
              <img src="<?php echo base_url(); ?>uploads/<?php echo $filename ?>" alt="Responsive image" class="centered-and-cropped" width=100% height="550">
              <div class="overlayy" data-toggle="modal" data-target="#imgModalCenter<?php echo $id ?>"><!-- Trigger Modal -->
                <span><h1>SPMS&copy;</h1></span>
              </div>
            </div>
            <div class="carousel-caption d-none d-md-block">
              <h5><?php echo $picname ?></h5>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>

                      <!-- Modal -->
                      <div class="modal fade" id="imgModalCenter<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header text-center">
                              <h5 class="modal-title"><?php echo $picname ?></h5>
                            </div>
                            <div class="modal-body">
                              <div class="img-container">
                                <img class="img-fluid" src="<?php echo base_url(); ?>uploads/<?php echo $filename ?>" alt="Responsive image">
                                <div class="overlay">
                                  <span><h1>SPMS&copy;</h1></span>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <a href="<?php echo site_url('home_controller/picdownload/'.$filename) ?>"><button type="button" class="btn btn-primary">Download</button></a>
                            </div>
                          </div>
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

.img-containerr{
  position:relative;
  /* display:inline-block; */
}
.img-containerr .overlayy{
  position:absolute;
  top:0;
  left:0;
  width:100%;
  height:100%;
  background:rgb(0,0,0);
  opacity:0;
  transition:opacity 500ms ease-in-out;
}
.img-containerr:hover .overlayy{
  opacity:0.5;
}
.overlayy span{
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  color:#fff;
}
</style>
