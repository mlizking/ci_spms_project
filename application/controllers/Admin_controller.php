<?php
class Admin_controller extends CI_Controller {
        
        
  
        public function index()
        {
                //$this->load->view('admin_dashboard_view');
                $this->load->model('admin_model');
                $data['fetch_data'] = $this->admin_model->fetch_user_data();
                $this->load->view('admin_dashboard_view', $data);
        }

        function user_manage()
        {
                $this->load->model('admin_model');
                $data['fetch_data'] = $this->admin_model->fetch_user_data();
                $this->load->view('admin_usermanage_view', $data);
        }

        function user_delete($userid)
        {
                //echo $userid.'GG';
                $this->load->model("admin_model");
                $this->admin_model->delete_user_data($userid);
                redirect(site_url('admin_controller/user_manage'));
        }
}