<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('layouts/script_head'); ?>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>
  <title>Manage user</title>
  
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
            <h1 class="h2">จัดการข้อมูลสมาชิก</h1>
          </div>
          <table id="user-table">
            <thead>
                <tr>
                  <td>ลำดับ</td>
                  <td>ชื่อ-นามสกุล</td>
                  <td>อีเมล์</td>
                  <td>ลบผู้ใช้</td>
                </tr>
            </thead>
              <tbody>
                <?php 
                if($fetch_data->num_rows() > 0){
                  foreach ($fetch_data->result() as $row) {
                ?>
                  <tr>
                    <td><?php echo $row->u_id;?></td>
                    <td><?php echo $row->u_name;?></td>
                    <td><?php echo $row->u_email;?></td>
                    <td>
                      <button type="button" class="btn btn-danger">x</button>
                    </td>
                  </tr>
                <?php
                  }
                }else{
                ?>
                <tr>
                  <td colspan="3">No Data Found!</td>
                </tr>
                <?php
                }
                ?>
              </tbody>
          </table> 
        </main>
      </div>
    </div>

  <?php $this->load->view('layouts/footer'); ?>
  <?php //$this->load->view('layouts/script_body'); ?>    
</body>
</html>

<script type="text/javascript">
  $(document).ready( function () {
    $('#user-table').DataTable();
  } );
</script>
