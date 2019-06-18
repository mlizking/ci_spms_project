<?php

class Home_model extends CI_Model
{
    function select_picturedata()
    {

        //select all
        $this->db->order_by("p_createtime", "desc");
        $query = $this->db->get('pictures');
        return $query;

    }

    function randomselect_picturedata()
    {

        //select random
        $this->db->order_by('rand()');
        $this->db->limit(5);
        $query = $this->db->get('pictures');
        return $query;
        
    }

    
}