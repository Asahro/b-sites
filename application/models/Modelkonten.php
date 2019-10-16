<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelkonten extends CI_Model{
    
    public function get_all_konten($table){
        $this->db->select('*');
        $this->db->from($table);
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function get_konten($table, $id){
        $this->db->select('*');
        $this->db->where('id', $id);
        $this->db->from($table);
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function create_konten(){
        $data = $this->db->INSERT('admin_user', $data);
        return $data;
    }

    public function update_konten(){
        return $data;
    }

    public function delete_konten($table, $id){
        $this->db->where('id', $id);
        return ($this->db->delete($table));
    } 

        // $query->result();
        // $query->row_array();
        // $query->num_rows();

        // $this->db->get()->result_array();
        // return($this->db->UPDATE('admin', $newpassword));
        
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
