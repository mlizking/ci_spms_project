<?php

class Photographer_model extends CI_Model
{
    function photo_manage($uid)
    {
        //select all where
        $this->db->where('U_id', $uid);
        $this->db->order_by("p_createtime", "desc");
        $query = $this->db->get('pictures');
        return $query;
    }
}