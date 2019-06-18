<?php
class Search_controller extends CI_Controller {

        function picture_search()
        {
            //echo $this->input->post('picsearch');
            $search = $this->input->post('picsearch');

            $this->load->model('search_model');
            $data['searchdata'] = $this->search_model->search_picturedata($search);
            $data['title'] = $this->input->post('picsearch');
            $this->load->view('picturefromsearch_view', $data);
        }
}