<?php
class Profile_controller extends CI_Controller {

        public function index()
        {
            $uid = $this->session->userdata('userid');

            $this->load->model('profile_model');

            $data['user_data'] = $this->profile_model->selectuser_data($uid) ;

            $this->load->view('userprofile_view', $data);

            //echo $data;


                
        }
}