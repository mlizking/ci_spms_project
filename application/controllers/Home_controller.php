<?php
class Home_controller extends CI_Controller {

        public function index()
        {
                
                // $this->load->model('home_model');
                // $picdata['fetch_data'] = $this->home_model->select_picturedata();

                // $this->load->view('home_view', $picdata);


                $this->load->model('home_model');

                $data['random_data'] = $this->home_model->randomselect_picturedata() ;
                // foreach ($random_data->result() as $row) {
                        
                // }
                //echo $random_data->num_rows();

                $data['fetch_data'] = $this->home_model->select_picturedata();
                $this->load->view('home_view', $data);
                
        }

        function picdownload($filename)
        {
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

        function test()
        {
                $this->load->view('test_view');
        }
}