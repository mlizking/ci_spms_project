<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layouts/script_head'); ?>
    <title>SPMS</title>
</head>
<body>
    <?php $this->load->view('layouts/navbar'); ?>

    <div class="card-columns">
            <?php 
                if($fetch_data->num_rows() > 0)
                {
                  foreach ($fetch_data->result() as $row) {
                
                     $filename = $row->p_filename;
                     //echo '<br>'.$filename;
                     ?>
                     <div class="card">
                      <img src="../uploads/<?php echo $filename ?>" class="img-fluid card-img-top" alt="Responsive image">
                     </div>
                     <?php
                
                  }
                }
                else
                {
        
                    echo 'No Data Found!';
                
                }
            ?>
    </div>

    <?php $this->load->view('layouts/footer'); ?>
    <?php $this->load->view('layouts/script_body'); ?>
</body>
</html>

