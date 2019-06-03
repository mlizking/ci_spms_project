<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layouts/script_head'); ?>
    <title>Form!!</title>
    <style type="text/css">
        .fr{color: red;}
    </style>
</head>
<body>
    <?php $this->load->view('layouts/navbar'); ?>

    <center>
    <?php //echo validation_errors(); ?>
    <div class="card w-50 border-dark bg-light mb-10 mt-3">
    <?php echo form_open('form_controller'); ?>

        <div class="form-group mt-2 ml-5 mr-5">
        <h5>Username</h5>
        <input type="text" class="form-control" name="username" value="<?php echo set_value('username'); ?>" size="50" required/>
            <span class="fr">
                <?php echo form_error('username'); ?>
            </span>
        </div>

        <div class="form-group mt-2 ml-5 mr-5">
        <h5>Password</h5>
        <input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>" size="50" required/>
            <span class="fr">
                <?php echo form_error('password'); ?>
            </span>
        </div>

        <div class="form-group mt-2 ml-5 mr-5">
        <h5>Password Confirm</h5>
        <input type="password" class="form-control" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" required/>
            <span class="fr">
                <?php echo form_error('passconf'); ?>
            </span>
        </div>

        <div class="form-group mt-2 ml-5 mr-5">    
        <h5>Email Address</h5>
        <input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>" size="50" required/>
            <span class="fr">
                <?php echo form_error('email'); ?>
            </span>
        </div>

        <div>
            <button class="btn btn-primary mt-2 mb-2" type="submit">Submit</button>
        </div>

    </form>
    </div>
    </center>

    <?php $this->load->view('layouts/footer'); ?>
    <?php $this->load->view('layouts/script_body'); ?>
</body>
</html>