<?php

class Upload_model extends CI_Model
{
    function uploadfile($name, $filename, $uid, $tag, $detail)
    {
        // echo $name.' + '.$filename.' + '.$uid;
        $data = array(
            'p_name' => $name,
            'p_filename' => $filename,
            'p_detail' => $detail,
            'p_tag' => $tag,
            'u_id' => $uid
        );
        $this->db->insert('pictures', $data);
    }

    function uploadcoverfile($filename)
    {
        $userid = $this->session->userdata('userid');
        $this->db->set('u_coverpic', $filename);
        $this->db->where('u_id', $userid);
        $this->db->update('users');
    }
}