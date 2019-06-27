<!-- Modal -->
<div class="modal fade" id="imgModalCenter<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">
                    <div class="row">
                        <img src="<?php echo base_url(); ?>uploads/profile_picture/<?php echo $upic ?>" class="centered-and-cropped ml-2 mt-2" width="30" height="30">
                        <h5 class="modal-title ml-2 mt-2"><?php echo $uname ?></h5>
                        <button type="button" class="btn btn-outline-info ml-2 mt-2">follow</button>
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
                    <a href="<?php echo site_url('picture_controller/select_picture/'.$id) ?>">
                        <div class="overlay">
                            <span><h1>SPMS&copy;</h1></span>
                        </div>
                    </a>
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
                    <a class="btn btn-info" href="<?php echo site_url('picture_controller/select_picture/'.$id) ?>"><i class="fas fa-info-circle"></i> More info.</a> 
                </div>  
            </div>
        </div>
    </div>
</div>


