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
                <div class="container-fluid mt-3">
                    <div class="pt-3 pb-2 mb-3 border-bottom">
                        <div class="text-center">
                        <h1 class="h2">User Profile</h1>
                        </div>
                    </div>
                </div>
                
                <div class="container mt-3">
                    <div class="row  mb-3">
                        <div class="col text-center">
                            <img src="<?php echo base_url(); ?>uploads/profile_picture/<?php echo $profilepic ?>" class="img-fluid rounded" width="500" alt="Responsive image">
                        </div>
                    </div>
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
                    <div class="row text-center mb-3">
                        <div class="col">
                            <button class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Edit</button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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
    

    <?php $this->load->view('layouts/footer'); ?>
    <?php $this->load->view('layouts/script_body'); ?>
</body>
</html>

<style>

    .centered-and-cropped { 
        object-fit: cover 
    }

</style>