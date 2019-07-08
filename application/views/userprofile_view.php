<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layouts/script_head'); ?>
    <?php foreach ($user_data->result() as $row){$name = $row->u_name;} ?>
    <title><?php echo $name ?></title>
</head>
<body class="pageheight">

    <?php $this->load->view('layouts/navbar'); ?>
  
    <?php
        if($user_data->num_rows() > 0)
        {
            foreach ($user_data->result() as $row)
            {
                $profilepic = $row->u_profilepic;
                $coverpic = $row->u_coverpic;
                $id = $row->u_id;
                $email = $row->u_email;
                $name = $row->u_name;
                $status = $row->us_name;
                $address = $row->u_address;
    ?>
                
                <div class="coverphoto">
                    <div class="blur-img">
                        <img src="<?php echo base_url(); ?>uploads/cover_picture/<?php echo $coverpic ?>" alt="Responsive image" class="centered-and-cropped" width=100% height="400">
                    </div>
                    <div class="profile-overlay">
                        <div class="container text-center">                
                            <img src="<?php echo base_url(); ?>uploads/profile_picture/<?php echo $profilepic ?>" class="rounded-circle centered-and-cropped" width="300" height="300" alt="Responsive image">
                        </div>
                    </div>
                    <div class="cover-overlay">
                        <button class="btn btn-outline-warning" data-toggle="modal" data-target="#coverphotoModal">อัพโหลดภาพปก</button>
                    </div>
                </div>
                
                <div class="container-fluid text-center">
                    <h1><?php echo $name ?></h1>
                    <h5><i class="fas fa-map-marker-alt"></i> <?=$address?></h5>
                    <div class="row mt-5">
                        <div class="col">
                            <h5><i class="fas fa-eye"></i> 100k</h5>
                        </div>
                        <div class="col">
                            <h5><i class="fas fa-file-download"></i> 100k</h5>
                        </div>
                        <div class="col">
                            <h5><i class="fas fa-user-friends"></i> 100k</h5>
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
                            
                                $filename = $row->p_filename;
                                $picname = $row->p_name;
                                $pdetail = $row->p_detail;

                                $tag = $row->p_tag;
                                $ptag = explode(",",$tag);

                                $id = $row->p_id;
                                $uname = $row->u_name;
                                $upic = $row->u_profilepic;

                                $passdatahome = array(
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
                                    <img src="<?php echo base_url(); ?>uploads/<?php echo $filename ?>" class="img-fluid card-img-top" alt="Responsive image">
                                    <div class="overlay text-center" data-toggle="modal" data-target="#imgModalCenter<?php echo $id ?>"><!-- Trigger Modal -->
                                        <span><h1><?php echo $picname ?></h1></span>
                                    </div>
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
                <h5 class="modal-title" id="coverphotoModalLabel">อัพโหลดภาพปก</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
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
        height:550px;
    }

    .coverphoto .profile-overlay{
        position:absolute;
        width:90%;
        top:70%;
        left:50%;
        transform:translate(-50%,-50%);  
    }

    .coverphoto .cover-overlay{
        position:absolute;
        top:10px;
        right:10px;
        /* transform:translate(-50%,-50%);   */
    }    

    .blur-img{
        filter: blur(0px);
        /* -webkit-filter: blur(2px); */
    }    

</style>