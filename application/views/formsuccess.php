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
    <h1><?php echo 'Hello '.set_value('username'); ?></h1>
    <?php
        $this->session->set_userdata("member_id",45);
        $member_id = $this->session->userdata("member_id");
        echo $member_id;
     ?>
    <p><?php echo anchor('form_controller', 'Try it again!'); ?></p>
    </center>
    <?php $this->load->view('layouts/footer'); ?>
    <?php $this->load->view('layouts/script_body'); ?>
</body>
</html>