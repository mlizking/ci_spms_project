<?php

class Follow_model extends CI_Model
{
    function select_data($uid, $fuid)
    {
        $wheredata = array(
            'u_id' => $uid, 
            'fu_id' => $fuid
        );
        $this->db->where($wheredata);
        $query = $this->db->get('follow');
        return $query;
    }

    function set_follow($uid, $fuid)
    {
        $data = array(
            'u_id' => $uid,
            'fu_id' => $fuid
        );
        $this->db->insert('follow', $data);
    }

    function unset_follow($uid, $fuid)
    {
        $data = array(
            'u_id' => $uid,
            'fu_id' => $fuid
        );
        $this->db->delete('follow', $data);
    }

    function follower_count($uid)
    {
        $wheredata = array(
            'fu_id' => $uid
        );
        $this->db->where($wheredata);
        $query = $this->db->get('follow');
        return $query;
    }
}