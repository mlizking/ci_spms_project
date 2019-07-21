<?php
class Admin_controller extends CI_Controller {
        
        
  
        public function index()
        {
                //$this->load->view('admin_dashboard_view');
                $this->load->model('admin_model');
                $data['fetch_data'] = $this->admin_model->fetch_user_data();
                $data['allphoto'] = $this->admin_model->allphoto();
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

        function photo_manage()
        {       
                $id = $this->session->userdata('userid');
                $this->load->model('photographer_model');
                $data['photodata'] = $this->photographer_model->photo_manage($id);
                $this->load->view('admin_photomanage_view', $data);
        }

        function photo_delete($pid, $file)
        {
                //echo $file.' GG '.$pid.'<br>';

                $path = './uploads/'.$file;
                //echo $path;

                $this->load->model("photographer_model");
                $this->photographer_model->delete_photo($pid);

                unlink($path);

                //$this->photo_manage();
                redirect(site_url('admin_controller/photo_manage'));
        }

        function photo_update($pid)
        {
            $pname = $this->input->post('editname');
            $pdetail = $this->input->post('editdetail');

            $this->load->model('photographer_model');
            $this->photographer_model->update_photo($pid, $pname, $pdetail);
            
            //$this->photo_manage();  
            
            redirect(site_url('admin_controller/photo_manage'));
                
            //echo $pid.' + '.$this->input->post('editname');         
        }
}