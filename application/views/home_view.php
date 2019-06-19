<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layouts/script_head'); ?>
    <title>SPMS</title>
</head>
<body>
    <?php $this->load->view('layouts/navbar'); ?>
    
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
                     $id = $row->p_id;
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

                     <?php
                
                  }
                }
                else
                {
        
                    echo 'No Data Found!!';
                
                }
            ?>
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
