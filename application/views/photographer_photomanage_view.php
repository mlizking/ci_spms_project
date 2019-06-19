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
    if($this->session->userdata('statusid') != '2')
      {   
        redirect(site_url('home_controller'));
      } 
  ?>
  <?php $this->load->view('layouts/navbar'); ?>

    <div class="container-fluid">
      <?php //echo $photodata->num_rows() ?>
      <table class="table table-dark">
        <thead class="thead-light">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Photo</th>
            <th scope="col">Name</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>

        <?php 
        if($photodata->num_rows() > 0){
          foreach ($photodata->result() as $row) {
            $filename = $row->p_filename;
            $picname = $row->p_name;
            $id = $row->p_id;  
        ?>

          <tr>
            <td><?php echo $id ?></td>
            <td><img src="<?php echo base_url(); ?>uploads/<?php echo $filename ?>" class="img-fluid" alt="Responsive image" width="100"></td>
            <td><?php echo $picname ?></td>
            <td>
                <button type="button" class="btn btn-danger">x</button>
            </td>
          </tr>

        <?php 
          }
        } 
        ?>  
          
        </tbody>
      </table>  

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
