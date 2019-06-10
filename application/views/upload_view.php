<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layouts/script_head'); ?>
    <title>Upload</title>
</head>
<body>
    <?php $this->load->view('layouts/navbar'); ?>
    <center>
    <div class="card text-center border-dark mt-5 ml-5 mr-5">
        <div class="card-header">
            Upload Picture
        </div>
        <div class="card-body">
  
            <?php echo $error;?>

            <?php echo form_open_multipart('upload_controller/do_upload');?>
                <label>Choose file <= 5 Mb</label>
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="picfile" name="picfile" aria-describedby="picfile">
                        <label class="custom-file-label" for="picfile"></label>
                    </div>  
                </div>
                <div class="form-group">
                    <label for="picName">Picture Name</label>
                    <input type="text" class="form-control" name="picName" id="picName" placeholder="Enter picture name" value="<?php echo set_value('registername'); ?>" required>
                    <?php //echo form_error('loginemail'); ?>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>  
                
            </form>
        </div>
    </div>
    </center>
    <?php $this->load->view('layouts/footer'); ?>
    <?php $this->load->view('layouts/script_body'); ?>
</body>
</html>