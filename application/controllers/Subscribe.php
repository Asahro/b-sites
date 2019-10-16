<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Subscribe extends CI_Controller {

	//--------------------------------------------------------- login
	public function simpandata()  
	{
		$data_insert = array(
            'email' => $this->input->post('email'),
        );
        $result = $this->modelsubscribe->bacadata($this->input->post('email'));
        if (count($result)){
    		return 0;        	
        }else{
	        $result = $this->modelsubscribe->tambahdata($data_insert);	
	        return 1;        	
        }
	}
}