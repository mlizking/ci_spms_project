<?php
class Picture_controller extends CI_Controller {

        public function index()
        {
                
                redirect('home_controller');
                
        }
        function select_picture($picid)
        {
                $this->load->model('picture_model');
                $data['picdata'] = $this->picture_model->select_picture($picid);

                //$data['picid'] = $picid;
                $this->load->view('picture_view', $data);
            
        }
}