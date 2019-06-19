<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('layouts/script_head'); ?>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>
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
      
      

    </div>

  <?php $this->load->view('layouts/footer'); ?>
  <?php $this->load->view('layouts/script_body'); ?>    
</body>
</html>

<!-- <script type="text/javascript">
  $(document).ready( function () {
    $('#user-table').DataTable();
  } );
</script> -->
