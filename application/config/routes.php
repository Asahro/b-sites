<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'menu';
$route['home'] = 'menu/index';
$route['kontak'] = 'menu/kontak';
$route['penawaran'] = 'menu/penawaran';
$route['cara-pembelian'] = 'menu/cara_pembelian';
$route['faq'] = 'menu/faq';
$route['daftar'] = 'menu/daftar';
$route['lupa-password'] = 'menu/lupa';



// -------------------------------------------------------------- Admin Dashboard
$route['404_override'] = 'menu/error404';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'admin/index';
$route['admin/buka-kunci'] = 'admin/buka_kunci';
$route['admin/cek-login'] = 'admin/cek_login';
$route['admin/simpan-gambar'] = 'admin/simpan_gambar';
$route['admin/upload-data-admin'] = 'admin/upload_data_admin';
$route['admin/upload-menu-admin'] = 'admin/upload_menu_admin';
$route['admin/inactive-menu-admin/(:any)'] = 'admin/inactive_menu_admin/$1';
$route['admin/active-menu-admin/(:any)'] = 'admin/active_menu_admin/$1';
$route['admin/hapus-menu-admin/(:any)/(:any)/(:any)'] = 'admin/hapus_menu_admin/$1/$2/$3';

$route['admin/(:any)'] = 'admin/view/$1';
$route['admin/(:any)/(:any)'] = 'admin/views/$1/$2';
$route['admin/(:any)/(:any)/(:any)'] = 'admin/viewss/$1/$2/$3';
$route['admin/(:any)/(:any)/(:any)/(:any)'] = 'admin/viewsss/$1/$2/$3/$4';

















// --------------------------------------------------------- Iframe
$route['iframe/(:any)'] = 'admin/iframe/$1';







































// $route['admin/dashboard'] = 'admin/dashboard';
// $route['admin/kunci'] = 'admin/kunci';




$route['admin/user'] = 'admin/pengurus';
$route['admin/user/pengurus'] = 'admin/pengurus';
$route['admin/user/siswa'] = 'admin/siswa';
$route['admin/user/pengajar'] = 'admin/pengajar';


$route['admin/user/data-user/data-lengkap/(:any)'] = 'admin/data_user_lengkap/$1';
// CRUD
$route['admin/user/hapus-data/(:any)'] = 'admin/upload_data_admin';


// $route['admin/administrator/grafik-admin'] = 'admin/grafik_admin/';
// $route['admin/administrator/data-admin'] = 'admin/data_admin/';
// $route['admin/administrator/arsip-admin'] = 'admin/arsip_admin/';
// $route['admin/administrator/data-admin/tambah-data'] = 'admin/tambah_admin';
// $route['admin/administrator/data-admin/data-lengkap/(:any)'] = 'admin/data_admin_lengkap/$1';
// // CRUD
// $route['admin/administrator/upload-data'] = 'admin/upload_data_admin';
// $route['admin/administrator/ubah-data'] = 'admin/upload_data_admin';
// $route['admin/administrator/hapus-data/(:any)'] = 'admin/upload_data_admin';


$route['admin/pesan'] = 'admin/pesan';
$route['admin/pesan/tulis-pesan'] = 'admin/tulis_pesan';
$route['admin/pesan/daftar-pesan/(:any)'] = 'admin/daftar_pesan/$1';
$route['admin/pesan/baca-pesan/(:any)'] = 'admin/baca_pesan/$1';



$route['admin/page/(:any)'] = 'admin/page/$1';
// $route['admin/konten/(:any)'] = 'admin/konten/$1';


$route['admin/konten/pendukung'] = 'admin/pendukung';
$route['admin/konten/kategori'] = 'admin/kategori';
$route['admin/konten/produk'] = 'admin/produk';
$route['admin/konten/tags'] = 'admin/tags';
$route['admin/konten/kontak'] = 'admin/kontak';


// $route['admin/baca-semua-konten/(:any)'] = 'admin/baca_semua_konten/$1';
// $route['admin/baca-lengkap-konten/(:any)/(:any)'] = 'admin/baca_lengkap_konten/$1/$2';
// $route['admin/hapus-konten/(:any)/(:any)'] = 'admin/hapus_konten/$1/$2';
// $route['admin/edit-konten/(:any)/(:any)'] = 'admin/edit_konten/$1/$2';
// $route['admin/tambah-konten/(:any)/(:any)'] = 'admin/tambah_konten/$1/$2';
// $route['admin/update-konten/(:any)/(:any)'] = 'admin/ubah_konten/$1/$2';

//----------------------------------------------------------- Developer
$route['admin/developer/menu'] = 'admin/menu';































//----------------------------------------------------------- Developer
$route['admin/seo-status'] = 'admin/status';
$route['admin/belajar-seo'] = 'admin/belajar_seo';






//----------------------------------------------------------- Developer

$route['user'] = 'user/index';
$route['user/dashboard'] = 'user/dashboard';

$route['langganan'] = 'subscribe/simpandata';
// --------------------------------------------------------- sosial media login
$route['login-facebook'] = 'sosialmedia/facebook';
$route['google-login'] = 'sosialmedia/google';
$route['cek-login-google'] = 'sosialmedia/ceklogingoogle';
$route['privacy-police'] = 'sosialmedia/facebook_privacy_police';




// --------------------------------------------------------- Web subscribe
$route['subscribe/tambah-data'] = 'subscribe/simpandata';

// --------------------------------------------------------- Api
$route['api'] = 'api/index';
$route['api/kategori-list'] = 'api/kategori';
$route['api/daftar-produk'] = 'api/daftarproduk';
$route['api/produk-detail'] = 'api/produkdetail';
$route['api/slider'] = 'api/slider';



// --------------------------------------------------------- web weding
$route['wedding'] = 'wedding/index';

// --------------------------------------------------------- Web Lengkap

$route['(:any)'] = 'menu/list_daftar/$1';

