<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layouts/script_head'); ?>
    <title>Hello !!</title>
</head>
<body>
    <?php $this->load->view('layouts/navbar'); ?>
  
    <?php 
        $data['picdata'] = $picdata->result();
        foreach ($picdata->result() as $row) 
        {
            
            $picid = $row->p_id;
            $filename = $row->p_filename;
            $picname = $row->p_name;
            $pdetail = $row->p_detail;

            $tag = $row->p_tag;
            $pictag = explode(",",$tag);

            $uname = $row->u_name;
            $upic = $row->u_profilepic;   

            
        }  
        //echo $picid.$filename.$picname.$pdetail ;
    ?>
    <div class="container-fluid">
        <div class="row justify-content-center mt-3">
            <style>
                .img-fluid{
                    max-width: 100%;
                    max-height: 500px;
                }
            </style>
            <div class="img-container">
                <img src="<?php echo base_url(); ?>uploads/<?php echo $filename ?>" class="img-fluid" alt="Responsive image">
                <div class="overlay text-center">
                    <span><h1>SPMS&copy;</h1></span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 mt-3">
                <div class="card">
                    <h5 class="card-header">ช่างภาพ</h5>
                    <div class="card-body">
                        <div class="row ml-3">
                            <img src="<?php echo base_url(); ?>uploads/profile_picture/<?php echo $upic ?>" class="centered-and-cropped rounded-circle" width="100" height="100">
                            <div class="col my-auto">
                                <h5 class="modal-title"><?php echo $uname ?></h5>
                                <button type="button" class="btn btn-outline-info mt-2">follow</button>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mt-3">
                <div class="card">
                    <h5 class="card-header">รายละเอียดรูปภาพ</h5>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p><?php echo $pdetail ?></p>
                            <footer class="blockquote-footer text-right"><cite title="Source Title"><?php echo $picname ?></cite></footer>
                        </blockquote>
                    </div>
                </div> 
            </div>  
        </div>           
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <a href="<?php echo site_url('home_controller/picdownload/'.$filename) ?>"><button type="button" class="btn btn-success">Download</button></a>         
        </div>
    </div>
    
        


    <?php $this->load->view('layouts/footer'); ?>
    <?php $this->load->view('layouts/script_body'); ?>
</body>
</html>
