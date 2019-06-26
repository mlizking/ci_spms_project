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
        <div class="row justify-content-center mt-3">        
            <a href="<?php echo site_url('home_controller/picdownload/'.$filename) ?>"><button type="button" class="btn btn-primary">Download</button></a>
        </div>
    </div>


    <?php $this->load->view('layouts/footer'); ?>
    <?php $this->load->view('layouts/script_body'); ?>
</body>
</html>
