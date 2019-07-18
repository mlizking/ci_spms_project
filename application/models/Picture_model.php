<?php

class Picture_model extends CI_Model
{
    function select_picture($id)
    {
        $this->db->join('users', 'pictures.u_id = users.u_id', 'left');
        $this->db->where('p_id', $id);
        $query = $this->db->get('pictures');
        return $query;
    }

    function random_relatepicture($tag)
    {
        $this->db->like('p_tag', $tag, 'both');
        $this->db->order_by('rand()');
        $this->db->limit(5);
        $query = $this->db->get('pictures');
        return $query;
    }

    function allselect()
    {
        $query = $this->db->get('pictures');
        return $query;
    }

    function select_permissioncomment($pid)
    {
        $this->db->join('users', 'permissioncomment.u_id = users.u_id', 'left');
        $this->db->where('permissioncomment.p_id', $pid);
        $this->db->order_by('pc_id', 'desc');
        $query = $this->db->get('permissioncomment');
        return $query;
    }

    function insert_permissioncomment($insertdata)
    {
        $this->db->insert('permissioncomment', $insertdata);
    }

    function update_pview($pid, $pview)
    {
        $pview = $pview + 1;
        $this->db->set('p_view', $pview);
        $this->db->where('p_id', $pid);
        $this->db->update('pictures');
    }

    function select_pview($uid)
    {
        $this->db->select('p_view, p_download');
        $this->db->where('u_id', $uid);
        $query = $this->db->get('pictures');
        return $query;
    }

    function update_dowload($pid)
    {
        $this->db->select('p_download');
        $this->db->where('p_id', $pid);
        $query = $this->db->get('pictures');
        foreach ($query->result() as $row) {
            $pdownload = $row->p_download;
        }
        // echo $pdownload;
        $pdownload2 = $pdownload + 1;
        $this->db->set('p_download',$pdownload2);
        $this->db->where('p_id', $pid);
        $this->db->update('pictures');
    }

    function select_like($pid)
    {
        $wheredata = array( 
            'p_id' => $pid
        );
        $this->db->where($wheredata);
        $query = $this->db->get('piclike');
        return $query;
    }

    function like_picture($uid, $pid)
    {
        $setdata = array(
            'u_id' => $uid,
            'p_id' => $pid
        );
        $this->db->insert('piclike', $setdata);
    }
    
    function unlike_picture($uid, $pid)
    {
        $data = array(
            'u_id' => $uid,
            'p_id' => $pid
        );
        $this->db->delete('piclike', $data);
    }

    function select_plike($uid)
    {
        $this->db->join('pictures', 'piclike.p_id = pictures.p_id', 'left');
        $this->db->where('pictures.u_id', $uid);
        $query = $this->db->get('piclike');
        return $query;
    }

    function update_photo($pid, $pname, $ptag, $pdetail)
    {
        $setdata = array(
            'p_name' => $pname,
            'p_detail' => $pdetail,
            'p_tag' => $ptag
        );
        $this->db->set($setdata);
        $this->db->where('p_id', $pid);
        $this->db->update('pictures');
    }

    function delete_picture($pid)
    {
        $deletedata = array(
            'p_id' => $pid
        );
        $this->db->delete('piclike', $deletedata);
        $this->db->delete('pictures', $deletedata);
    }

}