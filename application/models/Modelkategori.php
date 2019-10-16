<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelkategori extends CI_Model{
    
    public function kategori_home(){
        $this->db->select('*');
        $this->db->from('footer_jaminan');
        $data = $this->db->get()->result_array();
        return $data;
    }
}
?>
