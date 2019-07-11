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

    <div class="container-fluid">    
            <div class="col-sm-9 col-md-7 mx-auto mt-5">
                <div class="card border-dark">
                    <div class="card-header">
                        อัพโหลดรูปภาพ
                    </div>
                    <div class="card-body">
            
                        <?php echo $error;?>

                        <?php echo form_open_multipart('upload_controller/upload_validation');?>
                            <div class="form-group">
                                <label for="picFile">เลือกไฟล์ภาพ (ขนาดไม่เกิน 5mb jpeg/jpg/png)</label><br>
                                <input type="file" onchange="document.getElementById('outputupload').src = window.URL.createObjectURL(this.files[0])" id="picFile" name="picFile" style="width: 250px" required></input>
                                <div class="mt-3">
                                    <img id="outputupload" class="centered-and-cropped" width="200" height="150"/>
                                </div>
                            </div>
                            <!-- <label>เลือกไฟล์ภาพ (ขนาดไม่เกิน 5mb jpeg/jpg/png)</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="picFile" name="picFile" aria-describedby="picFile" required>
                                    <label class="custom-file-label" for="picFile"></label>
                                </div>  
                            </div> -->
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
                            <div class="card text-right">
                                <button type="submit" class="btn btn-success">อัพโหลด</button>
                            </div>                    
                        </form>
                    </div>
                </div>
            </div>
    </div>
    <?php $this->load->view('layouts/footer'); ?>
    <?php $this->load->view('layouts/script_body'); ?>
</body>
</html>
