<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Admin extends CI_Controller {

	//--------------------------------------------------------- login
	public function index()  
	{
		$this->load->view('software');	
	}
}