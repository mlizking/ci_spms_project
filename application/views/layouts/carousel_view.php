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
        $cfilename = $row->p_filename;
        $cpicname = $row->p_name;
        $cpdetail = $row->p_detail;
        $ptag = $row->p_tag;
        $cptag = explode(",",$ptag);
        $cid = $row->p_id;
        $cuname = $row->u_name;
        $cupic = $row->u_profilepic;

        $passdatacarousel = array(
          'id' => $cid, 
          'filename' => $cfilename, 
          'picname' => $cpicname, 
          'ptag' => $cptag,
          'upic' => $cupic,
          'uname' => $cuname
        );
        
        if($i == 0){ ?>

          
          <div class="carousel-item active">
            <div class="img-containerr">
              <img src="<?php echo base_url(); ?>uploads/<?php echo $cfilename ?>" alt="Responsive image" class="centered-and-cropped" width=100% height="550">
              <div class="overlayy" data-toggle="modal" data-target="#imgModalCenter<?php echo $cid ?>"><!-- Trigger Modal -->
                <span><h1>SPMS&copy;</h1></span>
              </div>
            </div>
            <div class="carousel-caption d-none d-md-block">
              <h5><?php echo $cpicname ?></h5>
              <p><?php echo $cpdetail ?></p>
            </div>
          </div>

          <!-- Modal -->
          <?php
            $this->load->view('layouts/modal_view', $passdatacarousel);
          ?> 

        <?php $i++;}else{ ?>


          <div class="carousel-item">
            <div class="img-containerr">
              <img src="<?php echo base_url(); ?>uploads/<?php echo $cfilename ?>" alt="Responsive image" class="centered-and-cropped" width=100% height="550">
              <div class="overlayy" data-toggle="modal" data-target="#imgModalCenter<?php echo $cid ?>"><!-- Trigger Modal -->
                <span><h1>SPMS&copy;</h1></span>
              </div>
            </div>
            <div class="carousel-caption d-none d-md-block">
              <h5><?php echo $cpicname ?></h5>
              <p><?php echo $cpdetail ?></p>
            </div>
          </div>

          <!-- Modal -->
          <?php
            $this->load->view('layouts/modal_view', $passdatacarousel);
          ?> 

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