<?php

class main_model extends CI_Model
{
    function fetch_data()
    {
       $query = $this->db->get("users");
       return $query;
    }
}