<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// session_start();
date_default_timezone_set("Asia/Jakarta");
require APPPATH . 'libraries/REST_Controller.php';

class Api extends REST_Controller{

	public function __construct(){
	    parent::__construct();
	}

	public function index_get(){
	    $response['status']="success";
	    $response['error']=false;
	    $response['data']='Rest Api Sempel';
	    $this->response($response);
	}
}