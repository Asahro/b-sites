<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// session_start();
date_default_timezone_set("Asia/Jakarta");

class Menu extends CI_Controller {
	
    function __construct() {
        parent::__construct();        
        $this->load->library('facebook');
        $this->load->library('google');

        $this->session->set_userdata('link_facebook', $this->facebook->login_url());
        $this->session->set_userdata('link_google', $this->google->loginURL());
    }

	public function index(){
		$this->load->view('web/home');	
		// $this->load->view('wedding/home');	

	}

	public function list_daftar($kategori = ""){
		$data = array();
		// daftar-semua-artikel-page-1
		// daftar-artikel-kesehatan-page-1
		if(strpos($kategori, 'artikel') && strpos($kategori, 'page')){ 
			$this->load->view('web/cari-artikel');
		}
		// artikel-kesehatan-berjuadul-10-makanan-favorit
		else if(strpos($kategori, 'harga') && strpos($kategori, 'wedding')){
			$this->load->view('wedding/product');
		}

		else if(strpos($kategori, 'artikel') && strpos($kategori, 'berjudul')){
			$this->load->view('web/baca-artikel');
		}
		// daftar-semua-timbangan-page-1
		// daftar-timbangan-duduk-page-1
		// timbangan-duduk-merek-alexa
		else if(strpos($kategori, 'merek')){
			$nama = explode("merek-", $kategori);
			$data['data'] = $this->modelproduk->detail_produk($nama[1]);
			$this->load->view('web/produk', $data);	
		}

		else if($kategori == "timbangan"){
			if(isset($_GET['page'])){
				$data['page'] = $_GET['page'];
			}else{
				$data['page'] = 1;
			}

			if(isset($_GET['search'])){
				$data['search'] = $search = $_GET['search'];
			}else{
				$data['search'] = $search = "";
			}

			if(isset($_GET['sortir'])){
				$data['sortir'] = $sortir = $_GET['sortir'];
			}else{
				$data['sortir'] = $sortir = "nama-asc";
			}

			if(isset($_GET['type'])){
				$data['type'] = $type = $_GET['type'];
			}else{
				$data['type'] = $type = "";
			}

			if(isset($_GET['fungsi'])){
				$data['fungsi'] = $fungsi = $_GET['fungsi'];
			}else{
				$data['fungsi'] = $fungsi = "";
			}
			$offset = ($data['page']-1)*12;
			
			$data['listtype'] = $this->modelproduk->daftar_list_type();
			$data['listfungsi'] = $this->modelproduk->daftar_list_fungsi();

			$data['produk'] = $this->modelproduk->daftar_produk($offset, $fungsi, $type, $sortir, $search);
			
			$jumlah = $this->modelproduk->jumlah_produk();
			$data['jumlahpage'] = round($jumlah/12);
			if($data['jumlahpage'] < $jumlah/12){
				$data['jumlahpage'] = $data['jumlahpage'] +1;
			}
			$this->load->view('web/produklist', $data);	
		}else{
			$this->load->view('web/error404', $data);
		}


	}

	public function cara_pembelian(){
		$this->load->view('web/cara-pembelian');	
	}

	public function faq(){
		$this->load->view('web/faq');	
	}


	public function kontak(){
		$this->load->view('web/kontak');	
	}

	public function penawaran(){
		$this->load->view('web/penawaran');
	}

	public function login(){
		$this->load->view('web/login/login');
	}

	public function daftar(){
		$this->load->view('web/login/daftar');
	}

	public function lupa(){
		$this->load->view('web/login/forget');
	}

	public function error404(){
		$this->load->view('web/error404');
	}



	public function indexs(){
		$_SESSION['subproduk'] = $this->fungsi_model->Ambil_Data('subproduk');
		$_SESSION['subproduk2'] = $this->fungsi_model->Ambil_Data('subproduk2');
		$_SESSION['produk'] = $this->fungsi_model->Ambil_Data('produk');
		$_SESSION['produk best saller'] = $this->fungsi_model->Ambil_Data('produk ', "where Utama = 'Ya'");
		$_SESSION['produk acak'] = $this->fungsi_model->Ambil_Data('produk');
		$_SESSION['Utama'] = $this->fungsi_model->Ambil_Data('link');
		$_SESSION["Alamat"] = "https://www.tokotimbangan.id";
		$_SESSION["Keywords"] = "";
		$_SESSION["Tittle"] = "Toko Timbangan Digital Murah Berkualitas Dan bergaransi";
		$_SESSION["Description"] = "Toko Timbangan Digital Murah Berkualitas Dan bergaransi tempat jual timbangan duduk, gantung, lantai, jembatan, hingga timbangan buah dan dapur";
		$_SESSION['Artikel'] = "Toko Timbangan adalah tempat jual timbangan digital dan mekanik dari berbagai jenis. Kami menyediakan berbagai jenis timbangan seperti timbangan duduk, gantung, lantai, jembatan, hingga timbangan buah dan dapur. kami juga menyediakan load cell, indikator dan memberikan garansi selama satu tahun untuk produk kami";

		// $this->load->view('index');	
		$this->load->view('web/home');	
	}


	public function fulllink(){
		$_SESSION['subproduk'] = $this->fungsi_model->Ambil_Data('subproduk');
		$_SESSION['subproduk2'] = $this->fungsi_model->Ambil_Data('subproduk2');
		$_SESSION['produk'] = $this->fungsi_model->Ambil_Data('produk');
		$_SESSION['produk2'] = $this->fungsi_model->Ambil_Data('produk');
		$_SESSION['produk3'] = $this->fungsi_model->Ambil_Data('produkb');
		$_SESSION['produk best saller'] = $this->fungsi_model->Ambil_Data('produk ', "where Utama = 'Ya'");
		$_SESSION['produk acak'] = $this->fungsi_model->Ambil_Data('produk');
		$_SESSION['Utama'] = $this->fungsi_model->Ambil_Data('link');
		$_SESSION['Artikel'] = "Ini adalah daftar harga seluruh timbangaan yang dijual oleh toko timbangan digital. Kami menjual berbagai macam timbangan dan kelengkapannya dengan harga murah, berkualitas tinggi dan bergaransi satu tahun. Produk kami meliputi aneka timbangan lantai, gantung, duduk, dapur dan juga aksesoris timbangan.";
		$_SESSION["Alamat"] = "https://www.tokotimbangan.id/menu/fulllink";
		$_SESSION["Keywords"] = "";
		$_SESSION["Tittle"] = "Daftar harga timbangan toko timbangan digital";
		$_SESSION["Description"] = "Ini adalah daftar harga seluruh timbangaan yang dijual oleh toko timbangan digital. Kami menjual berbagai macam timbangan dan kelengkapannya dengan harga murah, berkualitas tinggi dan bergaransi satu tahun. Produk kami meliputi aneka timbangan lantai, gantung, duduk, dapur dan juga aksesoris timbangan.";

		$this->load->view('fullproduk');	
	}


	public function produks($bagian = "", $type = "", $slide = "1"){

		$_SESSION['produk acak'] = $this->fungsi_model->Ambil_Data('produk');
		$_SESSION['produk best saller'] = $this->fungsi_model->Ambil_Data('produk ', "where Utama = 'Ya'");
		$_SESSION["Alamat"] = "https://www.tokotimbangan.id/menu/produk/".$bagian."/".$type;
		$_SESSION['subproduk'] = $this->fungsi_model->Ambil_Data('subproduk');
		$_SESSION['subproduk2'] = $this->fungsi_model->Ambil_Data('subproduk2');
		$_SESSION['produk'] = $this->fungsi_model->Ambil_Data('produk');
		$_SESSION['produk acak'] = $this->fungsi_model->Ambil_Data('produk');
		$bagian = strtolower($bagian);
		$type = strtolower($type);

		

		if ($bagian == "data-timbangan"){

			$type2 = str_replace("harga-timbangan-digital-","", strtolower($type));
			$type3 = str_replace("-"," ", $type2);
			$_SESSION['produk lengkap'] = $hasil = $this->fungsi_model->Ambil_Data('produk ', "where Type = '$type3'");
			$subproduk2 = $hasil[0]['Category2'];
			$subproduk3 = $hasil[0]['Category'];
			$_SESSION['produk mirip'] = $hasil = $this->fungsi_model->Ambil_Data('produk ', "where Category2 = '$subproduk2'");
			
			$type2 = str_replace("harga-timbangan-digital-","", $type);
			
			$_SESSION["Tittle"] = str_replace("-"," ", $type)." murah berkualitas dan bergaransi";
			$_SESSION["Keywords"] = "";
			$_SESSION['Artikel'] = str_replace("-"," ", $type)." di toko timbangan sangat kompetitif. Bukan hanya dari segi harga jual yang murah, tapi kami juga hanya menyediakan timbangan - timbangan berkualitas tinggi sehingga kami menyediakan garansi penggantian jika sebelum satu tahun timbangan rusak. Timbangan kami dibuat oleh para teknisi berpengalam, dengan bahan baku loadcell yang langsung didatangkan dari luar negri";
			$_SESSION["Description"] = str_replace("-"," ", $type)." di toko timbangan sangat kompetitif. Bukan hanya dari segi harga jual yang murah, tapi juga berkualitas tinggi dan garansi";
			
			$this->load->view('produk_detil');	

		}


		else if ($bagian == "data-lengkap"){
			$type2 = str_replace("-"," ", $type);
			$type3 = $arr_kalimat = explode("merek ", $type2);
			$type4 = $type3['1']; 
			
			$_SESSION['produk lengkap'] = $hasil = $this->fungsi_model->Ambil_Data('produk ', "where Type = '$type4'");
			$subproduk2 = $hasil[0]['Category2'];
			$subproduk3 = $hasil[0]['Category'];
			$_SESSION['produk mirip'] = $hasil = $this->fungsi_model->Ambil_Data('produk ', "where Category2 = '$subproduk2'");
			$_SESSION["Tittle"] = str_replace("-"," ", $type). " murah berkualitas dan bergaransi";
			$_SESSION["Keywords"] = "";
			$_SESSION['Artikel'] = str_replace("-"," ", $type)." di toko timbangan sangat kompetitif. Bukan hanya harga jual timbangan yang murah, timbangan kami pun berkualitas tinggi. Hal ini karena timbangan kami hanya dibuat dengat bahan baku berkualitas, teknisi - teknisi yang berpengalaman, load cell super akurat, dan mesin mesin produksi yang canggih. Dengan kepercayaan kami pada kualitas kami, kami memberikan garansi bahwa jika dalam 1 tahun produk kami ada kerusakan akan digantikan dengan yang baru.";
			$_SESSION["Description"] = str_replace("-"," ", $type)."  di toko timbangan sangat kompetitif. Bukan hanya dari segi harga jual yang murah, tapi juga berkualitas tinggi dan garansi.";
			
			$this->load->view('produk_detil');	
		}

		else if ($bagian == "harga-timbangan"){
			$subproduk = str_replace("harga-","", $type);
			$subproduk2 = str_replace("-"," ", $subproduk);
			$_SESSION['produk'] = $hasil = $this->fungsi_model->Ambil_Data('produk ', "where Category = '$subproduk2'");
			
			$subproduk3 = str_replace("-"," ", $type);
			$_SESSION["Tittle"] = $subproduk3;

			$_SESSION["Tittle"] = $subproduk3." murah berkualitas dan bergaransi";
			$_SESSION["Keywords"] = "";
			$_SESSION['Artikel'] = $subproduk3." di toko timbangan sangat kompetitif. Bukan hanya dari segi harga jual yang murah, tapi kami juga hanya menyediakan timbangan - timbangan berkualitas tinggi sehingga kami menyediakan garansi penggantian jika sebelum satu tahun timbangan rusak. Timbangan kami dibuat oleh para teknisi berpengalam, dengan bahan baku loadcell yang langsung didatangkan dari luar negri";
			$_SESSION["Description"] = $subproduk3." di toko timbangan sangat kompetitif. Bukan hanya dari segi harga jual yang murah, tapi juga berkualitas tinggi dan garansi";

			
			if ($slide == 2){
				$_SESSION["Alamat"] = "https://www.tokotimbangan.id/menu/produk/".$bagian."/".$type."/2";
				$this->load->view('produk2');
			}
			else{
				$this->load->view('produk');
			}		
		}

		else if ($bagian == "jual-timbangan"){
			$subproduk = str_replace("jual-","", $type);
			$subproduk2 = str_replace("-"," ", $subproduk);
			$_SESSION['produk'] = $hasil = $this->fungsi_model->Ambil_Data('produk ', "where Category = '$subproduk2'");
			
			$subproduk3 = str_replace("-"," ", $type);
			
			$_SESSION["Tittle"] = $subproduk3." murah berkualitas dan bergaransi";
			$_SESSION["Keywords"] = "";
			$_SESSION['Artikel'] = $subproduk3." dengan harga kompetitif. Bukan hanya dari segi harga jual yang murah, tapi kami juga hanya menyediakan timbangan - timbangan berkualitas tinggi sehingga kami menyediakan garansi penggantian jika sebelum satu tahun timbangan rusak. Timbangan kami dibuat oleh para teknisi berpengalam, dengan bahan baku loadcell yang langsung didatangkan dari luar negri";
			$_SESSION["Description"] = $subproduk3." dengan harga kompetitif. Bukan hanya dari segi harga jual yang murah, tapi juga berkualitas tinggi dan garansi";

			
			if ($slide == 2){
				$_SESSION["Alamat"] = "https://www.tokotimbangan.id/menu/produk/".$bagian."/".$type."/2";
				$this->load->view('produk2');
			}
			else{
				$this->load->view('produk');
			}		
		}

		else if ($bagian == "daftar-harga-timbangan-digital"){
			$subproduk = str_replace("-"," ", $type);
			$_SESSION['produk'] = $hasil = $this->fungsi_model->Ambil_Data('produk ', "where Category2 = '$subproduk'");

			$_SESSION["Tittle"] = "Daftar Harga Jual Timbangan Digital ".$subproduk." Yang Murah Berkualitas dan Bergaransi";
			$_SESSION["Keywords"] = "";
			$_SESSION["Artikel"] = "Daftar Harga Jual Timbangan Digital ".$subproduk." di toko timbangan sangat kompetitif. Bukan hanya dari segi harga jual yang murah, tapi kami juga hanya menyediakan timbangan - timbangan berkualitas tinggi sehingga kami menyediakan garansi penggantian jika sebelum satu tahun timbangan rusak. Timbangan kami dibuat oleh para teknisi berpengalam, dengan bahan baku loadcell yang langsung didatangkan dari luar negri";
			$_SESSION['Description'] = "Daftar Harga Jual Timbangan Digital ".$subproduk."  di toko timbangan sangat kompetitif. Bukan hanya dari segi harga jual yang murah, tapi juga berkualitas tinggi dan garansi";
			
			if ($slide == 2){
				$_SESSION["Alamat"] = "https://www.tokotimbangan.id/menu/produk/".$bagian."/".$type."/2";
				$this->load->view('produkb');
			}
			else{
				$this->load->view('produkb');
			}		
		}

		else if ($bagian == "harga-timbangan-digital"){
			$_SESSION["Alamat"] = "https://www.tokotimbangan.id/menu/produk/".$bagian;
			$_SESSION['produk'] = $hasil = $this->fungsi_model->Ambil_Data('produk ', "where Utama = 'Ya'");

			$tanggal = getdate();
			$_SESSION["Tittle"] = "Daftar Harga Jual Timbangan Digital Yang Murah Berkualitas dan Bergaransi";
			$_SESSION["Keywords"] = "";
			$_SESSION["Artikel"] = "Darga Jual Timbangan Digital di toko timbangan sangat kompetitif. Bukan hanya dari segi harga jual yang murah, tapi kami juga hanya menyediakan timbangan - timbangan berkualitas tinggi sehingga kami menyediakan garansi penggantian jika sebelum satu tahun timbangan rusak. Timbangan kami dibuat oleh para teknisi berpengalam, dengan bahan baku loadcell yang langsung didatangkan dari luar negri";
			$_SESSION['Description'] = "Daftar Harga Jual Timbangan Digital  di toko timbangan sangat kompetitif. Bukan hanya dari segi harga jual yang murah, tapi juga berkualitas tinggi dan garansi";
			if ($slide == 2){
				$_SESSION["Alamat"] = "https://www.tokotimbangan.id/menu/produk/".$bagian."/".$type."/2";
				$this->load->view('produk2');
			}
			else{
				$this->load->view('produk');
			}		
		}
	}

	public function kkontak($bagian = ""){
		$_SESSION["Alamat"] = "https://www.tokotimbangan.id/menu/kontak/".$bagian;
			

		if ($bagian == "distributor-timbangan-digital"){
		
			$_SESSION["Keywords"] = "Distributor Timbangan, Penjual Timbangan, Distributor Timbangan Digital";
			$_SESSION["Tittle"] = $subproduk = str_replace("-"," ", $bagian);
			$_SESSION["Description"] = "Toko Timbangan Adalah Vendor, Suplayer, Distributor, Sekaligus Produsen Timbangan Digital.";
			$_SESSION['Artikel'] = "Toko Timbangan Digital adalah sebuah toko online yang menjual berbagai produk timbangan dari ALTRAMAN, MUGI, Dan Berbagai Perusahaan Penyedia Lain. Toko Timbangan Menjadi Salah Satu Pintu Distributor Timbangan yang melayani pembelian timbangan";
			$_SESSION['Map'] = "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3966.456013062121!2d106.7915729!3d-6.2034185!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8b33ff4540d2a4b!2sAltraman.+PT!5e0!3m2!1sid!2s!4v1474944069181";
			$this->load->view('kontak');	
		}

		else if ($bagian == "toko-timbangan-digital-jakata"){
			$_SESSION["Tittle"] = "toko timbangan digital di jakarta";
			$_SESSION["Keywords"] = "Toko Timbangan, Toko Timbangan Digital, Toko Timbangan Jakarta, Toko Timbangan Digital Di Jakarta";
			$_SESSION["Description"] = "Cabangan Toko Timbangan Digital di Jakarta adalah Tempat Jual Aneka Jenis Timbangan.";
			$_SESSION['Artikel'] = "Toko Timbangan memiliki banyak 6 Kanto Cabang. salah satunya adalah cabang Jakarta yang disini disebut Toko Timbangan Digital Jakarta. Selain Toko Timbangan Digital Jakarta, Toko Timbangan Juga Memiliki Cabang di Bandung, Medan, Pekanbaru, Surabaya, dan Lapung. Selain Itu distributor kami tersebar di seluruh Indonesia";
			$_SESSION['Map'] = "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3966.456013062121!2d106.7915729!3d-6.2034185!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8b33ff4540d2a4b!2sAltraman.+PT!5e0!3m2!1sid!2s!4v1474944069181";
			$this->load->view('kontak');
					
		}

		else if ($bagian == "toko-timbangan-digital-bandung"){
			$_SESSION["Tittle"] = "Toko Timbangan Digital Di Bandung";
			$_SESSION["Keywords"] = "Toko Timbangan, Timbangan Bandung, toko timbangan digital di bandung";
			$_SESSION["Description"] = "Cabangan Toko Timbangan Digital di Bandung adalah Tempat Jual Aneka Jenis Timbangan.";
			$_SESSION['Artikel'] = "Toko Timbangan memiliki banyak 6 Kanto Cabang. salah satunya adalah cabang Bandung yang disini disebut Toko Timbangan Digital Bandung. Selain Toko Timbangan Digital Bandung, Toko Timbangan Juga Memiliki Cabang di Surabaya, Medan, Pekanbaru, Jakarta, dan Lapung. Selain Itu distributor kami tersebar di seluruh Indonesia";
			$_SESSION['Map'] = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4619.894147851362!2d107.58784479478813!3d-6.964874106774132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8d963532a2f%3A0xff65941f8215b29d!2sAltraman.+PT!5e0!3m2!1sid!2s!4v1474944440400";
			$this->load->view('kontak');		
		}

		else if ($bagian == "toko-timbangan-digital-surabaya"){
			$_SESSION["Tittle"] = "Toko Timbangan Digital Di Surabaya";
			$_SESSION["Keywords"] = "Toko Timbangan, Timbangan surabaya, toko timbangan digital di surabaya";
			$_SESSION["Description"] = "Cabangan Toko Timbangan Digital di Surabaya adalah Tempat Jual Aneka Jenis Timbangan.";
			$_SESSION['Artikel'] = "Toko Timbangan memiliki banyak 6 Kanto Cabang. salah satunya adalah cabang Surabaya yang disini disebut Toko Timbangan Digital Surabaya. Selain Toko Timbangan Digital Surabaya, Toko Timbangan Juga Memiliki Cabang di Bandung, Medan, Pekanbaru, Jakarta, dan Lapung. Selain Itu distributor kami tersebar di seluruh Indonesia";
			$_SESSION['Map'] = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.66431776613!2d101.41714240021166!3d0.5034153585857589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5d3712d1f30ed146!2sAltraman!5e0!3m2!1sen!2s!4v1475036288389";

			$this->load->view('kontak');
		}
		
		else if ($bagian == "toko-timbangan-digital-pekanbaru"){
			$_SESSION["Tittle"] = "Toko Timbangan Digital Di Pekanbaru";
			$_SESSION["Keywords"] = "Toko Timbangan, Timbangan Pekanbaru, toko timbangan digital Di Pekanbaru";
			$_SESSION["Description"] = "Cabangan Toko Timbangan Digital di Pekanbaru adalah Tempat Jual Aneka Jenis Timbangan.";
			$_SESSION['Artikel'] = "Toko Timbangan memiliki banyak 6 Kanto Cabang. salah satunya adalah cabang Pekanbaru yang disini disebut Toko Timbangan Digital Pekanbaru. Selain Toko Timbangan Digital Pekanbaru, Toko Timbangan Juga Memiliki Cabang di Bandung, Medan, Pekanbaru, Jakarta, dan Lapung. Selain Itu distributor kami tersebar di seluruh Indonesia";
			$_SESSION['Map'] = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.66431776613!2d101.41714240021166!3d0.5034153585857589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5d3712d1f30ed146!2sAltraman!5e0!3m2!1sen!2s!4v1475036288389";

		
			$this->load->view('kontak');
		}
		
		else if ($bagian == "toko-timbangan-digital-medan"){
			$_SESSION["Tittle"] = "Toko Timbangan Digital Di Medan";
			$_SESSION["Keywords"] = "Toko Timbangan, Timbangan Medan, toko timbangan digital Medan";
			$_SESSION["Description"] = "Cabangan Toko Timbangan Digital di Medan adalah Tempat Jual Aneka Jenis Timbangan.";
			$_SESSION['Artikel'] = "Toko Timbangan memiliki banyak 6 Kanto Cabang. salah satunya adalah cabang Pekanbaru yang disini disebut Toko Timbangan Digital Pekanbaru. Selain Toko Timbangan Digital Pekanbaru, Toko Timbangan Juga Memiliki Cabang di Bandung, Medan, Surabaya, Jakarta, dan Lampung. Selain Itu distributor kami tersebar di seluruh Indonesia";
			$_SESSION['Map'] = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.66431776613!2d101.41714240021166!3d0.5034153585857589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5d3712d1f30ed146!2sAltraman!5e0!3m2!1sen!2s!4v1475036288389";
		
			$this->load->view('kontak');
		}

		else if ($bagian == "toko-timbangan-digital-lampung"){
			$_SESSION["Tittle"] = "Toko Timbangan Digital Di Lampung";
			$_SESSION["Keywords"] = "Toko Timbangan, Timbangan Lampung, Toko Timbangan Digital Di Lampung";
			$_SESSION["Description"] = "Cabangan Toko Timbangan Digital di Lapung adalah Tempat Jual Aneka Jenis Timbangan.";
			$_SESSION['Artikel'] = "Toko Timbangan memiliki banyak 6 Kanto Cabang. salah satunya adalah cabang Lampung yang disini disebut Toko Timbangan Digital Pekanbaru. Selain Toko Timbangan Digital Lampung, Toko Timbangan Juga Memiliki Cabang di Bandung, Medan, Surabaya, Jakarta, dan Pekanbaru. Selain Itu distributor kami tersebar di seluruh Indonesia";
			$_SESSION['Map'] = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248.25190673051455!2d105.27628006381757!3d-5.412324496288534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40dbaf3429282f%3A0xe1cc4a34ca8d3e9!2sAltraman.+PT!5e0!3m2!1sid!2s!4v1474874057030";
		
			$this->load->view('kontak');
		}

		else{
		$_SESSION["Alamat"] = "https://www.tokotimbangan.id";
		$_SESSION["Keywords"] = "";
		$_SESSION["Tittle"] = "Toko Timbangan Digital Murah Berkualitas Dan bergaransi";
		$_SESSION["Description"] = "Toko Timbangan Digital Murah Berkualitas Dan bergaransi tempat jual timbangan duduk, gantung, lantai, jembatan, hingga timbangan buah dan dapur";			
		$_SESSION['Artikel'] = "Toko Timbangan adalah tempat jual timbangan digital dan mekanik dari berbagai jenis. Kami menyediakan berbagai jenis timbangan seperti timbangan duduk, gantung, lantai, jembatan, hingga timbangan buah dan dapur. kami juga menyediakan load cell, indikator dan memberikan garansi selama satu tahun untuk produk kami";

		
			$this->load->view('index');	
		}
	}
	

	public function uncode(){
		$_SESSION["Keywords"] = "code";
		$this->load->view('uncode');
	}
	public function untouchable(){
		if ($_SESSION["Keywords"] == "code"){
				$_SESSION["Keywords"]= "bangke";                                        
				$this->load->view('index');				
		}
		else {
			echo   "yeyeyeye";
		}
	}

}
