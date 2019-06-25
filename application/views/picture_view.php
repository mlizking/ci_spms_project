<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layouts/script_head'); ?>
    <title>Hello !!</title>
</head>
<body>
    <?php $this->load->view('layouts/navbar'); ?>
  
    <?php 

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
    <div class="container-fluid text-center mt-3">
        <style>
            .img-fluid{
                max-width: 100%;
                max-height: 500px;
            }
        </style>
        <img src="<?php echo base_url(); ?>uploads/<?php echo $filename ?>" class="img-fluid" alt="Responsive image">
    </div>

    <?php $this->load->view('layouts/footer'); ?>
    <?php $this->load->view('layouts/script_body'); ?>
</body>
</html>