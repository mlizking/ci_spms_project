<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layouts/script_head'); ?>
    <title>Success!!</title>
</head>
<body>
    <?php $this->load->view('layouts/navbar'); ?>
    <center>
    <h3>Your form was successfully submitted!</h3>
    <h1><?php echo 'Hello '.set_value('loginemail'); ?></h1>
    <p><?php echo anchor('userlogin_controller', 'Try it again!'); ?></p>
    </center>
    <?php $this->load->view('layouts/footer'); ?>
    <?php $this->load->view('layouts/script_body'); ?>
</body>
</html>