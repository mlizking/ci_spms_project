<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layouts/script_head'); ?>
    <title>SPMS</title>
</head>
<body>
    <?php $this->load->view('layouts/navbar'); ?>
    <div class="container-fluid">
    <!-- Carousel -->
    <?php $this->load->view('layouts/carousel_view'); ?>

    <!-- Search bar -->
    <?php //$this->load->view('layouts/searchbar_view'); ?>


    <!-- Photo grid -->
    <div class="card-columns">
            <?php
                if($fetch_data->num_rows() > 0)
                {
                  foreach ($fetch_data->result() as $row) {
                
                     $filename = $row->p_filename;
                     $picname = $row->p_name;
                     $pdetail = $row->p_detail;

                     $tag = $row->p_tag;
                     $ptag = explode(",",$tag);

                     $id = $row->p_id;
                     $uname = $row->u_name;
                     $upic = $row->u_profilepic;
                     //echo '<br>'.$filename;
                     ?>
                     <div class="card">
                      <div class="img-container">
                        <img src="<?php echo base_url(); ?>uploads/<?php echo $filename ?>" class="img-fluid card-img-top" alt="Responsive image">
                        <div class="overlay text-center" data-toggle="modal" data-target="#imgModalCenter<?php echo $id ?>"><!-- Trigger Modal -->
                            <span><h1><?php echo $picname ?></h1></span>
                        </div>
                      </div>
                     </div>

                      <!-- Modal -->
                      <div class="modal fade" id="imgModalCenter<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <div class="modal-title">
                                <div class="row">
                                  <img src="<?php echo base_url(); ?>uploads/profile_picture/<?php echo $upic ?>" class="centered-and-cropped ml-2" width="30" height="30">
                                  <h5 class="modal-title ml-2"><?php echo $uname ?></h5>
                                </div>
                              </div>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body text-center">
                              <h5 class="modal-title"><?php echo $picname ?></h5>
                              <div class="img-container mt-3 mb-3">
                                <img class="img-fluid" src="<?php echo base_url(); ?>uploads/<?php echo $filename ?>" alt="Responsive image">
                                <div class="overlay">
                                  <span><h1>SPMS&copy;</h1></span>
                                </div>
                              </div>
                              <div class="container">
                              <?php 
                                foreach ($ptag as $value) {
                                  $value2 = ucfirst(strtolower($value));
                                  ?><a href="<?php echo site_url('search_controller/tag_search/'.$value2) ?>" class="badge badge-dark ml-1 mr-1"><?php  echo $value2 ?></a><?php
                                }
                              ?>
                              </div>
                            </div>
                            <div class="modal-footer">

                              <!-- <?php //if($this->session->userdata('email') != ''){ ?>
                                <a href="<?php //echo site_url('home_controller/picdownload/'.$filename) ?>"><button type="button" class="btn btn-primary">Download</button></a>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              <?php //}else{ ?>
                                <a href="<?php //echo site_url('picture_controller/select_picture') ?>"><i class="fas fa-info-circle"></i> More info.</a>
                              <?php //} ?> -->
                              <div class="container text-center">
                                <a class="btn btn-primary" href="<?php echo site_url('picture_controller/select_picture/'.$id) ?>"><i class="fas fa-info-circle"></i> More info.</a> 
                              </div>  
                            </div>
                          </div>
                        </div>
                      </div>

                     <?php
                
                  }
                }
                else
                {
        
                    echo 'No Data Found!!';
                
                }
            ?>
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
