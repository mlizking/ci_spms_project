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
                $this->form_validation->set_rules('picTag', 
                        'Picture tag', 'required');
                $this->form_validation->set_rules('picDetail', 
                        'Picture detail', 'required');          

                if ($this->form_validation->run())
                { 
                        // redirect(site_url('upload_controller/do_upload'));
                        //echo $this->input->post('picName');
                        //echo $this->input->post('picTag');
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

                date_default_timezone_set("Asia/Bangkok");
                $u_id = $this->session->userdata('userid');
                $u_name = $this->session->userdata('name');
                $newfilename = $u_id.$u_name.date("Ymd_").date("HisA");
                $newfilename2 = preg_replace('/\s+/','',$newfilename);
                //echo $newfilename2;
                
                $config['file_name']            = $newfilename2;
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'jpeg|jpg|png';
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
                        $picdetail = $this->input->post('picDetail');
                        $pictag = $this->input->post('picTag');
                        $filename = $upload_data['file_name'];
                        $userid = $this->session->userdata('userid');

                        $this->load->model('upload_model');
                        $this->upload_model->uploadfile($picname, $filename, $userid, $pictag, $picdetail);

                        //echo $filename.' + '.$picname.' + '.$userid;
                        redirect(site_url('home_controller'));

                }
 
        }

        function do_uploadcover()
        {
                $oldfile = $this->session->userdata('usercoveroic');
                $oldpath = './uploads/cover_picture/'.$oldfile;

                date_default_timezone_set("Asia/Bangkok");
                $u_id = $this->session->userdata('userid');
                $u_name = $this->session->userdata('name');
                $newfilename = $u_id.$u_name.'coverpic'.date("Ymd_").date("HisA");
                $newfilename2 = preg_replace('/\s+/','',$newfilename);
                
                $config['file_name']            = $newfilename2;
                $config['upload_path']          = './uploads/cover_picture/';
                $config['allowed_types']        = 'jpeg|jpg|png';
                $config['max_size']             = 5000;

                $this->load->library('upload', $config);
                unlink($oldpath);
                if ( ! $this->upload->do_upload('coverFile'))
                {
                        $errortext = $this->upload->display_errors();
                        $replace_order = array('<p>', '</p>');
                        $error = str_replace($replace_order, '', $errortext);
                        $urlpath = 'profile_controller/witherror/'.$error;

                        // echo $urlpath;
                        //redirect(site_url('profile_controller/witherror/'.$text['error']));
                        redirect(site_url($urlpath));
                }
                else
                {
                        $upload_data = $this->upload->data();

                        $filename = $upload_data['file_name'];

                        $this->load->model('upload_model');
                        $this->upload_model->uploadcoverfile($filename);

                        redirect(site_url('profile_controller'));
                }
        }

}
?>