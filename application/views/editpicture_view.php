<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layouts/script_head'); ?>
    <title>Edit</title>
</head>
<body>
    <?php 
        if($this->session->userdata('email') == '')
        {   
            redirect(site_url('home_controller'));
        } 
    ?>
    <?php $this->load->view('layouts/navbar'); ?>

        <?php
            foreach($picdata->result() as $row){
                $pid = $row->p_id;
                $filename = $row->p_filename;
                $picname = $row->p_name;
                $detail = $row->p_detail;
                $tag = $row->p_tag;
            }
        ?>
    <div class="container-fluid text-center mt-3"> 
        <div class="img-container">
            <img src="<?php echo base_url(); ?>uploads/<?php echo $filename ?>" class="img-fluid rounded cropped-center" width="400" alt="Responsive image">
            <div class="overlay text-center">
                <span><h1>SPMS&copy;</h1></span>
            </div>
        </div>
    </div>

    <div class="container-fluid">    
            <div class="col-sm-9 col-md-7 mx-auto mt-3">
                <div class="card border-dark">
                    <div class="card-header">
                        แก้ไขข้อมูลรูปภาพ
                    </div>
                    <div class="card-body">
            
                        <?php //echo $error;?>

                        <?php echo form_open_multipart('picture_controller/update_photo/'.$pid);?>                 
                            <div class="form-group">
                                <label for="editName">ชื่อรูปภาพ</label>
                                <input type="text" class="form-control" name="editName" id="editName" placeholder="กรอกชื่อรูปภาพที่นี่" value="<?php echo $picname ?>" required>
                                <?php //echo form_error('editName'); ?>
                            </div>
                            <div class="form-group">
                                <label for="editTag">Tags ที่เกี่ยวข้อง</label>
                                <input type="text" class="form-control" data-role="tagsinput" name="editTag" id="picTeditTagag" placeholder="Example : Landscape" value="<?php echo $tag ?>" required>
                                <?php //echo form_error('editTag'); ?>
                            </div>
                            <div class="form-group">
                                <label for="editDetail">คำอธิบายรูปภาพ</label>
                                <textarea class="form-control" id="editDetail" name="editDetail" rows="3" placeholder="กรอกคำอธิบายรูปภาพที่นี่" required><?php echo $detail ?></textarea>
                                <?php //echo form_error('editDetail'); ?>
                            </div>
                            <div class="card text-right">
                                <button type="submit" class="btn btn-success">ยืนยันการแก้ไข</button>
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
