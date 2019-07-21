<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layouts/script_head'); ?>
    <title>Result of <?php echo $title ?></title>
</head>
<body>
    <?php $this->load->view('layouts/navbar'); ?>
    
    <div class="container-fluid">
      <div class="container text-center mt-2">
        <h4>ผลการค้นหาของ "<?php echo $title ?>" พบ <?php echo $searchdata->num_rows() ?> รายการ</h4>
      </div>

      <div class="dropdown-divider"></div>

            <?php
              if($searchdata->num_rows() > 0)
              { 
                ?>

                <!-- Photo grid -->
                <div class="card-columns">

                <?php
                foreach ($searchdata->result() as $row) {
                    $userid = $row->u_id;

                    $filename = $row->p_filename;
                    $picname = $row->p_name;
                    $pdetail = $row->p_detail;

                    $tag = $row->p_tag;
                    $ptag = explode(",",$tag);

                    $id = $row->p_id;
                    $uname = $row->u_name;
                    $upic = $row->u_profilepic;

                    $passdata = array(
                      'userid' => $userid,    
                      'id' => $id, 
                      'filename' => $filename, 
                      'picname' => $picname, 
                      'ptag' => $ptag,
                      'upic' => $upic,
                      'uname' => $uname
                    );

                    //echo '<br>'.$filename;
                    ?>
                    <div class="card">
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
                      $this->load->view('layouts/modal_view', $passdata);
                    ?>

                    <?php
              
                }
                ?>
                
                </div>  
                
                <?php
              }
              else
              {
        
                echo '<div class="container text-center mt-3"><h1>ไม่พบรูปภาพที่ต้องการ !!</h1></div>';
                
              }
            ?>
    </div>    

    <?php $this->load->view('layouts/footer'); ?>
    <?php $this->load->view('layouts/script_body'); ?>
</body>
</html>

