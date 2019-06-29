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

    function random_relatepicture($tag)
    {
        $this->db->like('p_tag', $tag, 'both');
        $this->db->order_by('rand()');
        $this->db->limit(5);
        $query = $this->db->get('pictures');
        return $query;
    }
}