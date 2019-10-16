<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelsosial extends CI_Model{
    
    public function daftar_sosial(){
        $this->db->select('*');
        $this->db->from('web_sosial_media');
        $data = $this->db->get()->result_array();
        return $data;
    }
}
?>
