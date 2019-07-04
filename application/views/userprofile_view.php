<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layouts/script_head'); ?>
    <title>Hello !!</title>
</head>
<body>

    <?php $this->load->view('layouts/navbar'); ?>
  
    <?php
        if($user_data->num_rows() > 0)
        {
            foreach ($user_data->result() as $row)
            {
                $profilepic = $row->u_profilepic;
                $id = $row->u_id;
                $email = $row->u_email;
                $name = $row->u_name;
                $status = $row->us_name;

    ?>
                <div class="coverphoto">
                    <div class="blur-img">
                        <img src="<?php echo base_url(); ?>uploads/cover_picture/cover1.jpg" alt="Responsive image" class="centered-and-cropped" width=100% height="400">
                    </div>
                    <div class="profile-overlay">                
                        <img src="<?php echo base_url(); ?>uploads/profile_picture/<?php echo $profilepic ?>" class="rounded-circle centered-and-cropped" width="300" height="300" alt="Responsive image">
                    </div>
                </div>
                
                <div class="container mt-3">
                    <div class="row text-center mb-3">
                        <div class="col">
                            <h3>USER ID : <span class="badge badge-info"><?php echo $id ?></h3>                            

                            <h3>NAME : <span class="badge badge-info"><?php echo $name ?></span></h3>                          

                            <h3>E-MAIL : <span class="badge badge-info"><?php echo $email ?></span></h3>

                            <h3>STATUS : <span class="badge badge-info"><?php echo $status ?></span></h3>
                        </div>
                        <div class="col">
                            <h3>STATUS : <span class="badge badge-info"><?php echo $status ?></span></h3>

                            <h3>STATUS : <span class="badge badge-info"><?php echo $status ?></span></h3>

                            <h3>STATUS : <span class="badge badge-info"><?php echo $status ?></span></h3>
                        </div>
                    </div>

                    <?php if($this->session->userdata('userid') == $id){ ?>
                    <div class="row text-center mb-3">
                        <div class="col">
                            <button class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Edit</button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header mx-auto">
                                            <h5 class="modal-title" id="exampleModalLabel">แก้ไขข้อมูล</h5>
                                            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button> -->
                                        </div>
                                        <?php echo form_open('profile_controller/edit_userprofile'); ?> 
                                        <!-- Form -->
                                        <div class="modal-body">
                                    
                                                <div class="form-group">
                                                    <label for="editname">Fullname</label>
                                                    <input type="text" class="form-control" name="editname" id="editname" placeholder="Enter fullname" value="<?php echo $name ?>" required>
                                                    <?php //echo form_error('loginemail'); ?>
                                                </div>
                                                
                                                <p class="mb-2"><?php //echo $this->session->flashdata("error"); ?></p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-warning">Save changes</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php } ?>

                </div>           


    <?php

            }
        }
        else
        {
            redirect(site_url('home_controller'));
        }
    ?>
    

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
    }

    .coverphoto .profile-overlay{
        position:absolute;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);  
    }  
    .blur-img{
        filter: blur(2px);
        /* -webkit-filter: blur(2px); */
    }                                                         

</style>