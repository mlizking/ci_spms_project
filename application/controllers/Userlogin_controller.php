<?php
class Userlogin_controller extends CI_Controller {

        public function index()
        {
            if($this->session->userdata('email') != '')
            {   
                redirect(site_url('home_controller'));
            }
            else
            {
                $this->load->view('login_view');
            }
            
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

        function login_validation()
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
                    redirect(site_url('userlogin_controller/checklogin'));

                    //$this->load->view('loginsuccess');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Invalid Username and Password');
                    redirect(site_url('userlogin_controller'));
                }

                
            }
            else
            {
                //false
                $this->index();
            }
        }

        function checklogin()
        {
            if($this->session->userdata('email') != '')
            {
                //echo '<h2>Welcome - '.$this->session->userdata('email').'</h2>';
                //echo '<label><a href="'.site_url('userlogin_controller/logout').'">Logout</a></label>';
                redirect(site_url('home_controller'));
            }
            else
            {
                redirect(site_url('userlogin_controller'));
            }
        }

        function logout()
        {
            $this->session->unset_userdata('email');
            redirect(site_url('userlogin_controller'));
        }










        function gg()
        {
            $this->load->view('sample_view');
        }
        function kk()
        {
            redirect(site_url('userlogin_controller/gg'));
        }


}