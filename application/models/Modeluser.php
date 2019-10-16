<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelsubscribe extends CI_Model{
    public function register($data){
    	$data = $this->db->INSERT('user_list', $data);
    }
}
?>