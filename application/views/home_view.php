<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layouts/script_head'); ?>
    <title>SPMS</title>
</head>
<body>
    <?php $this->load->view('layouts/navbar'); ?>

    <!-- Carousel -->
    <?php $this->load->view('layouts/carousel_view'); ?>

    <!-- Search bar -->
    <?php //$this->load->view('layouts/searchbar_view'); ?>

    <div class="container-fluid">
        <!-- Photo grid -->
        <div class="card-columns">
                <?php
                    if($fetch_data->num_rows() > 0)
                    {
                    foreach ($fetch_data->result() as $row) {
                        $userid = $row->u_id;
                    
                        $filename = $row->p_filename;
                        $picname = $row->p_name;
                        $pdetail = $row->p_detail;

                        $tag = $row->p_tag;
                        $ptag = explode(",",$tag);

                        $id = $row->p_id;
                        $uname = $row->u_name;
                        $upic = $row->u_profilepic;

                        $pview = $row->p_view;

                        $passdatahome = array(
                        'userid' => $userid,
                        'id' => $id, 
                        'filename' => $filename, 
                        'picname' => $picname, 
                        'ptag' => $ptag,
                        'pview' => $pview,
                        'upic' => $upic,
                        'uname' => $uname
                        );
                        //echo '<br>'.$filename;
                ?>
                        <div class="card text-center">
                        <div class="img-container">
                            <?php if($this->session->userdata('userid') == $row->u_id){ ?>
                                <div class="edit" onclick="window.location='<?php echo site_url('picture_controller/edit_picture/'.$id); ?>'">                                             
                                    <i class="fas fa-edit"></i>                                 
                                </div> 
                            <?php } ?>  
                            <img src="<?php echo base_url(); ?>uploads/<?php echo $filename ?>" class="img-fluid card-img-top" alt="Responsive image">
                            <div class="overlay text-center" data-toggle="modal" data-target="#imgModalCenter<?php echo $id ?>"><!-- Trigger Modal -->
                                <span><h1><?php echo $picname ?></h1></span>
                            </div>
                            <?php
                                $uid = $this->session->userdata('userid');
                                $pid = $id;
                                $CI =& get_instance();
                                $CI->load->model('picture_model');
                                $data['like'] = $CI->picture_model->select_like($pid);
                                $piclike = $data['like']->num_rows();
                                $liked = 0;
                                foreach($data['like']->result() as $row){
                                    if($uid == $row->u_id){
                                        $liked++;                                    
                                    }
                                }
                                
                                if($liked == 1)
                                {
                            ?>
                                    <div class="like2" onclick="window.location='<?php echo site_url('picture_controller/unlike_picture/'.$pid); ?>'">                                             
                                        <i class="fab fa-gratipay fa-1x"> <?php echo $piclike ?></i>                                  
                                    </div>
                            <?php
                                }
                                else
                                {
                            ?>
                                    <div class="like1" onclick="window.location='<?php echo site_url('picture_controller/like_picture/'.$pid); ?>'">                                             
                                        <i class="fab fa-gratipay fa-1x"> <?php echo $piclike ?></i>                                  
                                    </div>
                            <?php
                                }
                            ?>

                        </div>
                        </div>

                        <!-- Modal -->
                        <?php
                        $this->load->view('layouts/modal_view', $passdatahome);
                        ?>  

                <?php
                    
                    }
                    }
                    else
                    {
            
                        echo 'No Data Found!!';
                    
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
        column-count: 2;
        }
    }
    @media (min-width:992px) {
        .card-columns {
        column-count: 3;
        }
    }
    @media (min-width:1200px) {
        .card-columns {
        column-count: 4;
        }
    }
</style>

