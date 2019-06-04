<?php
class Userlogin_controller extends CI_Controller {

        public function index()
        {
            $this->form_validation->set_rules('loginemail', 
                        'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('loginpassword', 
                        'Password', 'trim|required|min_length[8]');
            
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('login_view');
            }
            else
            {
                $this->load->view('loginsuccess');
            }
                
        }

        public function gg()
        {
            $this->load->view('sample_view');
        }
}