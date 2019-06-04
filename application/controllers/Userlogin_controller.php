<?php
class Userlogin_controller extends CI_Controller {

        public function index()
        {
            $this->load->view('login_view');
            // $this->form_validation->set_rules('loginemail', 
            //             'Email', 'trim|required|valid_email');
            // $this->form_validation->set_rules('loginpassword', 
            //             'Password', 'trim|required|min_length[8]');
            
            // if ($this->form_validation->run() == FALSE)
            // {
            //     $this->load->view('login_view');
            // }
            // else
            // {
            //     $this->load->view('loginsuccess');
            // }
                
        }

        public function login_validation()
        {
            $this->form_validation->set_rules('loginemail', 
                        'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('loginpassword', 
                        'Password', 'trim|required|min_length[8]');
            
            if ($this->form_validation->run())
            {
                //true
                $email = $this->input->post('loginemail');
                $password = $this->input->post('loginpassword');
                //model function
                $this->load->model('login_model');
                if($this->login_model->can_login($email, $password))
                {
                    $session_data = array(
                        'email' => $email
                    );
                    $this->session->set_userdata($session_data);
                    //redirect();
                }

                $this->load->view('loginsuccess');
            }
            else
            {
                //false
                $this->index();
            }
        }

        public function gg()
        {
            $this->load->view('sample_view');
        }
        public function kk()
        {
            redirect(site_url('userlogin_controller/gg'));
        }


}