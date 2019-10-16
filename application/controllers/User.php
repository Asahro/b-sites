<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class User extends CI_Controller {

	//--------------------------------------------------------- login
	public function user_login(){
		
	}

	public function user_register(){
		
	}

	public function index()  
	{
		redirect('user/dashboard');		
	}

	public function dashboard()  
	{
		$menu = $this->modelmenu->ambil_menu(2);
        $this->session->set_userdata('menu', $menu);
		$this->load->view('user/dashboard');		
	}

	//---------------------------------------------------Login No Dashboard
	public function login_user(){
		print_r($_POST);
	}

	public function register_user(){
		if($this->modellogin->check_data("user", "email", $_POST['email'])){
			echo "Email Telah Terdaftar, Silahkan Login";
		}else{
			$jumlah_code = rand(5,10);
		    $link = $this->random('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789', rand(30,100));	
		    $kode = $this->random('ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789', $jumlah_code);
			$data_insert = array(
	                'nama' => $_POST['nama'],
	                'perusahaan' => $_POST['instansi'],
	                'handphone' => $_POST['handphone'],
	                'password' => create_hash($_POST['password']),
	                'email' => $_POST['email'],
	                'link_verifikasi' => $link,
	                'code_verifikasi' => $kode,
	            );
			$menu = $this->modellogin->register_user($data_insert);
			$data = "Anda Telah mendaftarkan diri di ".base_url().'. untuk menyelesaikan proses pendaftaran silahkan klik link berikut <a href="'.base_url()."konfirmasi-pendaftaran/".$link." >Link</a> atau dengan memasukan ".$jumlah_code." kode beriku = ".$kode." pada form konvirmasi";//$this->load->view('email/daftar', $kirim, true);
			$this->sendmail($_POST['email'], "Registrasi User", $data);
			redirect("home");
		}
	}


	// ------------------------------------------------------------------------------------------------------------- helper

	public function sendmail($tujuan, $subject, $isi ,$email = "admin@centraelektronik.online", $nama = "Centra Elektronik"){
		$this->load->library('email');
		$this->email->from($email, $nama);
		$this->email->to($tujuan);
		$this->email->set_header('header', $header);
		$this->email->subject($subject);
		$this->email->message($isi); 
		$data = $this->email->send();
		return $data;
	}

	public function random($karakter, $jumlah){
		$kode = "";
		for ($i = 0; $i < $jumlah; $i++) {
		  	$pos = rand(0, strlen($karakter)-1);
			$kode .= $karakter{$pos};
		}
		return $kode;
	}


	public function kirim_sms($phone, $message){
		$userkey = "1r97tb"; 
		$passkey = "bedulpr13"; // set passkey di zenziva
		$telepon = $phone;
		$message = $message;
		$url = "https://reguler.zenziva.net/apps/smsapi.php";
		$curlHandle = curl_init();
		curl_setopt($curlHandle, CURLOPT_URL, $url);
		curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'userkey='.$userkey.'&passkey='.$passkey.'&nohp='.$telepon.'&pesan='.urlencode($message));
		curl_setopt($curlHandle, CURLOPT_HEADER, 0);
		curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
		curl_setopt($curlHandle, CURLOPT_POST, 1);
		$results = curl_exec($curlHandle);

		curl_close($curlHandle);

		$XMLdata = new SimpleXMLElement($results);
		$status = $XMLdata->message[0];

		return $status;
	}
}