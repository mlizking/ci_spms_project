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
            'u_profilepic' => '1000x1000.png',
            'u_coverpic' => '3000x3000.png',
            'us_id' => 3
        );
        $this->db->insert('users', $data);
    }
}