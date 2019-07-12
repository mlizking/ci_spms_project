<?php
class Profile_controller extends CI_Controller {

        public function index()
        {
            $uid = $this->session->userdata('userid');

            $this->load->model('profile_model');
            $data['user_data'] = $this->profile_model->selectuser_data($uid);
            $data['fetch_data'] = $this->profile_model->selectuser_photo($uid);

            $this->load->model('follow_model');
            $data['followcount'] = $this->follow_model->follower_count($uid);

            $data['error'] = '';
            
            $this->load->view('userprofile_view', $data);

            //echo $data;
       
        }

        public function witherror($error)
        {
            $uid = $this->session->userdata('userid');

            $this->load->model('profile_model');
            $data['user_data'] = $this->profile_model->selectuser_data($uid);
            $data['fetch_data'] = $this->profile_model->selectuser_photo($uid);

            $this->load->model('follow_model');
            $data['followcount'] = $this->follow_model->follower_count($uid);

            $data['error'] = str_replace('%20', ' ', $error);

            // echo $data['error'];
            $this->load->view('userprofile_view', $data);
        }

        function edit_userprofile()
        {
            $uid = $this->session->userdata('userid');
            $uname = $this->input->post('editname');

            $this->load->model('profile_model');
            $this->profile_model->updateuser_data($uid, $uname);
            
            //$this->index();
            redirect(site_url('profile_controller'));            
        }
        
        function photographer_profile($uid)
        {
            $this->load->model('profile_model');
            $data['user_data'] = $this->profile_model->selectuser_data($uid) ;
            $data['fetch_data'] = $this->profile_model->selectuser_photo($uid);

            $this->load->model('follow_model');
            $data['followcount'] = $this->follow_model->follower_count($uid);

            $data['error'] = '';

            $this->load->view('userprofile_view', $data);
        }

        function update_data()
        {
            $this->form_validation->set_rules('editname', 
                'Full name', 'trim|required');
            $this->form_validation->set_rules('editaddress', 
                'Address', 'trim|required');
            $this->form_validation->set_rules('edittel', 
                'Phone number', 'trim|required|min_length[10]');
            
            if($this->form_validation->run())
            {  
                $fullname = $this->input->post('editname');
                $address = $this->input->post('editaddress');
                $tel = $this->input->post('edittel');

                $this->load->model('profile_model');
                $this->profile_model->updateprofile_data($fullname, $address, $tel);
                redirect(site_url('profile_controller'));   
            }
            else
            {
                $this->index();
            }
        }
}