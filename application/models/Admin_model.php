<?php

class admin_model extends CI_Model
{
    function fetch_user_data()
    {
       //$query = $this->db->get("users");
       $query = $this->db->query("select * from users LEFT JOIN userstatus ON users.us_id = userstatus.us_id");
       return $query;
    }

    function delete_user_data($id)
    {
        $this -> db -> where('u_id', $id);
        $this -> db -> delete('users');
    }
}