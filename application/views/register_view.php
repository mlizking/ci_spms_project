<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layouts/script_head'); ?>
    <title>Register</title>
</head>
<body>
    <?php 
        if($this->session->userdata('statusid') != '')
        {   
            redirect(site_url('home_controller'));
        } 
    ?>
    <?php $this->load->view('layouts/navbar'); ?>

    

    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto mb-5 mt-5 ml-5 mr-5">
        <div class="card border-dark">
            <div class="card-header">
                สมัครสมาชิก
            </div>
            <div class="card-body">
                <?php echo form_open('userregister_controller/register_validation'); ?> 
                <!-- Form -->
                    <div class="form-group">
                        <label for="Name">ชื่อ-นามสกุล</label>
                        <input type="text" class="form-control" name="registername" id="Name" placeholder="กรอกชื่อ-นามสกุลที่นี่" value="<?php echo set_value('registername'); ?>" required>
                        <?php echo form_error('registername'); ?>
                    </div>
                    <div class="form-group">
                        <label for="Email">อีเมล</label>
                        <input type="email" class="form-control" name="registeremail" id="Email" aria-describedby="emailHelp" placeholder="กรอกอีเมลที่นี่" value="<?php echo set_value('registeremail'); ?>" required>
                        <?php echo form_error('registeremail'); ?>
                    </div>
                    <div class="form-group">
                        <label for="Password">รหัสผ่าน</label>
                        <input type="password" class="form-control" name="registerpassword" id="Password" placeholder="กรอกรหัสผ่านที่นี่" value="<?php echo set_value('registerpassword'); ?>" required>
                        <?php echo form_error('registerpassword'); ?>
                    </div>
                    <div class="form-group">
                        <label for="Passwordconf">ยืนยันรหัสผ่าน</label>
                        <input type="password" class="form-control" name="registerpassconf" id="Passwordconf" placeholder="กรอกยันยันรหัสผ่านที่นี่" value="<?php echo set_value('registerpassconf'); ?>" required>
                        <?php echo form_error('registerpassconf'); ?>
                    </div>
                    <!-- <p class="mb-2"><?php //echo $this->session->flashdata("error"); ?></p> -->
                    <div class="text-right">
                        <button type="submit" class="btn btn-success">สมัครสมาชิก</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>

    

    <?php $this->load->view('layouts/footer'); ?>
    <?php $this->load->view('layouts/script_body'); ?>
</body>
</html>