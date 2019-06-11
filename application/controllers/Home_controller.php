<?php
class Home_controller extends CI_Controller {

        public function index()
        {
                // $this->load->model('home_model');
                // $picdata['fetch_data'] = $this->home_model->select_picturedata();

                // $this->load->view('home_view', $picdata);


                $this->load->model('home_model');
                $data['fetch_data'] = $this->home_model->select_picturedata();
                $this->load->view('home_view', $data);
                
        }
}