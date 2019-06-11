<?php

class Upload_controller extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('upload_view', array('error' => ' ' ));
                //$this->load->view('upload_view');
        }

        public function upload_validation()
        {
                $this->form_validation->set_rules('picName', 
                        'Picture name', 'trim|required');

                if ($this->form_validation->run())
                { 
                        // redirect(site_url('upload_controller/do_upload'));
                        $this->do_upload();
                }  
                else
                {
                        //redirect(site_url('upload_controller'));
                        $this->index();
                }     
        }

        public function do_upload()
        {
                
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5000;
                //$config['max_width']            = 1024;
                //$config['max_height']           = 768;

                

                $this->load->library('upload', $config);
                
                
                
                if ( ! $this->upload->do_upload('picFile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_view', $error);
                }
                else
                {
                        
                        //$data = array('upload_data' => $this->upload->data());
                        //$this->load->view('upload_success_view', $data);

                        $upload_data = $this->upload->data();

                        $picname = $this->input->post('picName');
                        $filename = $upload_data['file_name'];
                        $userid = $this->session->userdata('userid');

                        $this->load->model('upload_model');
                        $this->upload_model->uploadfile($picname, $filename, $userid);

                        echo $filename.' + '.$picname.' + '.$userid;

                }
 
        }
}
?>