<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layouts/script_head'); ?>
    <title>Upload</title>
</head>
<body>
    <?php 
        if($this->session->userdata('email') == '')
        {   
            redirect(site_url('home_controller'));
        } 
    ?>
    <?php $this->load->view('layouts/navbar'); ?>

    <div class="container-fluid mt-3">
        <center>
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto mb-5 mt-5 ml-5 mr-5">
                <div class="card text-center border-dark">
                    <div class="card-header">
                        อัพโหลดรูปภาพ
                    </div>
                    <div class="card-body">
            
                        <?php echo $error;?>

                        <?php echo form_open_multipart('upload_controller/upload_validation');?>
                            <label>เลือกไฟล์ภาพ (ขนาดไม่เกิน 5mb)</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="picFile" name="picFile" aria-describedby="picFile" required>
                                    <label class="custom-file-label" for="picFile"></label>
                                </div>  
                            </div>
                            <div class="form-group">
                                <label for="picName">ชื่อรูปภาพ</label>
                                <input type="text" class="form-control" name="picName" id="picName" placeholder="กรอกชื่อรูปภาพที่นี่" value="<?php echo set_value('picName'); ?>" required>
                                <?php echo form_error('picName'); ?>
                            </div>
                            <div class="form-group">
                                <label for="picTag">Tags ที่เกี่ยวข้อง</label>
                                <input type="text" class="form-control" data-role="tagsinput" name="picTag" id="picTag" placeholder="Example : Landscape" value="<?php echo set_value('picTag'); ?>" required>
                                <?php echo form_error('picTag'); ?>
                            </div>
                            <div class="form-group">
                                <label for="picDetail">คำอธิบายรูปภาพ</label>
                                <textarea class="form-control" id="picDetail" name="picDetail" rows="3" placeholder="กรอกคำอธิบายรูปภาพที่นี่" value="<?php echo set_value('picDetail'); ?>" required></textarea>
                                <?php echo form_error('picDetail'); ?>
                            </div>
                            <button type="submit" class="btn btn-primary">อัพโหลด</button>  
                            
                        </form>

                    </div>
                </div>
            </div>
        </center>
    </div>
    <?php $this->load->view('layouts/footer'); ?>
    <?php $this->load->view('layouts/script_body'); ?>
</body>
</html>
