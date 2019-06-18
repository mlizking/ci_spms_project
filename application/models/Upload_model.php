<?php

class Upload_model extends CI_Model
{
    function uploadfile($name, $filename, $uid, $tag)
    {
        // echo $name.' + '.$filename.' + '.$uid;
        $data = array(
            'p_name' => $name,
            'p_filename' => $filename,
            'p_tag' => $tag,
            'u_id' => $uid
        );
        $this->db->insert('pictures', $data);
    }
}