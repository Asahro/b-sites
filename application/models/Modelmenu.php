<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelmenu extends CI_Model{

    public function ambil_menu($role){
        $this->db->select('*');
        $this->db->from("admin_menu");
        $this->db->where('id_role', $role);
        $this->db->where('id_parent', 0);
        $this->db->order_by('urutan', 'asc');
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function ambil_submenu($id_menu){
        $this->db->select('*');
        $this->db->from("admin_menu");
        $this->db->where('id_parent', $id_menu);
        $this->db->order_by('urutan', 'asc');
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function menu_home(){
        $this->db->select('*');
        $this->db->from('web_menu');
        $this->db->where('status', 1);
        $this->db->order_by('urutan', 'asc');
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function spesial_menu_home(){
        $this->db->select('*');
        $this->db->from('web_menu');
        $this->db->where('status', 2);
        $this->db->order_by('urutan', 'asc');
        $data = $this->db->get()->result_array();
        return $data;
    }


        // $query->result();
        // $query->row_array();
        // $query->num_rows();

        // $this->db->get()->result_array();
        // return($this->db->UPDATE('admin', $newpassword));
        // $this->db->INSERT('proposal', $data_insert));
        
        // $this->db->where('id', $id_date);
        // $this->db->delete('events');
        
        // $this->db->select('*');
        // $this->db->from('events');
        // $this->db->where('id_proposal', $id_proposal);

        // $this->db->where('(id_lokasi_kegiatan = '.$id_location.') AND ((start BETWEEN "' . $start_time . '" AND "' . $end_time . '") OR (end BETWEEN "' . $start_time . '" AND "' . $end_time . '"))');
        // $this->db->limit(1);
        // $this->db->get();
        
        // $query=$this->db->get();
        // $query->result();
}
?>
