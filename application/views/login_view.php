<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layouts/script_head'); ?>
    <title>Sign-in</title>
</head>
<body>
    <?php $this->load->view('layouts/navbar'); ?>
    <center>
    <div class="card text-center border-dark mt-5 ml-5 mr-5">
        <div class="card-header">
            Login
        </div>
        <div class="card-body">
            <?php echo form_open('userlogin_controller/login_validation'); ?> 
            <!-- Form -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="loginemail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo set_value('loginemail'); ?>" required>
                    <?php echo form_error('loginemail'); ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="loginpassword" id="exampleInputPassword1" placeholder="Password" value="<?php echo set_value('loginpassword'); ?>" required>
                    <?php echo form_error('loginpassword'); ?>
                </div>
                <p class="mb-2"><?php echo $this->session->flashdata("error"); ?></p>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </center>
    <?php $this->load->view('layouts/footer'); ?>
    <?php $this->load->view('layouts/script_body'); ?>
</body>
</html>