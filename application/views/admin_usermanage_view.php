<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('layouts/script_head'); ?>
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

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">จัดการข้อมูลสมาชิก</h1>
      </div>

      <table class="table table-sm table-dark">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">ชื่อ - นามสกุล</th>
                <th scope="col">อีเมล์</th>
                <th scope="col">สถานะ</th>
                <th scope="col">ลบผู้ใช้</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        if($fetch_data->num_rows() > 0){
          foreach ($fetch_data->result() as $row) {
        ?>
          <tr>
            <td><?php echo $row->u_id;?></td>
            <td><?php echo $row->u_name; $username = $row->u_name; ?></td>
            <td><?php echo $row->u_email;?></td>
            <td><?php echo $row->us_name;?></td>
            <td>
                <button type="button" class="btn btn-danger" OnClick="confirmDelete(<?php echo $row->u_id ?>,'<?php echo $username ?>')">x</button>
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

    </div>
    

  <?php $this->load->view('layouts/footer'); ?>
  <?php $this->load->view('layouts/script_body'); ?>    
</body>
</html>
<script>
  function confirmDelete(userid, username)
  {
    if(confirm("Do you want to delete '"+username+"' ?") == true)
    {
      window.location = 'user_delete/'+userid;
    }
  }
</script>
