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
                    <span><h1><?php echo $picname ?></h1></span>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">                 
        <div class="card-columns">
             <div class="card">
                <h5 class="card-header">คำอธิบายรูปภาพ</h5>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p><?php echo $pdetail ?></p>
                        <footer class="blockquote-footer text-right"><cite title="Source Title"><?php echo $picname ?></cite></footer>
                    </blockquote>
                </div>
            </div>
            <div class="card">
                <h5 class="card-header">Tag ที่เกี่ยวข้อง</h5>
                <div class="card-body">
                    <?php 
                    foreach ($pictag as $value) {
                        $value2 = ucfirst(strtolower($value));
                        ?><a href="<?php echo site_url('search_controller/tag_search/'.$value2) ?>" class="badge badge-dark ml-1 mr-1"><?php  echo $value2 ?></a><?php
                    }
                    ?>
                </div>
            </div> 
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
            <div class="card p-3">
                <blockquote class="blockquote mb-0 card-body">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                </p>
                <footer class="blockquote-footer">
                    <small class="text-muted">
                    Someone famous in <cite title="Source Title">Source Title</cite>
                    </small>
                </footer>
                </blockquote>
            </div>
        </div>  
    </div>                     

    <div class="container mt-3">
        <div class="row justify-content-center">
            <a href="<?php echo site_url('home_controller/picdownload/'.$filename) ?>"><button type="button" class="btn btn-success">ดาวน์โหลดภาพนี้ <i class="fas fa-file-download"></i></button></a>         
        </div>
    </div>
        
    <div class="container mt-3">
        <div class="row justify-content-center">
            <h5>รูปภาพที่เกี่ยวข้อง</h5>
        </div>
        <div class="row justify-content-center">     
    <!-- random select photo with relate tag -->
    <?php 
        //echo count($pictag);        
        $this->load->model('picture_model');
        $data['relatedata'] = $this->picture_model->random_relatepicture($pictag[0]);
        foreach ($data['relatedata']->result() as $row) 
        {
    ?>
            <div class="img-container">
                <img src="<?php echo base_url(); ?>uploads/<?php echo $row->p_filename ?>" class="centered-and-cropped" width="200" height="200" alt="Responsive image">
                <div class="overlay text-center">
                    <span><h1><?php echo $row->p_name ?></h1></span>
                </div>
            </div>
    <?php
        }
    ?>
        </div>
    </div>
        


    <?php $this->load->view('layouts/footer'); ?>
    <?php $this->load->view('layouts/script_body'); ?>
</body>
</html>

<style>  
    @media (min-width:576px) {
        .card-columns {
        column-count: 1;
        }
    }
    @media (min-width:768px) {
        .card-columns {
        column-count: 1;
        }
    }
    @media (min-width:992px) {
        .card-columns {
        column-count: 2;
        }
    }
    @media (min-width:1200px) {
        .card-columns {
        column-count: 2;
        }
    }
</style>