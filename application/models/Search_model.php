<?php

class Search_model extends CI_Model
{
    function search_picturedata($search)
    {
        $this->db->like('p_name', $search, 'both'); $this->db->or_like('p_tag', $search, 'both');
        $query = $this->db->get('pictures');
        return $query;
    }
}