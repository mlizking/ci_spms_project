<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layouts/script_head'); ?>
    <title>Result of <?php echo $title ?></title>
</head>
<body>
    <?php $this->load->view('layouts/navbar'); ?>
    
    <div class="container-fluid">
    <div class="container text-center mx-auto mb-3">
        <h1>Search complete!!</h1>
        <span class="badge badge-success">
          <h3>Result of 
            <span class="badge badge-light"><?php echo $title ?></span>
          </h3>
        </span>
        <span class="badge badge-success">
          <h3>has
            <span class="badge badge-light"><?php echo $searchdata->num_rows() ?></span> items .
          </h3
        </span>  
    </div>
        
            <?php
              if($searchdata->num_rows() > 0)
              { 
                ?>

                <!-- Photo grid -->
                <div class="card-columns">

                <?php
                foreach ($searchdata->result() as $row) {
                    
                    $filename = $row->p_filename;
                    $picname = $row->p_name;
                    $pdetail = $row->p_detail;

                    $tag = $row->p_tag;
                    $ptag = explode(",",$tag);

                    $id = $row->p_id;
                    $uname = $row->u_name;
                    $upic = $row->u_profilepic;

                    $passdata = array(
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
                      <img src="<?php echo base_url(); ?>uploads/<?php echo $filename ?>" class="img-fluid card-img-top" alt="Responsive image">
                      <div class="overlay text-center" data-toggle="modal" data-target="#imgModalCenter<?php echo $id ?>"><!-- Trigger Modal -->
                          <span><h1><?php echo $picname ?></h1></span>
                      </div>
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
        
                echo '<div class="container text-center"><span class="badge badge-danger mt-3 mb-3"><h1>No Data Found!!</h1></span></div>';
                
              }
            ?>
    </div>    

    <?php $this->load->view('layouts/footer'); ?>
    <?php $this->load->view('layouts/script_body'); ?>
</body>
</html>

