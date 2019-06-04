<?php

class Login_model extends CI_Model
{
    function can_login($email, $password)
    {
        $this->db->where('u_email', $email);
        $this->db->where('u_password', $username);
        $query = $this->db->get('users');

        if($query->num_rows() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}