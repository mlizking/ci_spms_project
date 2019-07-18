<!-- Modal -->
<div class="modal fade" id="imgModalCenter<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">

            <!-- <div class="modal-header">
                <div class="modal-title">
                    <div class="row">
                        <img src="<?php //echo base_url(); ?>uploads/profile_picture/<?php //echo $upic ?>" class="centered-and-cropped ml-2 mt-2" width="30" height="30">
                        <h5 class="modal-title ml-2 mt-2"><?php //echo $uname ?></h5>
                        <button type="button" class="btn btn-outline-info ml-2 mt-2">follow</button>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> -->

            <div class="modal-body text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title"><?php echo $picname ?></h5>
                <div class="img-container mt-3">
                    <img class="img-fluid" src="<?php echo base_url(); ?>uploads/<?php echo $filename ?>" alt="Responsive image">
                    <a href="<?php echo site_url('picture_controller/select_picture/'.$id) ?>">
                        <div class="overlay">
                            <span><h1>SPMS&copy;</h1></span>
                        </div>
                    </a>
                    <?php
                        $uid = $this->session->userdata('userid');
                        $pid = $id;
                        $CI =& get_instance();
                        $CI->load->model('picture_model');
                        $data['like'] = $CI->picture_model->select_like($pid);
                        $piclike = $data['like']->num_rows();
                        $liked = 0;
                        foreach($data['like']->result() as $row){
                            if($uid == $row->u_id){
                                $liked++;                                    
                            }
                        }
                        
                        if($liked == 1)
                        {
                    ?>
                            <div class="like4" onclick="window.location='<?php echo site_url('picture_controller/unlike_picture/'.$pid); ?>'">                                             
                                <i class="fab fa-gratipay fa-2x"> <?php echo $piclike ?></i>                                  
                            </div>
                    <?php
                        }
                        else
                        {
                    ?>
                            <div class="like3" onclick="window.location='<?php echo site_url('picture_controller/like_picture/'.$pid); ?>'">                                             
                                <i class="fab fa-gratipay fa-2x"> <?php echo $piclike ?></i>                                  
                            </div>
                    <?php
                        }
                    ?>  
                </div>

                <?php if($this->session->userdata('userid') == $userid){ ?>
                    <div class="edit mt-3" onclick="window.location='<?php echo site_url('picture_controller/edit_picture/'.$id); ?>'">                                             
                        <i class="fas fa-edit fa-2x"></i>                                 
                    </div> 
                <?php } ?>  

                <div class="container mt-3">
                    <?php 
                    foreach ($ptag as $value) {
                        $value2 = ucfirst(strtolower($value));
                        ?><a href="<?php echo site_url('search_controller/tag_search/'.$value2) ?>" class="badge badge-dark ml-1 mr-1"><?php  echo $value2 ?></a><?php
                    }
                    ?>
                </div>
                <div class="container text-center mt-3">
                    <a class="btn btn-info" href="<?php echo site_url('picture_controller/select_picture/'.$id) ?>"><i class="fas fa-info-circle"></i> More info.</a> 
                </div>  
            </div>
            <div class="modal-footer">

                <!-- <?php //if($this->session->userdata('email') != ''){ ?>
                <a href="<?php //echo site_url('home_controller/picdownload/'.$filename) ?>"><button type="button" class="btn btn-primary">Download</button></a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <?php //}else{ ?>
                <a href="<?php //echo site_url('picture_controller/select_picture') ?>"><i class="fas fa-info-circle"></i> More info.</a>
                <?php //} ?> -->

                <!-- random select photo with relate tag -->     
                <div class="container mt-3">
                    <div class="row justify-content-center">
                        <h5>รูปภาพที่เกี่ยวข้อง</h5>
                    </div>
                    <div class="row justify-content-center">     
                <?php 
        
                    $check = array($id); 
                    // print_r($check);
                    $arraycount = count($ptag);
                    // echo $arraycount;
                    for($count = 0; $count < $arraycount; $count++){      
                        $CI =& get_instance();
                        $CI->load->model('picture_model');
                        // echo $ptag[$count];
                        $tagdata['relatedata'] = $CI->picture_model->random_relatepicture($ptag[$count]);
                        foreach ($tagdata['relatedata']->result() as $row) 
                        {
                            if(in_array($row->p_id, $check) != 1){
                ?>
                                <div class="img-container ml-1 mr-1 mt-1">
                                    <img src="<?php echo base_url(); ?>uploads/<?php echo $row->p_filename ?>" class="centered-and-cropped rounded" width="200" height="100" alt="Responsive image">
                                    <a href="<?php echo site_url('picture_controller/select_picture/'.$row->p_id) ?>">
                                        <div class="overlay text-center">
                                            <span><h1>SPMS&copy;</h1></span>
                                        </div>
                                    </a>
                                </div>
                <?php
                                array_push($check, $row->p_id);
                            }
                        }
                    }
                ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


