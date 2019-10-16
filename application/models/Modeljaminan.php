<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modeljaminan extends CI_Model{
    
    public function daftar_jaminan(){
        $this->db->select('*');
        $this->db->from('web_jaminan');
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function tambahjaminan($data){
        $data = $this->db->INSERT('web_jaminan', $data);
        return $data;
    }
}
?>
