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

    <div class="container-fluid">
      <div class="row">

      <?php $this->load->view('layouts/sidebar'); ?>  
      
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
          </div>

          <div class="card text-white bg-success text-center mb-3" style="max-width: 18rem;">
            <div class="card-header">จำนวนผู้ใช้งานทั้งหมด</div>
            <div class="card-body">
              <h3 class="card-title"><?php echo $fetch_data->num_rows(); ?></h3>
            </div>
          </div>


            
            

        </main>
      </div>
    </div>

  <?php $this->load->view('layouts/footer'); ?>
  <?php $this->load->view('layouts/script_body'); ?>    
</body>
</html>
