<?php

class Home_model extends CI_Model
{
    function select_picturedata()
    {
        $this->db->order_by("p_createtime", "desc");
        $query = $this->db->get('pictures');
        return $query;
    }
}