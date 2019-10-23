<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Admin extends CI_Controller {

	//--------------------------------------------------------- login
	public function index() {
		if($this->session->userdata('login')){
			redirect("admin/dashboard");
		} else {
			redirect("admin/login");
		}
	}

	public function viewss($folder, $file, $id){
		if($file == "hapus-admin"){
			$file = './gambar/'.$this->input->post('jenis').'/'.$this->input->post('gambar');
			unlink($file);
			$hapus = $this->modeladmin->hapus_admin($id);

			if($hapus){
				$this->session->set_userdata('notif', 1);
	            $this->session->set_userdata('type_notif', 'success');
	            $this->session->set_userdata('pesan_notif', "Hapus admin ".$this->input->post('nama')." berhasil");
			}else{
				$this->session->set_userdata('notif', 1);
	            $this->session->set_userdata('type_notif', 'error');
	            $this->session->set_userdata('pesan_notif', "Hapus admin ".$this->input->post('nama')." gagal");
			}
            return $hapus;
		}else{
			$data['file'] = "admin/".$folder."/".$file;
			$this->load->view('admin/themplate', $data);
		}
	}

	public function views($folder, $file){
		$data['file'] = "admin/".$folder."/".$file;	
		if($folder == "login"){
			$this->load->view('admin/themplate-depan', $data);
		}else if($file == "login" || $file == "kunci"){
			$this->load->view('admin/themplate', $data);
		}
	}

	public function view($file){
		$data['file'] = "admin/".$file;
		if($file == "logout"){
			$this->session->sess_destroy();
			redirect("admin/login");
		}else if($file == "login" || $file == "kunci"){
			$this->load->view('admin/themplate-depan', $data);
		}else{
			$data['file'] = "admin/".$file;
			$this->load->view('admin/themplate', $data);	
		}
	}

	public function cek_login(){
		$login = $this->modeladmin->check_login($this->input->post('kontak'), $this->input->post('password'));
		if ($login){
            $this->session->set_userdata('id', $login[0]['id']);
            $this->session->set_userdata('nama', $login[0]['nama']);
            $this->session->set_userdata('email', $login[0]['email']);
            $this->session->set_userdata('photo', $login[0]['photo']);
            $this->session->set_userdata('nomor_telepone', $login[0]['nomor_telepone']);
            $this->session->set_userdata('role', $login[0]['role']);
            $this->session->set_userdata('login', 1);
			$menu = $this->modeladmin->ambil_menu($login[0]['role']);
            $this->session->set_userdata('menu', $menu);
			redirect("admin/dashboard");
		}			
		redirect("admin");
	}

	public function cek_lupa_password(){
		$status = $this->modeladmin->cek_admin_exis($this->input->post('kontak'));
		if($status){
			return true;
		}else{
			return false;
		}
	}

	public function buka_kunci(){
		$kontak = $this->session->userdata('email');
		if(!$kontak){
			$kontak = $this->session->userdata('nomor_telepone');
		}
        $login = $this->modelkunci->buka_kunci($kontak, $this->input->post('password'));
		if ($login){
            $this->session->set_userdata('login', 1);
			redirect($this->session->userdata('last_url'));
		}else{
			redirect("admin/kunci");
		}
	}

	public function simpan_gambar(){
		$nama = md5(rand()); 
		$data = $this->input->post('gambar');
		list($type, $data) = explode(';', $data);
		list(, $data)      = explode(',', $data);
		$data = base64_decode($data);
		$status = file_put_contents('./gambar/'.$this->input->post('jenis').'/'.$nama.'.jpg', $data);
		if ($this->input->post('gambarsebelumnya') != ""){
			$file = './gambar/'.$this->input->post('jenis').'/'.$this->input->post('gambarsebelumnya');
			unlink($file);
		}
		print_r($nama.'.jpg');
	}

	public function upload_data_admin()  
	{
        $data_insert = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'photo' => $this->input->post('nama_photo'),
            'nomor_telepone' => $this->input->post('handphone'),
            'role' => $this->input->post('role'),
            'sosial_media' => json_encode($this->input->post('sosial_media')),
            'biodata' => $this->input->post('biodata')
        );
        $result = $this->modeladmin->tambah_admin($data_insert);
        if($result){
            $this->session->set_userdata('notif', 1);
            $this->session->set_userdata('type_notif', 'success');
            $this->session->set_userdata('pesan_notif', "Mengundang ".$this->input->post('nama')." berhasil, Email undakan telah dikirim ke Email ".$this->input->post('email'));

	        $this->sendmail($this->input->post('email'), $this->input->post('nama'));
        }else{
            $this->session->set_userdata('notif', 1);
            $this->session->set_userdata('type_notif', 'error');
            $this->session->set_userdata('pesan_notif', "Mengundang ".$this->input->post('nama')." Harap Ulangi Proses Penambahan ");
        }
        redirect('admin/daftar-admin');
	}

	public function upload_menu_admin()  
	{
        $data_insert = $this->input->post();
	    $parent = $this->input->post("id_parent");
        if($parent == null){
        	$parent = 0;
        }
        $urutan = $this->input->post("urutan");

        $result = $this->modeladmin->tambah_menu($data_insert, $parent, $urutan);
		$menu = $this->modeladmin->ambil_menu($this->session->userdata('role'));
        $this->session->set_userdata('menu', $menu);
        if($result){
            $this->session->set_userdata('notif', 1);
            $this->session->set_userdata('type_notif', 'success');
            $this->session->set_userdata('pesan_notif', "Tambah menu berhasil. Menu ". $data_insert['title']. " berhasil ditambahkan.");
        }else{
        	$this->session->set_userdata('error', 1);
            $this->session->set_userdata('type_notif', 'success');
            $this->session->set_userdata('pesan_notif', "Tambah menu gagal. Menu ". $data_insert['title']. " gagal ditambahkan.");
        }
        redirect('admin/developer/menu');
        print_r($status);
	}

	public function inactive_menu_admin($id){
        $result = $this->modeladmin->inactive_menu($id);
		$menu = $this->modeladmin->ambil_menu($this->session->userdata('role'));
		$this->session->set_userdata('adminmenu', "in");
        $this->session->set_userdata('menu', $menu);
        redirect('admin/developer/menu');
	}

	public function active_menu_admin($id){
        $result = $this->modeladmin->active_menu($id);
		$menu = $this->modeladmin->ambil_menu($this->session->userdata('role'));
		$this->session->set_userdata('adminmenu', "in");
        $this->session->set_userdata('menu', $menu);
        redirect('admin/developer/menu');
	}

	public function hapus_menu_admin($id, $urutan, $parent){
        $result = $this->modeladmin->hapus_menu($id, $urutan, $parent);
		$this->session->set_userdata('adminmenu', "in");
        redirect('admin/developer/menu');
	}

	public function sendmail($email){
        // $data['greating'] = "Undangan Admin";
        $data = "email anda : ".$email." \n telah diundangan untuk menjadi admin di ".base_url().". untuk melengkapi proses berikutnya silahkan tekan tombol di bawah ini. \n \n \n bila anda tidak merasa memeliki hubungan dengan ".base_url()." harap abaikan email ini.";
        // $data = $this->load->view('email-template', $data, true);
        $this->load->library('email');
        $this->config->load('email', TRUE);
        $sender = $this->config->item('smtp_user', 'email');
        $this->email->from($this->session->set_userdata('nama', $login[0]['nama']), 'Admin '.base_url());
        $this->email->to($email);
        $this->email->subject('Undangan Sebagai Admin');
        $this->email->message($data);
        $this->email->send();
	}






















	//--------------------------------------------------------  iframe
	public function iframe($file){
		$data['file'] = $file;
		$this->load->view('iframe/themplate', $data);	
	}

















	//--------------------------------------------------------  iframe
	public function undercontraction(){
		$this->load->view('undercontraction');
	}

	public function privacy_police(){
		$this->load->view('web/privacy-police');
	}




	// //--------------------------------------------------------  user
	// public function pengurus(){
	// 		$this->load->view('admin/user-pengurus');	
	// }

	// public function pengajar(){
	// 		$this->load->view('admin/user-pengajar');	
	// }

	// public function siswa(){
	// 		$this->load->view('admin/user-siswa');	
	// }

	// // public function data_admin()  
	// // {
	// // 	$this->session->set_userdata('url', base_url()."admin/administrator/");
	// // 	$data['data'] = $this->modeladmin->daftar_admin();
	// // 	$this->load->view('admin/admin-data', $data);	
	// // }

	// // public function grafik_admin()  
	// // {
	// // 	$this->session->set_userdata('url', base_url()."admin/administrator/");
	// // 	$data['data'] = $this->modeladmin->daftar_admin();
	// // 	$this->load->view('admin/admin-grafik', $data);	
	// // }

	// // public function arsip_admin()  
	// // {
	// // 	$this->session->set_userdata('url', base_url()."admin/administrator/");
	// // 	$data['data'] = $this->modeladmin->daftar_admin();
	// // 	$this->load->view('admin/admin-arsip', $data);	
	// // }

	// //-----------------------------------CRUD Admin

	// // public function upload_data_admin()  
	// // {
 // //        $field_name = "image";
	// // 	$config['upload_path'] = './gambar/admin/';
 // //        $config['allowed_types'] = 'gif|jpeg|jpg|png';
 // //        $config['max_size'] = '10240';
 // //        $config['remove_spaces'] = TRUE;
 // //        $config['file_name'] = "photo-admin-".str_replace(' ','-',strtolower($this->input->post('nama')));
 // //        $this->load->library('upload', $config);
 // //        if($this->upload->do_upload($field_name)){
 // //            $file_name = $this->upload->data('file_name');
 // //            $data_insert = array(
 // //                'nama' => $this->input->post('nama'),
 // //                'email' => $this->input->post('email'),
 // //                'photo' => $file_name,
 // //                'nomor_telepone' => $this->input->post('handphone'),
 // //                'role' => $this->input->post('role'),
 // //                'sosial_media' => json_encode($this->input->post('sosial_media')),
 // //                'biodata' => $this->input->post('biodata')
 // //            );
 // //            $result = $this->modeladmin->tambahadmin($data_insert);
 // //            $this->session->set_userdata("success", "Tambah data berhasil, Calon admin akan menerima email undangan dan bisa membuat password");

	// // 		$email = $this->input->post('email');
	// //         // $data['greating'] = "Undangan Admin";
	// //         $data = "email anda : ".$email." \n telah diundangan untuk menjadi admin di ".base_url().". untuk melengkapi proses berikutnya silahkan tekan tombol di bawah ini. \n \n \n bila anda tidak merasa memeliki hubungan dengan ".base_url()." harap abaikan email ini.";
	// //         // $data = $this->load->view('email-template', $data, true);
	// //         $this->load->library('email');
	// //         $this->config->load('email', TRUE);
	// //         $sender = $this->config->item('smtp_user', 'email');
	// //         $this->email->from($this->session->set_userdata('nama', $login[0]['nama']), 'Admin '.base_url());
	// //         $this->email->to($email);
	// //         $this->email->subject('Undangan Sebagai Admin');
	// //         $this->email->message($data);
	// //         $this->email->send();
 // //            redirect('admin/daftar-admin');
 // //        }else{
 // //            $this->session->set_userdata("error", "Tambah User Gagal");            
 // //        }
	// // }

	// public function data_admin_lengkap($nomor)  
	// {
	// 	$this->load->view('admin/admin-lengkap');	
	// }

	// public function hapus_admin($nomor)  
	// {
	// 		$this->session->set_userdata("success", "Hapus data success");
 //            redirect('admin/daftar-admin');
	// }

	// //---------------------------------------------------------- User
	// public function data_user()  
	// {
	// 	$this->load->view('admin/user-data');	
	// }

	// public function grafik_user()  
	// {
	// 	$this->session->set_userdata('url', base_url()."admin/administrator/");
	// 	$data['data'] = $this->modeladmin->daftar_admin();
	// 	$this->load->view('admin/user-grafik', $data);	
	// }

	// public function arsip_user()  
	// {
	// 	$this->load->view('admin/user-arsip');	
	// }
	// //---------------------------------------------------------- pages
	// public function page($page)  
	// {
	// 	$this->load->view('admin/page/'.$page);	
	// }

	// //---------------------------------------------------------- content

	// public function pendukung()
	// {
	// 	$this->load->view('admin/konten-pendukung');	
	// }

	// public function kategori()
	// {
	// 	$this->load->view('admin/konten-kategori');	
	// }

	// public function produk()
	// {
	// 	$this->load->view('admin/konten-produk');	
	// }
	
	// public function tags()
	// {
	// 	$this->load->view('admin/konten-tags');	
	// }

	// public function kontak()
	// {
	// 	$this->load->view('admin/konten-kontak');	
	// }

	// //---------------------------------------------------------- CRUD
	


	// // --------------------------------------------------------- Pesan
	// public function pesan()  
	// {
	// 	$this->session->set_userdata('url', base_url()."admin/pesan/");
	// 	redirect('admin/pesan/daftar-pesan/pesan-masuk');
	// }

	// public function daftar_pesan($jenis = "")  
	// {
	// 	if($jenis == ""){
	// 		redirect('admin/pesan/daftar-pesan/pesan-masuk');
	// 	}else{
	// 		$data['jenis'] = $jenis;
	// 		$this->load->view('admin/pesan-data', $data);	
	// 	}
	// }

	// public function tulis_pesan()  
	// {
	// 	$this->load->view('admin/pesan-tulis');	
	// }

	// public function baca_pesan($id = "")  
	// {
	// 	$this->load->view('admin/pesan-baca');	
	// }


	// //---------------------------------------------------------- Seo
	// public function status(){
	// 	$this->load->view('admin/status-seo');	
	// }
	
	// public function belajarseo(){
	// 	$this->load->view('admin/belajar-seo');	
	// }

	// public function ubah_hash(){
	// 	$login = $this->modellogin->change_password("test1234");
	// }
	
	// //---------------------------------------------------------- Depeloper
	// public function menu(){
	// 	$this->load->view('admin/developer-menu');	
	// }
	

	//---------------------------------------------------------- 

}