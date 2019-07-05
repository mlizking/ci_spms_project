<?php

class Photographer_model extends CI_Model
{
    function photo_manage($uid)
    {

        if($uid == '1')
        {
            //select all 
            $this->db->order_by("p_createtime", "desc");
            $query = $this->db->get('pictures');
            return $query;
        }
        else
        {
            //select all where
            $this->db->where('U_id', $uid);
            $this->db->order_by("p_createtime", "desc");
            $query = $this->db->get('pictures');
            return $query;
        }
        
    }

    function delete_photo($id)
    {
        $this -> db -> where('p_id', $id);
        $this -> db -> delete('pictures');
    }

    function update_photo($id, $name, $detail)
    {
        $this->db->set('p_name', $name);
        $this->db->set('p_detail', $detail);
        $this->db->where('p_id', $id);
        $this->db->update('pictures');
    }

}