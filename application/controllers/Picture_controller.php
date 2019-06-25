<?php
class Picture_controller extends CI_Controller {

        public function index()
        {
                
                redirect('home_controller');
                
        }
        function select_picture()
        {
            $this->load->view('picture_view');
            
        }
}