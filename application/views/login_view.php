<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layouts/script_head'); ?>
    <title>Login</title>
</head>
<body>
    <?php 
        if($this->session->userdata('statusid') != '')
        {   
            redirect(site_url('home_controller'));
        } 
    ?>
    <?php $this->load->view('layouts/navbar'); ?>

    <center>

    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto mb-5 mt-5 ml-5 mr-5">
        <div class="card text-center border-dark">
            <div class="card-header">
                เข้าสู่ระบบ
            </div>
            <div class="card-body">
                <?php echo form_open('userlogin_controller/login_validation'); ?> 
                <!-- Form -->
                    <div class="form-group">
                        <label for="exampleInputEmail1">อีเมล</label>
                        <input type="email" class="form-control" name="loginemail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="กรอกอีเมลที่นี่" value="<?php echo set_value('loginemail'); ?>" required>
                        <?php echo form_error('loginemail'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">รหัสผ่าน</label>
                        <input type="password" class="form-control" name="loginpassword" id="exampleInputPassword1" placeholder="กรอกรหัสผ่านที่นี่" value="<?php echo set_value('loginpassword'); ?>" required>
                        <?php echo form_error('loginpassword'); ?>
                    </div>
                    <p class="mb-2"><?php echo $this->session->flashdata("error"); ?></p>
                    <button type="submit" class="btn btn-success">เข้าสู่ระบบ</button>
                </form>
            </div>
            <div class="card-footer text-muted">
                ยังไม่มีบัญชีผู้ใช้ ? <a href="<?php echo site_url('userregister_controller') ?>">สมัครสมาชิก</a>
            </div>
        </div>
    <div>

    </center>

    <?php $this->load->view('layouts/footer'); ?>
    <?php $this->load->view('layouts/script_body'); ?>
</body>
</html>