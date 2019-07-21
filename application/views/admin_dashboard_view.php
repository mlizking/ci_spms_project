<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('layouts/script_head'); ?>
  <title>Dashboard</title>
  
</head>
<body>
  <?php 
    if($this->session->userdata('statusid') != '1')
      {   
        redirect(site_url('home_controller'));
      } 
  ?>
  <?php $this->load->view('layouts/navbar'); ?>

  
    <div class="container-fluid text-center">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>
      <div class="row justify-content-center mt-3">
        <div class="card text-white bg-info text-center mx-1">
          <div class="card-header">จำนวนผู้ใช้งานทั้งหมด</div>
          <div class="card-body">
            <h3 class="card-title"><?php echo $fetch_data->num_rows(); ?></h3>
          </div>
        </div>
        <div class="card text-white bg-success text-center mx-1">
          <div class="card-header">จำนวนรูปภาพทั้งหมด</div>
          <div class="card-body">
            <h3 class="card-title"><?php echo $allphoto->num_rows(); ?></h3>
          </div>
        </div>
      </div>
    </div>    



  <?php $this->load->view('layouts/footer'); ?>
  <?php $this->load->view('layouts/script_body'); ?>    
</body>
</html>
