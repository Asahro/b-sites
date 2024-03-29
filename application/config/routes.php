<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'menu';
// $route['home'] = 'menu/index';
// $route['kontak'] = 'menu/kontak';
// $route['penawaran'] = 'menu/penawaran';
// $route['cara-pembelian'] = 'menu/cara_pembelian';
// $route['faq'] = 'menu/faq';
// $route['daftar'] = 'menu/daftar';
// $route['lupa-password'] = 'menu/lupa';


// $route['default_controller'] = 'bimbel';
$route['home'] = 'bimbel/index';
$route['kontak'] = 'bimbel/kontak';
$route['penawaran'] = 'bimbel/penawaran';
$route['cara-pembelian'] = 'bimbel/cara_pembelian';
$route['faq'] = 'bimbel/faq';
$route['daftar'] = 'bimbel/daftar';
$route['lupa-password'] = 'bimbel/lupa';



// -------------------------------------------------------------- Admin Dashboard
$route['404_override'] = 'menu/error404';
$route['translate_uri_dashes'] = FALSE;




$route['admin'] = 'admin/index';
$route['admin/buka-kunci'] = 'admin/buka_kunci';
$route['admin/cek-login'] = 'admin/cek_login';
$route['admin/simpan-gambar'] = 'admin/simpan_gambar';
$route['admin/cek-lupa-password'] = 'admin/cek_lupa_password';
$route['admin/upload-data-admin'] = 'admin/upload_data_admin';














// ------------------------------------------------------Api CRUD Data
$route['api/ambil-logo'] = 'api/ambil_logo';
$route['api/tambah-logo'] = 'api/tambah_logo';
$route['api/hapus-logo'] = 'api/hapus_logo';
$route['api/ubah-logo'] = 'api/ubah_logo';

$route['api/ambil-komponen'] = 'api/ambil_komponen';
$route['api/tambah-komponen'] = 'api/tambah_komponen';
$route['api/hapus-komponen'] = 'api/hapus_komponen';
$route['api/ubah-komponen'] = 'api/ubah_komponen';

$route['api/ambil-menu-web'] = 'api/ambil_menu_web';
$route['api/tambah-menu-web'] = 'api/tambah_menu_web';
$route['api/hapus-menu-web'] = 'api/hapus_menu_web';
$route['api/ubah-menu-web'] = 'api/ubah_menu_web';

$route['api/ambil-menu-admin'] = 'api/ambil_menu_admin';
$route['api/tambah-menu-admin'] = 'api/tambah_menu_admin';
$route['api/hapus-menu-admin'] = 'api/hapus_menu_admin';
$route['api/ubah-menu-admin'] = 'api/ubah_menu_admin';

$route['api/ambil-submenu-admin/(:any)'] = 'api/ambil_submenu_admin/$1';
$route['api/ambil-submenu-web/(:any)'] = 'api/ambil_submenu_web/$1';



$route['admin/upload-menu-all/(:any)'] = 'admin/upload_menu_all/$1';
$route['admin/inactive-menu-admin/(:any)/(:any)'] = 'admin/inactive_menu_all/$1/$2';
$route['admin/active-menu-admin/(:any)/(:any)'] = 'admin/active_menu_all/$1/$2';
$route['admin/hapus-menu-admin/(:any)/(:any)/(:any)/(:any)'] = 'admin/hapus_menu_all/$1/$2/$3/$4';







$route['admin/(:any)'] = 'admin/view/$1';
$route['admin/(:any)/(:any)'] = 'admin/views/$1/$2';
$route['admin/(:any)/(:any)/(:any)'] = 'admin/viewss/$1/$2/$3';
$route['admin/(:any)/(:any)/(:any)/(:any)'] = 'admin/viewsss/$1/$2/$3/$4';




$route['email'] = 'menu/email_view';











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

