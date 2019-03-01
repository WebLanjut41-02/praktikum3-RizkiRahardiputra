<?php

class pemesanan_model extends CI_model{
    public function  getAllmenu()
    {
        $this->db->from('menu');
        $query = $this->db->get();

       return $query->result();
    }

    public function adduserUser($data)
    {
    
        $this->db->insert('user', $data);

    }

    public function getkodemenu($kode)
    {
        $this->db->from('menu');
        $this->db->where('kodemenu',$kode);

        $query = $this->db->get();
        return $query->result();
    }
}


    ?>