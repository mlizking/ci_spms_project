<?php
class Photographer_controller extends CI_Controller {

        public function index()
        {
                
                $this->load->view('photographer_view');
                
        }
        function picdownload($pic)
        {
                // $data = array(
                //         $path => $pic
                // );
                //$data['path'] = $pic ;
                //$this->load->view('test_view', $data);
                //echo $pic ;
                //$path = base_url().'uploads/'.$pic;
                //echo $path;


                force_download(APPPATH.'../uploads/'.$pic, NULL);
                //echo APPPATH.'../uploads/'.$pic;


                //echo '<img class="img-fluid" src="'.$path.'" alt="Responsive image">';
                //echo '<img class="img-fluid" src="../uploads/'.$pic.'" alt="Responsive image">';

        }

        function manage_photo()
        {       
                $id = $this->session->userdata('userid');
                $this->load->model('photographer_model');
                $data['photodata'] = $this->photographer_model->photo_manage($id);
                $this->load->view('photographer_photomanage_view', $data);
        }

        function delete_photo($pid, $file)
        {
                //echo $file.' GG '.$pid.'<br>';

                $path = './uploads/'.$file;
                //echo $path;

                $this->load->model("photographer_model");
                $this->photographer_model->delete_photo($pid);

                unlink($path);

                //$this->manage_photo();
                redirect(site_url('admin_controller/manage_photo'));
        }

        function update_photo($pid)
        {
            $pname = $this->input->post('editname');

            $this->load->model('photographer_model');
            $this->photographer_model->update_photo($pid, $pname);
            
            //$this->manage_photo();
            redirect(site_url('admin_controller/manage_photo'));
      
            //echo $pid.' + '.$this->input->post('editname');
                
        }
}