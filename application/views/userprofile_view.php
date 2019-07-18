<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layouts/script_head'); ?>
    <?php foreach ($user_data->result() as $row){$name = $row->u_name;} ?>
    <title><?php echo $name ?></title>
</head>
<body class="pageheight">

    <?php $this->load->view('layouts/navbar'); ?>
    
    <div class="container text-center"><?php echo $error;?></div>

    <?php
        if($user_data->num_rows() > 0)
        {
            foreach ($user_data->result() as $row)
            {
                $profilepic = $row->u_profilepic;
                $this->session->set_userdata('profilepic', $profilepic);
                $coverpic = $row->u_coverpic;
                $this->session->set_userdata('coverpic', $coverpic);
                $id = $row->u_id;
                $email = $row->u_email;
                $name = $row->u_name;
                $status = $row->us_name;
                $address = $row->u_address;
                $tel = $row->u_tel;
    ?>

                <div class="coverphoto">
                    <div class="img-container" style="width: 100%">
                    <?php if($coverpic != ''){ ?>
                        <img src="<?php echo base_url(); ?>uploads/cover_picture/<?php echo $coverpic ?>" alt="Responsive image" class="centered-and-cropped" width=100% height="400">
                    <?php }else{ ?>
                        <img src="https://via.placeholder.com/3840?text=Replace+with+cover+picture+." alt="Responsive image" class="centered-and-cropped" width=100% height="400">
                    <?php } ?>
                        <div class="overlay">
                            <span><h1>SPMS&copy;</h1></span>
                        </div>
                    </div>

                    <div class="profile-overlay text-center">
                        <!-- <div class="container text-center"> -->
                        <div class="img-container">

                            <!-- profile picture -->
                            <?php if($profilepic != ''){ ?>                
                                <img src="<?php echo base_url(); ?>uploads/profile_picture/<?php echo $profilepic ?>" class="rounded-circle centered-and-cropped" width="300" height="300" alt="Responsive image">                       
                            <?php }else{ ?> 
                                <img src="https://via.placeholder.com/2000?text=Replace+with+profile+picture+." class="rounded-circle centered-and-cropped" width="300" height="300" alt="Responsive image">                       
                            <?php } ?>

                            <!-- profile picture edit -->
                            <?php if($this->session->userdata('userid') == $id){ ?>
                                <div class="overlay rounded-circle" data-toggle="modal" data-target="#profilepicModal">
                                    <span><h1>เปลี่ยนภาพโปรไฟล์</h1></span>
                                </div>
                            <?php }else{ ?>
                                <div class="overlay rounded-circle">
                                    <span><h1>SPMS&copy;</h1></span>
                                </div>
                            <?php } ?>

                        </div>        
                        <!-- </div> -->
                    </div>

                    <?php if($this->session->userdata('userid') == $id){ ?>
                        <div class="coveredit-overlay">
                            <button class="btn btn-outline-warning" data-toggle="modal" data-target="#coverphotoModal">เปลี่ยนภาพปก</button>
                        </div>
                    <?php } ?>

                </div>
                
                <div class="container-fluid text-center">
                    <h1><?php echo $name ?></h1>
                    <h5><i class="fas fa-map-marker-alt"></i> <?= $address ?></h5>
                    <h5><i class="fas fa-phone-alt"></i> <?= $tel ?></h5>

                    <!-- edit profile and follow button -->
                    <?php if($this->session->userdata('userid') == $id){ ?>
                        <button class="btn btn-outline-warning" data-toggle="modal" data-target="#profiledataModal">แก้ไขข้อมูลผู้ใช้</button> 
                    <?php }else{ ?>
                        <?php
                            $uid = $this->session->userdata('userid');
                            $fuid = $id;
                            $CI =& get_instance();
                            $CI->load->model('follow_model');
                            $data['follow'] = $CI->follow_model->select_data($uid, $fuid);
                            if($data['follow']->num_rows() == 1)
                            {
                                ?>
                                    <?php echo form_open('Photographer_controller/unfollow/'.$fuid); ?>
                                        <button type="submit" class="btn btn-outline-info mt-2 active">กำลังติดตาม</button>
                                    </form>
                                <?php
                            }
                            elseif($data['follow']->num_rows() == 0)
                            {
                                ?>
                                    <?php echo form_open('Photographer_controller/follow/'.$fuid); ?>
                                        <button type="submit" class="btn btn-outline-info mt-2">ติดตาม</button>
                                    </form>
                                <?php
                            }
                        ?>
                        
                    <?php } ?>

                    <?php
                        $allview = 0;
                        $alldownload = 0;
                        foreach ($pictureview->result() as $row){
                            $allview = $allview + $row->p_view;
                            $alldownload = $alldownload + $row->p_download;
                        }
                    ?>            

                    <div class="row mt-5">
                        <div class="col">
                            <h4><i class="fas fa-eye" style="color:#43D8D8"></i><br> <?php echo $allview ?></h4>
                        </div>
                        <div class="col">
                            <h4><i class="fab fa-gratipay" style="color:#D84343"></i><br> <?php echo $picturelike->num_rows() ?></h4>
                        </div>
                        <div class="col">
                            <h4><i class="fas fa-file-download" style="color:#8DD843"></i><br> <?php echo $alldownload ?></h4>
                        </div>
                        <div class="col">
                            <h4><i class="fas fa-user-friends" style="color:#8D43D8"></i><br> <?php echo $followcount->num_rows() ?></h4>
                        </div>
                    </div>
                </div>

                <div class="container-fluid mt-3">
                    <!-- Photo grid -->
                    <div class="card-columns">
                        <?php
                        if($fetch_data->num_rows() > 0)
                        {
                            foreach ($fetch_data->result() as $row) {
                                $userid = $row->u_id;
                            
                                $filename = $row->p_filename;
                                $picname = $row->p_name;
                                $pdetail = $row->p_detail;

                                $tag = $row->p_tag;
                                $ptag = explode(",",$tag);

                                $id = $row->p_id;
                                $uname = $row->u_name;
                                $upic = $row->u_profilepic;

                                $passdatahome = array(
                                'userid' => $userid,
                                'id' => $id, 
                                'filename' => $filename, 
                                'picname' => $picname, 
                                'ptag' => $ptag,
                                'upic' => $upic,
                                'uname' => $uname
                                );
                                //echo '<br>'.$filename;
                        ?>
                                <div class="card">
                                <div class="img-container">
                                    <?php if($this->session->userdata('userid') == $userid){ ?>
                                        <div class="edit" onclick="window.location='<?php echo site_url('picture_controller/edit_picture/'.$id); ?>'">                                             
                                            <i class="fas fa-edit"></i>                                 
                                        </div> 
                                        <div class="delete" data-toggle="modal" data-target="#deleteModal<?php echo $id ?>">                                             
                                            <i class="fas fa-trash-alt"></i>                                 
                                        </div>
                                        <!-- Delete Modal -->
                                        <div class="modal fade" id="deleteModal<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header text-dark mx-auto">
                                                        <h3>คุณต้องการลบ "<?php echo $picname ?>" ?</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="img-container">
                                                            <img class="img-fluid" src="<?php echo base_url(); ?>uploads/<?php echo $filename ?>" alt="Responsive image">
                                                            <div class="overlay">
                                                            <span><h1>SPMS&copy;</h1></span>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                    <div class="modal-footer mx-auto">
                                                        <a href="<?php echo site_url('picture_controller/delete_picture/'.$id); ?>">
                                                            <button type="button" class="btn btn-success">Yes</button>
                                                        </a>
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    <?php } ?>  
                                    <img src="<?php echo base_url(); ?>uploads/<?php echo $filename ?>" class="img-fluid card-img-top" alt="Responsive image">
                                    <div class="overlay text-center" data-toggle="modal" data-target="#imgModalCenter<?php echo $id ?>"><!-- Trigger Modal -->
                                        <span><h1><?php echo $picname ?></h1></span>
                                    </div>
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
                                            <div class="like2" onclick="window.location='<?php echo site_url('picture_controller/unlike_picture/'.$pid); ?>'">                                             
                                                <i class="fab fa-gratipay fa-1x"> <?php echo $piclike ?></i>                                  
                                            </div>
                                    <?php
                                        }
                                        else
                                        {
                                    ?>
                                            <div class="like1" onclick="window.location='<?php echo site_url('picture_controller/like_picture/'.$pid); ?>'">                                             
                                                <i class="fab fa-gratipay fa-1x"> <?php echo $piclike ?></i>                                  
                                            </div>
                                    <?php
                                        }
                                    ?>  
                                </div>
                                </div>

                                <!-- Modal -->
                                <?php
                                $this->load->view('layouts/modal_view', $passdatahome);
                            }
                        }
                        else
                        {
                            echo '<h3>ไม่มีรูปภาพให้แสดง</h3>';
                        }
                        ?>
                    </div>
                </div>

    <?php   
            }     
        }
        else
        {
            redirect(site_url('home_controller'));
        }
    ?>

<!-- Modal cover photo upload -->
<div class="modal fade" id="coverphotoModal" tabindex="-1" role="dialog" aria-labelledby="coverphotoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="coverphotoModalLabel">เปลี่ยนภาพปก</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('upload_controller/do_uploadcover');?>
                    <div class="form-group">
                        <label for="coverFile">เลือกไฟล์ภาพปก (ขนาดไม่เกิน 5mb jpeg/jpg/png)</label><br>
                        <input type="file" onchange="document.getElementById('outputcover').src = window.URL.createObjectURL(this.files[0])" id="coverFile" name="coverFile" style="width: 250px" required></input>
                        <div class="mt-3">
                            <img id="outputcover" class="centered-and-cropped" width="200" height="100"/>
                        </div>
                    </div>
                    <div class="card text-right">
                        <button type="submit" class="btn btn-success">อัพโหลดภาพปกใหม่</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal edit profile picture -->
<div class="modal fade" id="profilepicModal" tabindex="-1" role="dialog" aria-labelledby="profilepicModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="profilepicModalLabel">เปลี่ยนภาพโปรไฟล์</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('upload_controller/do_uploadprofile');?>
                    <div class="form-group">
                        <label for="coverFile">เลือกไฟล์ภาพโปรไฟล์ (ขนาดไม่เกิน 5mb jpeg/jpg/png)</label><br>
                        <input type="file" onchange="document.getElementById('outputprofile').src = window.URL.createObjectURL(this.files[0])" id="profilepic" name="profilepic" style="width: 250px" required></input>
                        <div class="mt-3">
                            <img id="outputprofile" class="centered-and-cropped" width="200" height="100"/>
                        </div>
                    </div>
                    <div class="card text-right">
                        <button type="submit" class="btn btn-success">อัพโหลดภาพโปรไฟล์ใหม่</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal edit profile data -->
<div class="modal fade" id="profiledataModal" tabindex="-1" role="dialog" aria-labelledby="profiledataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="profiledataModalLabel">แก้ไขข้อมูลส่วนตัว</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open('profile_controller/update_data'); ?> 
                <!-- Form -->
                    <div class="form-group">
                        <label for="editname">ชื่อ-นามสกุล</label>
                        <input type="text" class="form-control" name="editname" id="editname" placeholder="กรอกชื่อ-นามสกุลที่นี่" value="<?php echo $name ?>" required>
                        <?php echo form_error('editname'); ?>
                    </div>
                    <div class="form-group">
                        <label for="editaddress">ที่อยู่</label>
                        <input type="text" class="form-control" name="editaddress" id="editaddress" placeholder="กรอกที่อยู่ที่นี่" value="<?php echo $address ?>" required>
                        <?php echo form_error('editaddress'); ?>
                    </div>
                    <div class="form-group">
                        <label for="edittel">เบอร์โทรศัพท์</label>
                        <input type="text" class="form-control" name="edittel" id="edittel" placeholder="กรอกเบอร์โทรศัพท์ที่นี่" value="<?php echo $tel ?>" required>
                        <?php echo form_error('edittel'); ?>
                    </div>
                    <!-- <p class="mb-2"><?php //echo $this->session->flashdata("error"); ?></p> -->
                    <div class="text-right">
                        <button type="submit" class="btn btn-success">ยืนยันการแก้ไข</button>
                    </div>
                </form>
            </div>
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

    .coverphoto{
        position:relative;
        display:inline-block;
        width:100%;
        height:550px;
    }

    .coverphoto .profile-overlay{
        position:absolute;
        width:300px;
        top:70%;
        left:50%;
        transform:translate(-50%,-50%);  
    }

    .coverphoto .coveredit-overlay{
        position:absolute;
        top:10px;
        right:10px;
        /* transform:translate(-50%,-50%);   */
    }

</style>