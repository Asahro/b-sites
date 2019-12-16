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



	// API CRUD LOGO
	public function ambil_logo_get(){
		$optional = $this->parameter();
		$data = $this->modeladmin->ambil_data("admin_logo", $optional);
		if(count($data)){
		    $response['status']="success";
		    $response['error']=false;
		    $response['data']=$data;
		    $this->response($response);
		}else{
		    $response['status']="failed";
		    $response['error']=true;
		    $response['data']='Gagal Tambah Logo';
		    $this->response($response);
		}
	}

	public function tambah_logo_post(){
		$status = $this->modeladmin->tambah_data("admin_logo", $_POST, "Logo");
		if($status){
		    $response['status']="success";
		    $response['error']=false;
		    $response['data']='Berhasil Tambah Logo';
		    $this->response($response);
		}else{
		    $response['status']="failed";
		    $response['error']=true;
		    $response['data']='Gagal Tambah Logo';
		    $this->response($response);
		}
	}

	public function hapus_logo_post(){
		$status = $this->modeladmin->hapus_data("admin_logo", $_POST, "Logo");
		if($status){
		    $response['status']="success";
		    $response['error']=false;
		    $response['data']='Berhasil Hapus Logo';
		    $this->response($response);
		}else{
		    $response['status']="failed";
		    $response['error']=true;
		    $response['data']='Gagal Hapus Logo';
		    $this->response($response);
		}
	}

	public function ubah_logo_post(){
		$data = array(
            "nama" => $_POST['nama'],
            "data" => $_POST['data'],
        );
		$status = $this->modeladmin->ubah_data("admin_logo", $data, "Logo", $_POST['id']);
		if($status){
		    $response['status']="success";
		    $response['error']=false;
		    $response['data']='Berhasil Ubah Logo';
		    $this->response($response);
		}else{
		    $response['status']="failed";
		    $response['error']=true;
		    $response['data']='Gagal Ubah Logo';
		    $this->response($response);
		}
	}







	// API CRUD Komponen
	public function ambil_komponen_get(){
		$optional = $this->parameter();
		$data = $this->modeladmin->ambil_data("page_komponen", $optional);
		if(count($data)){
		    $response['status']="success";
		    $response['error']=false;
		    $response['data']=$data;
		    $this->response($response);
		}else{
		    $response['status']="failed";
		    $response['error']=true;
		    $response['data']='Gagal Tambah Logo';
		    $this->response($response);
		}
	}

	public function tambah_komponen_post(){
		$status = $this->modeladmin->tambah_data("page_komponen", $_POST, "Komponen");
		if($status){
		    $response['status']="success";
		    $response['error']=false;
		    $response['data']='Berhasil Tambah Logo';
		    $this->response($response);
		}else{
		    $response['status']="failed";
		    $response['error']=true;
		    $response['data']='Gagal Tambah Logo';
		    $this->response($response);
		}
	}

	public function hapus_komponen_post(){
		$status = $this->modeladmin->hapus_data("page_komponen", $_POST, "Komponen");
		if($status){
		    $response['status']="success";
		    $response['error']=false;
		    $response['data']='Berhasil Hapus Komponen';
		    $this->response($response);
		}else{
		    $response['status']="failed";
		    $response['error']=true;
		    $response['data']='Gagal Hapus Komponen';
		    $this->response($response);
		}
	}

	public function ubah_komponen_post(){
		$status = $this->modeladmin->ubah_data("page_komponen", $_POST, "Komponen", $_POST['id']);
		if($status){
		    $response['status']="success";
		    $response['error']=false;
		    $response['data']='Berhasil Ubah Logo';
		    $this->response($response);
		}else{
		    $response['status']="failed";
		    $response['error']=true;
		    $response['data']='Gagal Ubah Logo';
		    $this->response($response);
		}
	}



	// API CRUD Menu Admin
	public function ambil_menu_admin_get(){
		// $optional = $this->parameter();
		// $data = $this->modeladmin->ambil_data("page_menu_admin", $optional);
        $data = $this->modeladmin->ambil_menu_all('admin_menu');
		if(count($data)){
		    $response['status']="success";
		    $response['error']=false;
		    $response['data']=$data;
		    $this->response($response);
		}else{
		    $response['status']="failed";
		    $response['error']=true;
		    $response['data']='Gagal Ambil Menu Admin';
		    $this->response($response);
		}
	}

	public function tambah_menu_admin_post(){
		$status = $this->modeladmin->tambah_data("page_menu_admin", $_POST, "menu_admin");
		if($status){
		    $response['status']="success";
		    $response['error']=false;
		    $response['data']='Berhasil Tambah Logo';
		    $this->response($response);
		}else{
		    $response['status']="failed";
		    $response['error']=true;
		    $response['data']='Gagal Tambah Logo';
		    $this->response($response);
		}
	}

	public function hapus_menu_admin_post(){
		$status = $this->modeladmin->hapus_data("page_menu_admin", $_POST, "menu_admin");
		if($status){
		    $response['status']="success";
		    $response['error']=false;
		    $response['data']='Berhasil Hapus menu_admin';
		    $this->response($response);
		}else{
		    $response['status']="failed";
		    $response['error']=true;
		    $response['data']='Gagal Hapus menu_admin';
		    $this->response($response);
		}
	}

	public function ubah_menu_admin_post(){
		$status = $this->modeladmin->ubah_data("page_menu_admin", $_POST, "menu_admin", $_POST['id']);
		if($status){
		    $response['status']="success";
		    $response['error']=false;
		    $response['data']='Berhasil Ubah Logo';
		    $this->response($response);
		}else{
		    $response['status']="failed";
		    $response['error']=true;
		    $response['data']='Gagal Ubah Logo';
		    $this->response($response);
		}
	}




	public function ambil_submenu_admin_get($id){
		// $optional = $this->parameter();
		// $data = $this->modeladmin->ambil_data("page_menu_admin", $optional);
        $data = $this->modeladmin->ambil_submenu_all($id, "admin_menu");
	    $response['status']="success";
	    $response['error']=false;
	    $response['data']=$data;
	    $this->response($response);
	}






	// API CRUD Admin Menu
	public function ambil_menu_web_get(){
		// $optional = $this->parameter();
		$data = $this->modeladmin->ambil_menu_all("web_menu");
		if(count($data)){
		    $response['status']="success";
		    $response['error']=false;
		    $response['data']=$data;
		    $this->response($response);
		}else{
		    $response['status']="failed";
		    $response['error']=true;
		    $response['data']='Gagal Tambah Logo';
		    $this->response($response);
		}
	}

	public function tambah_menu_web_post(){
		$status = $this->modeladmin->tambah_data("page_menu_web", $_POST, "menu_web");
		if($status){
		    $response['status']="success";
		    $response['error']=false;
		    $response['data']='Berhasil Tambah Logo';
		    $this->response($response);
		}else{
		    $response['status']="failed";
		    $response['error']=true;
		    $response['data']='Gagal Tambah Logo';
		    $this->response($response);
		}
	}

	public function hapus_menu_web_post(){
		$status = $this->modeladmin->hapus_data("page_menu_web", $_POST, "menu_web");
		if($status){
		    $response['status']="success";
		    $response['error']=false;
		    $response['data']='Berhasil Hapus menu_web';
		    $this->response($response);
		}else{
		    $response['status']="failed";
		    $response['error']=true;
		    $response['data']='Gagal Hapus menu_web';
		    $this->response($response);
		}
	}

	public function ubah_menu_web_post(){
		$status = $this->modeladmin->ubah_data("page_menu_web", $_POST, "menu_web", $_POST['id']);
		if($status){
		    $response['status']="success";
		    $response['error']=false;
		    $response['data']='Berhasil Ubah Logo';
		    $this->response($response);
		}else{
		    $response['status']="failed";
		    $response['error']=true;
		    $response['data']='Gagal Ubah Logo';
		    $this->response($response);
		}
	}

	public function parameter($where = "", $search = "", $join = "", $order_by = "", $limit = "", $offset = ""){
		$optional['where'] = $where;
		$optional['search'] = $search;
		$optional['join'] = $join;
		$optional['order_by'] = $order_by;
		$optional['limit'] = $limit;
		$optional['offset'] = $offset;
		return $optional;
	}


}