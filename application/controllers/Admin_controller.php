<?php
class Admin_controller extends CI_Controller {

        public function index()
        {
                //$this->load->view('admin_dashboard_view');

                //$this->load->model('main_model');
                //$data['fetch_data'] = $this->main_model->fetch_data();
                // $this->load->view('admin_dashboard_view', $data);
                $this->load->view('admin_dashboard_view');
        }

        function user_manage()
        {
                $this->load->model('main_model');
                $data['fetch_data'] = $this->main_model->fetch_data();
                $this->load->view('admin_usermanage_view', $data);
        }

        function user_delete()
        {
                echo 'gg';
        }
}