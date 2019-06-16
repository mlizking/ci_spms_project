<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layouts/script_head'); ?>
    <title>Register</title>
</head>
<body>
    <?php $this->load->view('layouts/navbar'); ?>

    <center>

    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto mb-5 mt-5 ml-5 mr-5">
        <div class="card text-center border-dark">
            <div class="card-header">
                Register
            </div>
            <div class="card-body">
                <?php echo form_open('userregister_controller/register_validation'); ?> 
                <!-- Form -->
                    <div class="form-group">
                        <label for="Name">Fullname</label>
                        <input type="text" class="form-control" name="registername" id="Name" placeholder="Enter fullname" value="<?php echo set_value('registername'); ?>" required>
                        <?php //echo form_error('loginemail'); ?>
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" class="form-control" name="registeremail" id="Email" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo set_value('registeremail'); ?>" required>
                        <?php echo form_error('registeremail'); ?>
                    </div>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" name="registerpassword" id="Password" placeholder="Enter password" value="<?php echo set_value('registerpassword'); ?>" required>
                        <?php echo form_error('registerpassword'); ?>
                    </div>
                    <div class="form-group">
                        <label for="Passwordconf">Confirm password</label>
                        <input type="password" class="form-control" name="registerpassconf" id="Passwordconf" placeholder="Enter confirm password" value="<?php echo set_value('registerpassconf'); ?>" required>
                        <?php echo form_error('registerpassconf'); ?>
                    </div>
                    <p class="mb-2"><?php //echo $this->session->flashdata("error"); ?></p>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    </center>

    <?php $this->load->view('layouts/footer'); ?>
    <?php $this->load->view('layouts/script_body'); ?>
</body>
</html>