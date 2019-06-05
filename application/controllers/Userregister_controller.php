<?php
class Userregister_controller extends CI_Controller {

        public function index()
        {
            if($this->session->userdata('email') != '')
            {   
                redirect(site_url('home_controller'));
            }
            else
            {
                $this->load->view('register_view');
            }
                
        }

        function register_validation()
        {
            $this->form_validation->set_rules('registername', 
                        'Full name', 'trim|required');
            $this->form_validation->set_rules('registeremail', 
                        'Email', 'trim|required|valid_email|is_unique[users.u_email]');
            $this->form_validation->set_rules('registerpassword', 
                        'Password', 'trim|required|min_length[8]');
            $this->form_validation->set_rules('registerpassconf', 
                        'Confirm password', 'trim|required|matches[registerpassword]|min_length[8]');
            
            if ($this->form_validation->run())
            {   
                $fullname = $this->input->post('registername');
                $email = $this->input->post('registeremail');
                $password = $this->input->post('registerpassword');

                //echo $fullname.' '.$email.' '.$password;

                $this->load->model('register_model');
                $this->register_model->register($fullname, $email, $password);
                redirect(site_url('userlogin_controller'));
            }
            else
            {
                $this->index();
            }
        }
}