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

        function picdownload($filename, $picid)
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

                $this->load->model('picture_model');
                $this->picture_model->update_dowload($picid);

                force_download(APPPATH.'../uploads/'.$filename, NULL);
                //echo APPPATH.'../uploads/'.$pic;


                //echo '<img class="img-fluid" src="'.$path.'" alt="Responsive image">';
                //echo '<img class="img-fluid" src="../uploads/'.$pic.'" alt="Responsive image">';

        }

        function like_picture($pid)
        {
                if($this->session->userdata('userid') == ''){
                        $this->session->set_flashdata('error', 'กรุณาเข้าสู่ระบบ !!');
                        redirect(site_url('userlogin_controller'));
                }
                $uid = $this->session->userdata('userid');
                $this->load->model('picture_model');
                $this->picture_model->like_picture($uid, $pid);
                redirect(site_url('picture_controller/select_picture/'.$pid));
        }

        function unlike_picture($pid)
        {
                $uid = $this->session->userdata('userid');
                $this->load->model('picture_model');
                $this->picture_model->unlike_picture($uid, $pid);
                redirect(site_url('home_controller'));
        }

        function edit_picture($pid)
        {
                $this->load->model('picture_model');
                $data['picdata'] = $this->picture_model->select_picture($pid);
                $this->load->view('editpicture_view', $data);
        }

        function update_photo($pid)
        {
            $pname = $this->input->post('editName');
            $ptag = $this->input->post('editTag');
            $pdetail = $this->input->post('editDetail');

            $this->load->model('picture_model');
            $this->picture_model->update_photo($pid, $pname, $ptag, $pdetail);
            
            
            redirect(site_url('picture_controller/select_picture/'.$pid));
      
            //echo $pid.' + '.$pname.$ptag.$pdetail;
                
        }

        function delete_picture($pid)
        {
                $this->load->model('picture_model');
                $this->picture_model->delete_picture($pid);
                redirect(site_url('profile_controller'));
        }

}