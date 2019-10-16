<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelslider extends CI_Model{
    
    public function ambil_slider(){
        $this->db->select('*');
        $this->db->from('web_slider');
        $data = $this->db->get()->result_array();
        return $data;
    }
    public function ambil_slider_home($status){
        $this->db->select('*');
        $this->db->from('web_slider');
        $this->db->where('status', $status);
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
