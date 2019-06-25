<?php

class Picture_model extends CI_Model
{
    function select_picture($id)
    {
        $this->db->join('users', 'pictures.u_id = users.u_id', 'left');
        $this->db->where('p_id', $id);
        $query = $this->db->get('pictures');
        return $query;
    }
}