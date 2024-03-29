<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layouts/script_head'); ?>
    <?php 
        foreach ($picdata->result() as $row) 
        {
            
            $picid = $row->p_id;
            $filename = $row->p_filename;
            $picname = $row->p_name;
            $pdetail = $row->p_detail;

            $tag = $row->p_tag;
            $pictag = explode(",",$tag);

            $pview = $row->p_view;

            $uid = $row->u_id;
            $uname = $row->u_name;
            $upic = $row->u_profilepic;   

        }  
    ?>
    <!-- <meta property="og:url"           content="<?php //echo site_url('picture_controller/select_picture/'.$picid) ?>" /> -->
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="SPMS" />
    <meta property="og:description"   content="<?php echo $picname ?>" />
    <meta property="og:image"         content="<?php echo base_url(); ?>uploads/<?php echo $filename ?>" />
    <title><?php echo $picname ?></title>
</head>
<body>
    <?php $this->load->view('layouts/navbar'); ?>
  
    <?php
        $CI =& get_instance();
        $CI->load->model('picture_model');
        $CI->picture_model->update_pview($picid, $pview);
    ?>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <style>
                .img-fluid{
                    max-width: 100%;
                    max-height: 1500px;
                }
            </style>
            <div class="img-container">
                <img src="<?php echo base_url(); ?>uploads/<?php echo $filename ?>" class="img-fluid" alt="Responsive image">
                <div class="overlay text-center">
                    <span><h1><?php echo $picname ?></h1></span>
                </div>
                <?php
                    $ulid = $this->session->userdata('userid');
                    $pid = $picid;
                    $CI =& get_instance();
                    $CI->load->model('picture_model');
                    $data['like'] = $CI->picture_model->select_like($pid);
                    $piclike = $data['like']->num_rows();
                    $liked = 0;
                    foreach($data['like']->result() as $row){
                        if($ulid == $row->u_id){
                            $liked++;                                    
                        }
                    }
                    
                    if($liked == 1)
                    {
                ?>
                        <div class="like4" onclick="window.location='<?php echo site_url('picture_controller/unlike_picture/'.$pid); ?>'">                                             
                            <i class="fab fa-gratipay fa-2x"> <?php echo $piclike ?></i>                                  
                        </div>
                <?php
                    }
                    else
                    {
                ?>
                        <div class="like3" onclick="window.location='<?php echo site_url('picture_controller/like_picture/'.$pid); ?>'">                                             
                            <i class="fab fa-gratipay fa-2x"> <?php echo $piclike ?></i>                                  
                        </div>
                <?php
                    }
                ?>  
            </div>
        </div>
    </div>

    <div class="container-fluid text-center">
        <?php if($this->session->userdata('userid') == $uid){ ?>
            <div class="edit mt-3" onclick="window.location='<?php echo site_url('picture_controller/edit_picture/'.$picid); ?>'">                                             
                <i class="fas fa-edit fa-2x"></i>                                 
            </div> 
        <?php } ?>  
    </div>

    <div class="container-fluid mx-auto mt-3"> 
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
                <h5 class="card-header">เจ้าของภาพ</h5>
                <div class="card-body">
                    <div class="row ml-3">
                        <a href="<?php echo site_url('profile_controller/photographer_profile/'.$uid) ?>">
                            <img src="<?php echo base_url(); ?>uploads/profile_picture/<?php echo $upic ?>" class="centered-and-cropped rounded-circle" width="100" height="100">
                        </a>
                        <div class="col my-auto">
                            <a class="text-dark" href="<?php echo site_url('profile_controller/photographer_profile/'.$uid) ?>">
                                <h5 class="modal-title"><?php echo $uname ?></h5>
                            </a>
                            <?php if($this->session->userdata('userid') != $uid){ ?>
                                <?php
                                    $ufid = $this->session->userdata('userid');
                                    $fuid = $uid;
                                    $CI =& get_instance();
                                    $CI->load->model('follow_model');
                                    $data['follow'] = $CI->follow_model->select_data($ufid, $fuid);
                                    if($data['follow']->num_rows() == 1)
                                    {
                                        ?>
                                            <?php echo form_open('Photographer_controller/unfollow/'.$fuid); ?>
                                                <button type="submit" class="btn btn-outline-info mt-2 active">กำลังติดตาม</button>
                                            </form>
                                        <?php
                                    }
                                    elseif($data['follow']->num_rows() == 0)
                                    {
                                        ?>
                                            <?php echo form_open('Photographer_controller/follow/'.$fuid); ?>
                                                <button type="submit" class="btn btn-outline-info mt-2">ติดตาม</button>
                                            </form>
                                        <?php
                                    }
                                ?>
                            <?php } ?>
                        </div>
                    </div>   
                </div>
            </div>   

            <!-- permisson comment -->
            <div class="card p-3">
                <?php echo form_open('picture_controller/insertpermissioncomment/'.$picid); ?> 
                <!-- Form -->
                    <div class="form-group">
                        <label for="picTextarea"><h5>โปรดบอกเราว่าคุณต้องการนำรูปภาพไปใช้ทำอะไร ?</h5></label>
                        <textarea class="form-control" id="picTextarea" name="picTextarea" rows="3" placeholder="กรอกข้อความที่นี่" required></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-info" type="submit">ส่งข้อความ</button>
                    </div>  
                </form>

                <?php 
                    $this->load->model('picture_model');
                    $data['permissiondata'] = $this->picture_model->select_permissioncomment($picid);
                    foreach ($data['permissiondata']->result() as $row) 
                    {
                ?>

                <div class="card text-center">
                    <blockquote class="blockquote mb-0 card-body">
                    <p>" <?php echo $row->pc_detail ?> "</p>
                    <footer class="blockquote-footer">
                        <a href="<?php echo site_url('profile_controller/photographer_profile/'.$row->u_id) ?>">
                        <small class="text-muted">
                            <cite title="Source Title"><?php echo $row->u_name ?></cite>
                            <!-- user picture -->
                            <?php if($row->u_profilepic != ''){ ?>
                                <img src="<?php echo base_url(); ?>uploads/profile_picture/<?php echo $row->u_profilepic ?>" class="centered-and-cropped rounded-circle" width="30" height="30">
                            <?php }else{ ?>
                                <img src="https://via.placeholder.com/2000?text=Replace+with+profile+picture+." class="centered-and-cropped rounded-circle" width="30" height="30">
                            <?php } ?>    
                        </small>
                        </a>
                    </footer>
                    </blockquote> 
                </div>          

                <?php         
                    }
                ?>      
            </div>
        </div>  
    </div>

    <div class="container-fluid text-center">                
        <!-- Load Facebook SDK for JavaScript -->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <!-- Your share button code -->
        <div class="fb-share-button" 
            data-href="<?php echo site_url('picture_controller/select_picture/'.$picid) ?>" 
            data-layout="button_count">
        </div>
    </div>

    <!-- Download button -->
    <div class="container mt-3">
        <div class="row justify-content-center">
            <a href="<?php echo site_url('picture_controller/picdownload/'.$filename.'/'.$picid) ?>"><button type="button" class="btn btn-success">ดาวน์โหลดภาพนี้ <i class="fas fa-file-download"></i></button></a>         
        </div>
    </div>
        
    <!-- random select photo with relate tag -->     
    <div class="container mt-3">
        <div class="row justify-content-center">
            <h5>รูปภาพที่เกี่ยวข้อง</h5>
        </div>
        <div class="row justify-content-center">     
    <?php 
        //echo count($pictag);
        $check = array($picid); 
        //print_r($check);           

        $arraycount = count($pictag);
        for($count = 0; $count < $arraycount; $count++){      
            $this->load->model('picture_model');
            $data['relatedata'] = $this->picture_model->random_relatepicture($pictag[$count]);
            foreach ($data['relatedata']->result() as $row) 
            {
                if(in_array($row->p_id, $check) != 1){
    ?>
                <div class="img-container ml-1 mr-1 mt-1">
                    <img src="<?php echo base_url(); ?>uploads/<?php echo $row->p_filename ?>" class="centered-and-cropped rounded" width="300" height="200" alt="Responsive image">
                    <a href="<?php echo site_url('picture_controller/select_picture/'.$row->p_id) ?>">
                        <div class="overlay text-center">
                            <span><h1>SPMS&copy;</h1></span>
                        </div>
                    </a>
                </div>
    <?php
                    array_push($check, $row->p_id);
                }
            }
        }
        //print_r($check);  
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