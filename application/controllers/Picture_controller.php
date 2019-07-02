<?php
class Picture_controller extends CI_Controller {

        public function index()
        {
                
                redirect(site_url('home_controller'));
                
        }

        function select_picture($picid)
        {
                $this->load->model('picture_model');
                $data['picdata'] = $this->picture_model->select_picture($picid);

                //$data['picid'] = $picid;
                $this->load->view('picture_view', $data);
            
        }
        
        function insertpermissioncomment($pid)
        {
                if($this->session->userdata('userid') == ''){
                        $this->session->set_flashdata('error', 'กรุณาเข้าสู่ระบบ !!');
                        redirect(site_url('userlogin_controller'));
                }

                $uid = $this->session->userdata('userid');
                $permissiontext = $this->input->post('picTextarea');

                $insertdata = array(
                        pc_detail => $permissiontext,
                        p_id => $pid,
                        u_id => $uid
                );

                $this->load->model('picture_model');
                $this->picture_model->insert_permissioncomment($insertdata);
                redirect('picture_controller/select_picture/'.$pid);
                
                 
        }

        function picdownload($filename)
        {
                if($this->session->userdata('userid') == ''){
                        $this->session->set_flashdata('error', 'กรุณาเข้าสู่ระบบ !!');
                        redirect(site_url('userlogin_controller'));
                }
                // $data = array(
                //         $path => $pic
                // );
                //$data['path'] = $pic ;
                //$this->load->view('test_view', $data);
                //echo $pic ;
                //$path = base_url().'uploads/'.$pic;
                //echo $path;


                force_download(APPPATH.'../uploads/'.$filename, NULL);
                //echo APPPATH.'../uploads/'.$pic;


                //echo '<img class="img-fluid" src="'.$path.'" alt="Responsive image">';
                //echo '<img class="img-fluid" src="../uploads/'.$pic.'" alt="Responsive image">';

        }

}