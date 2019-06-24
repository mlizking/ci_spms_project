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
    

    <div class="container-fluid mt-3">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">จัดการข้อมูลรูปภาพ</h1>
      </div>
      <?php //echo $photodata->num_rows() ?>
      <table class="table table-dark">
        <thead class="thead-light">
          <tr class="text-center">
            <th scope="col">ID</th>
            <th scope="col">Photo</th>
            <th scope="col">Name</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>

        <?php 
        if($photodata->num_rows() > 0){
          foreach ($photodata->result() as $row) {
            $filename = $row->p_filename;
            $picname = $row->p_name;
            $picdetail = $row->p_detail;
            $id = $row->p_id;  
        ?>

          <tr class="text-center">
            <td><?php echo $id ?></td>
            <td><img src="<?php echo base_url(); ?>uploads/<?php echo $filename ?>" class="img-fluid" alt="Responsive image" width="100"></td>
            <td><?php echo $picname ?></td>

            <td>
              <button type="button" class="btn btn-warning text-light" data-toggle="modal" data-target="#editModal<?php echo $id ?>">edit</button>

              <!-- Edit Modal -->
              <div class="modal fade" id="editModal<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                          <div class="modal-header text-dark mx-auto">
                              <h5 class="modal-title" id="exampleModalLabel">แก้ไขข้อมูลรูปภาพ</h5>         
                          </div>
                          <?php echo form_open('admin_controller/photo_update/'.$id); ?> 
                          <!-- Form -->
                          <div class="modal-body text-dark">
                      
                                  <div class="form-group">
                                      <label for="editname">Picture name</label>
                                      <input type="text" class="form-control" name="editname" id="editname" placeholder="Enter picture name" value="<?php echo $picname ?>" required>
                                      <?php //echo form_error('loginemail'); ?>
                                  </div>
                                  <div class="form-group">
                                      <label for="editdetail">Picture detail</label>
                                      <input type="text" class="form-control" name="editdetail" id="editdetail" placeholder="Enter picture detail" value="<?php echo $picdetail ?>" required>
                                      <?php //echo form_error('loginemail'); ?>
                                  </div>
                                  
                                  <p class="mb-2"><?php //echo $this->session->flashdata("error"); ?></p>

                          </div>
                          <div class="modal-footer">
                              <button type="submit" class="btn btn-warning">Save changes</button>
                          </div>
                          </form>
                      </div>
                  </div>
              </div>

            </td>
            
            <td>

                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?php echo $id ?>">x</button>
                
                <!-- Delete Modal -->
                <div class="modal fade" id="deleteModal<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header text-dark mx-auto">
                        <h3>Do you want to delete "<?php echo $picname ?>" ?</h3>
                      </div>
                      <div class="modal-body">
                        <div class="img-container">
                          <img class="img-fluid" src="<?php echo base_url(); ?>uploads/<?php echo $filename ?>" alt="Responsive image">
                          <div class="overlay">
                            <span><h1>SPMS&copy;</h1></span>
                          </div>
                        </div>  
                      </div>
                      <div class="modal-footer mx-auto">
                        <a href="<?php echo site_url('admin_controller/photo_delete/'.$id.'/'.$filename) ?>">
                          <button type="button" class="btn btn-success">Yes</button>
                        </a>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                      </div>
                    </div>
                  </div>
                </div>

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

<style>
.img-container{
  position:relative;
  display:inline-block;
}
.img-container .overlay{
  position:absolute;
  top:0;
  left:0;
  width:100%;
  height:100%;
  background:rgb(0,0,0);
  opacity:0;
  transition:opacity 500ms ease-in-out;
}
.img-container:hover .overlay{
  opacity:0.5;
}
.overlay span{
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  color:#fff;
}
</style>
