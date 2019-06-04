<?php

class Login_model extends CI_Model
{
    function can_login($email, $password)
    {
        $this->db->where('u_email', $email);
        $this->db->where('u_password', $password);
        $query = $this->db->get('users');

        if($query->num_rows() > 0)
        {
            //SELECT * FROM `users` WHERE u_email = 'kkkk@kkkk.com'
            return true;
        }
        else
        {
            return false;
        }
    }
}