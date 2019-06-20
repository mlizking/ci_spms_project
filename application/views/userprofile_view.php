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
                <div class="text-center mt-3">
                    <h1>User Profile</h1>
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
                            <button class="btn btn-warning">Edit</button>
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