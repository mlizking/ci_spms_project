<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layouts/script_head'); ?>
    <title>Upload</title>
</head>
<body>
    <?php 
        if($this->session->userdata('statusid') != '2')
        {   
            redirect(site_url('home_controller'));
        } 
    ?>
    <?php $this->load->view('layouts/navbar'); ?>

    <div class="container-fluid mt-3">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">อัพโหลดรูปภาพ</h1>
      </div>
    <center>
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto mb-5 mt-5 ml-5 mr-5">
        <div class="card text-center border-dark">
            <div class="card-header">
                Upload Picture
            </div>
            <div class="card-body">
    
                <?php echo $error;?>

                <?php echo form_open_multipart('upload_controller/upload_validation');?>
                    <label>Choose file <= 5 Mb</label>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="picFile" name="picFile" aria-describedby="picFile" required>
                            <label class="custom-file-label" for="picFile"></label>
                        </div>  
                    </div>
                    <div class="form-group">
                        <label for="picName">Picture Name</label>
                        <input type="text" class="form-control" name="picName" id="picName" placeholder="Enter picture name" value="<?php echo set_value('picName'); ?>" required>
                        <?php echo form_error('picName'); ?>
                    </div>
                    <div class="form-group">
                        <label for="picTag">Tags</label>
                        <input type="text" class="form-control" data-role="tagsinput" name="picTag" id="picTag" placeholder="Example : Landscape" value="<?php echo set_value('picTag'); ?>" required>
                        <?php echo form_error('picTag'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>  
                    
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
