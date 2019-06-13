<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layouts/script_head'); ?>
    <title>Hello !!</title>
</head>
<body>
    <?php $this->load->view('layouts/navbar'); ?>
  
    
    <div class="img-container">
      <img class="img-fluid" src="https://scontent.fbkk2-6.fna.fbcdn.net/v/t1.0-9/64292033_2335808603109202_279387450806108160_n.jpg?_nc_cat=111&_nc_oc=AQl48ooEqqNV-WvHq69R07AEu0s7qeoSfNcEKUmzvMIA84MPw8VsWa6MaEYV2qk6imE&_nc_ht=scontent.fbkk2-6.fna&oh=6ff53a137da3efcad705d60dd288d4a0&oe=5D978DF7" alt="Responsive image" width="500">
      <div class="overlay" data-toggle="modal" data-target="#imgModalCenter">
        <span><h1>GG</h1></span>
      </div>
    </div>


    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="imgModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <img class="img-fluid" src="https://scontent.fbkk2-6.fna.fbcdn.net/v/t1.0-9/64292033_2335808603109202_279387450806108160_n.jpg?_nc_cat=111&_nc_oc=AQl48ooEqqNV-WvHq69R07AEu0s7qeoSfNcEKUmzvMIA84MPw8VsWa6MaEYV2qk6imE&_nc_ht=scontent.fbkk2-6.fna&oh=6ff53a137da3efcad705d60dd288d4a0&oe=5D978DF7" alt="Responsive image">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Download</button>
      </div>
    </div>
  </div>
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