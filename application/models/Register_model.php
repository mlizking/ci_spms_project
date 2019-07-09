<?php

class Register_model extends CI_Model
{
    // function index()
    // {
    //     echo 'gg';
    // }
    function register($fullname, $email, $password)
    {
        //echo $fullname.' '.$email.' '.$password;
        $data = array(
            'u_email' => $email,
            'u_password' => $password,
            'u_name' => $fullname,
            'u_address' => 'แก้ไขที่อยู่',
            'us_id' => 3
        );
        $this->db->insert('users', $data);
    }
}