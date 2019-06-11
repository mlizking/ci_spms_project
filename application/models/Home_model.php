<?php

class Home_model extends CI_Model
{
    function select_picturedata()
    {
        $query = $this->db->get('pictures');
        return $query;
    }
}