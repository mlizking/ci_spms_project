<?php

class Profile_model extends CI_Model
{
    function selectuser_data($id)
    {
        //select where
        $this->db->join('userstatus', 'users.us_id = userstatus.us_id', 'left');
        $this->db->where("users.u_id", $id);
        $query = $this->db->get('users');
        return $query;
    }

    function updateuser_data($id, $name)
    {
        $this->db->set('u_name', $name);
        $this->db->where('u_id', $id);
        $this->db->update('users');
    }
}