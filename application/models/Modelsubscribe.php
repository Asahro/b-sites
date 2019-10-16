<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelsubscribe extends CI_Model{
    
    public function tambahdata($data){
        $data = $this->db->INSERT('web_subscribe', $data);
        return $data;
    }

    public function bacadata($email){
        $this->db->select('*');
        $this->db->from('web_subscribe');
        $this->db->where('email', $email);
        return $this->db->get()->result_array();
    }

}
?>
