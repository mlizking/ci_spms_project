<?php
class Photographer_controller extends CI_Controller {

        public function index()
        {
                
                $this->load->view('photographer_view');
                
        }
        function picdownload($pic)
        {
                // $data = array(
                //         $path => $pic
                // );
                //$data['path'] = $pic ;
                //$this->load->view('test_view', $data);
                //echo $pic ;
                //$path = base_url().'uploads/'.$pic;
                //echo $path;


                force_download(APPPATH.'../uploads/'.$pic, NULL);
                //echo APPPATH.'../uploads/'.$pic;


                //echo '<img class="img-fluid" src="'.$path.'" alt="Responsive image">';
                //echo '<img class="img-fluid" src="../uploads/'.$pic.'" alt="Responsive image">';

        }

        function Manage_photo()
        {       
                $id = $this->session->userdata('userid');
                $this->load->model('photographer_model');
                $data['photodata'] = $this->photographer_model->photo_manage($id);
                $this->load->view('photographer_photomanage_view', $data);
        }
}