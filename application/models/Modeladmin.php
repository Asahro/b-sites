<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modeladmin extends CI_Model{
    
    public function daftar_admin(){
        $this->db->select('*');
        $this->db->from('admin_user');
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function ambil_admin($id){
        $this->db->select('*');
        $this->db->from('admin_user');
        $this->db->where('id', $id);
        $data["data"] = $this->db->get()->result_array();
        return $data;
    }

    public function cek_admin_exis($email){
        $this->db->select('*');
        $this->db->from('admin_user');
        $this->db->where('email', $email);
        $data["data"] = $this->db->get()->result_array();
        return $data;
    }

    public function tambah_admin($data){
        $data = $this->db->INSERT('admin_user', $data);
        return $data;
    }

    public function hapus_admin($id){
        $this->db->where('id', $id);
        $hapus = $this->db->delete('admin_user');
        if($hapus){
            $this->session->set_userdata('notif', 1);
            $this->session->set_userdata('type_notif', 'success');
            $this->session->set_userdata('title_notif', 'Berhasil Menghapus');
            $this->session->set_userdata('pesan_notif', "Hapus admin ".$this->input->post('nama')." berhasil");
        }else{
            $this->session->set_userdata('notif', 1);
            $this->session->set_userdata('type_notif', 'error');
            $this->session->set_userdata('title_notif', 'Gagal Menghapus');
            $this->session->set_userdata('pesan_notif', "Hapus admin ".$this->input->post('nama')." gagal");
        }
        return $data;
    }

    public function ambil_logo(){
        $this->db->select('*');
        $this->db->from("admin_logo");
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function ambil_role(){
        $this->db->select('*');
        $this->db->from("admin_role");
        $data = $this->db->get()->result_array();
        return $data;    
    }

    public function ambil_menu($role){
        $this->db->select('*');
        $this->db->from("admin_menu");
        $this->db->where('status', "active");
        $this->db->where('id_role', $role);
        $this->db->where('id_parent', 0);
        $this->db->order_by('urutan', 'asc');
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function ambil_submenu($id_menu){
        $this->db->select('*');
        $this->db->from("admin_menu");
        $this->db->where('status', "active");
        $this->db->where('id_parent', $id_menu);
        $this->db->order_by('urutan', 'asc');
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function check_link($link){
        // $this->db->select('*');
        // $this->db->from("admin_menu");
        // $this->db->where('link', $link);
        // $hasil = $this->db->get()->result_array();

        // $this->db->select('*');
        // $this->db->from("admin_menu");
        // $this->db->where('id_paren', $hasil['id']);
        // $data = $this->db->get()->result_array();
        // return $data
    }

    //----------------------------------------------------------------------- Proses CRUD semua menu
    public function ambil_menu_all($tipe_menu){
        $this->db->select('*');
        $this->db->from($tipe_menu);
        $this->db->where('id_parent', 0);
        $this->db->order_by('urutan', 'asc');
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function ambil_submenu_all($id_menu, $tipe_menu){
        $this->db->select('*');
        $this->db->from($tipe_menu);
        $this->db->where('id_parent', $id_menu);
        $this->db->order_by('urutan', 'asc');
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function tambah_menu_all($data_insert, $parent, $urutan, $tipe_menu){
        $this->db->set('urutan', 'urutan+1', FALSE);
        $this->db->where('id_parent =', $parent);
        $this->db->where('urutan >=', $urutan);
        $this->db->update($tipe_menu);
        $data = $this->db->INSERT($tipe_menu, $data_insert);
        $all_lower = str_replace(" ","_",$tipe_menu);
        $first_upercase = ucfirst($all_lower);
        if($data){
            $this->session->set_userdata('notif', 1);
            $this->session->set_userdata('type_notif', 'success');
            $this->session->set_userdata('pesan_notif', "Tambah ".$all_lower." berhasil. ".$first_upercase." ". $data_insert['title']. " berhasil ditambahkan.");
        }else{
            $this->session->set_userdata('error', 1);
            $this->session->set_userdata('type_notif', 'success');
            $this->session->set_userdata('pesan_notif', "Tambah ".$all_lower." gagal. ".$first_upercase." ". $data_insert['title']. " gagal ditambahkan.");
        }
        return $data;    
    }

    // sudah di tes, bekerja dengan baik

    public function inactive_menu_all($id, $tipe_menu){
        $data = array(
            "status" => 'inactive',
        );
        $this->db->where('id =', $id);
        $data = $this->db->UPDATE($tipe_menu, $data);
        return $data;
    }

    public function active_menu_all($id, $tipe_menu){
        $data = array(
            "status" => 'active',
        );
        $this->db->where('id =', $id);
        $data = $this->db->UPDATE($tipe_menu, $data);
        return $data;
    }

    public function hapus_menu_all($id, $urutan, $parent, $tipe_menu){
        $this->db->where('id', $id);
        $data = $this->db->delete($tipe_menu);
        $this->db->set('urutan', 'urutan-1', FALSE);
        $this->db->where('id_parent =', $parent);
        $this->db->where('urutan >=', $urutan);
        $this->db->update($tipe_menu);
        return $data;
    }




    //----------------------------------------------------------------------- Proses CRUD menu admin
    public function ambil_menu_admin(){
        $this->db->select('*');
        $this->db->from("admin_menu");
        $this->db->where('id_parent', 0);
        $this->db->order_by('urutan', 'asc');
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function ambil_submenu_admin($id_menu){
        $this->db->select('*');
        $this->db->from("admin_menu");
        $this->db->where('id_parent', $id_menu);
        $this->db->order_by('urutan', 'asc');
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function tambah_menu_admin($data_insert, $parent, $urutan){
        $this->db->set('urutan', 'urutan+1', FALSE);
        $this->db->where('id_parent =', $parent);
        $this->db->where('urutan >=', $urutan);
        $this->db->update('admin_menu');
        $data = $this->db->INSERT('admin_menu', $data_insert);
        if($data){
            $this->session->set_userdata('notif', 1);
            $this->session->set_userdata('type_notif', 'success');
            $this->session->set_userdata('pesan_notif', "Tambah admin menu berhasil. Admin menu ". $data_insert['title']. " berhasil ditambahkan.");
        }else{
            $this->session->set_userdata('error', 1);
            $this->session->set_userdata('type_notif', 'success');
            $this->session->set_userdata('pesan_notif', "Tambah admin menu gagal. Admin menu ". $data_insert['title']. " gagal ditambahkan.");
        }
        return $data;    
    }

    public function inactive_menu_admin($id){
        $data = array(
            "status" => 'inactive',
        );
        $this->db->where('id =', $id);
        $data = $this->db->UPDATE('admin_menu', $data);
        return $data;
    }

    public function active_menu_admin($id){
        $data = array(
            "status" => 'active',
        );
        $this->db->where('id =', $id);
        $data = $this->db->UPDATE('admin_menu', $data);
        return $data;
    }

    public function hapus_menu_admin($id, $urutan, $parent){
        $this->db->where('id', $id);
        $data = $this->db->delete('admin_menu');
        $this->db->set('urutan', 'urutan-1', FALSE);
        $this->db->where('id_parent =', $parent);
        $this->db->where('urutan >=', $urutan);
        $this->db->update('admin_menu');
        return $data;
    }

    //----------------------------------------------------------------------- Proses CRUD menu web
    public function ambil_menu_web(){
        $this->db->select('*');
        $this->db->from('web_menu');
        $this->db->order_by('urutan', 'asc');
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function ambil_submenu_web($id_menu){
        $this->db->select('*');
        $this->db->from("web_menu");
        $this->db->where('id_parent', $id_menu);
        $this->db->order_by('urutan', 'asc');
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function tambah_menu_web($data_insert, $parent, $urutan){
        $this->db->set('urutan', 'urutan+1', FALSE);
        $this->db->where('id_parent =', $parent);
        $this->db->where('urutan >=', $urutan);
        $this->db->update('web_menu');
        $data = $this->db->INSERT('web_menu', $data_insert);
        if($data){
            $this->session->set_userdata('notif', 1);
            $this->session->set_userdata('type_notif', 'success');
            $this->session->set_userdata('pesan_notif', "Tambah web menu berhasil. Web menu ". $data_insert['title']. " berhasil ditambahkan.");
        }else{
            $this->session->set_userdata('error', 1);
            $this->session->set_userdata('type_notif', 'success');
            $this->session->set_userdata('pesan_notif', "Tambah web menu gagal. Web menu ". $data_insert['title']. " gagal ditambahkan.");
        }
        return $data;    
    }

    public function inactive_menu_web($id){
        $data = array(
            "status" => 'inactive',
        );
        $this->db->where('id =', $id);
        $data = $this->db->UPDATE('web_menu', $data);
        return $data;
    }

    public function active_menu_web($id){
        $data = array(
            "status" => 'active',
        );
        $this->db->where('id =', $id);
        $data = $this->db->UPDATE('web_menu', $data);
        return $data;
    }

    public function hapus_menu_web($id, $urutan, $parent){
        $this->db->where('id', $id);
        $data = $this->db->delete('web_menu');
        $this->db->set('urutan', 'urutan-1', FALSE);
        $this->db->where('id_parent =', $parent);
        $this->db->where('urutan >=', $urutan);
        $this->db->update('web_menu');
        return $data;
    }




    //------------------------------------------------------------------------------------------- Login Admin Proses
    public function check_login($kontak,$password){
        $this->db->select('*');
        $this->db->from('admin_user');
        if (filter_var($kontak, FILTER_VALIDATE_EMAIL)){
            $this->db->where('email', $kontak);
        }else{
            $this->db->where('nomor_telepone', $kontak);
        }
        $data = $this->db->get()->result_array();
        if ($data){
            if ($password == $data[0]['password']){ // sistem hash belum jadi
                $this->session->set_userdata('notif', 1);
                $this->session->set_userdata('type_notif', 'success');
                $this->session->set_userdata('title_notif', 'Login Berhasil');
                $this->session->set_userdata('image_notif', $data[0]['photo']);
                $this->session->set_userdata('pesan_notif', "Selamat Datang ". $data[0]['nama']);
                return $data;
            }else{
                $this->session->set_userdata('notif', 1);
                $this->session->set_userdata('type_notif', 'error');
                $this->session->set_userdata('title_notif', 'Login Gagal');
                $this->session->set_userdata('pesan_notif', "Email dan Password tidak sesuai. Harap cek kembali");
                return false;
            }
        }
        $this->session->set_userdata('notif', 1);
        $this->session->set_userdata('type_notif', 'error');
        $this->session->set_userdata('title_notif', 'Login Gagal');
        $this->session->set_userdata('pesan_notif', "Email Tidak Ditemukan, Pastikan penulisan benar atau jika belum memiliki akun dapat melakukan pendaftaran");
        return false;
    }
    
    public function lupa_password($kontak){
        $this->db->select('*');
        $this->db->from('admin_user');
        if (filter_var($kontak, FILTER_VALIDATE_EMAIL)){
            $this->db->where('email', $kontak);
            $data = $this->db->get()->result_array();
            if ($data){
                $this->session->set_flashdata('success', "Silahkan Periksa Email Anda. Jika tidak ditemukan periksa FOLDER SPAM");
                // helper email
                return 1;
            }
        }else{
            $this->db->where('nomor', $kontak);
            $data = $this->db->get()->result_array();
            if ($data){
                    //helper sms
                    $this->session->set_flashdata('success', "SMS Verifikasi Telah Dikirim");
                    return 2;                    
            }            
        }
        $this->session->set_flashdata('error', "Nomor Handphone Tidak Ditemukan, \n Pastikan penulisan benar atau jika belum memiliki akun dapat melakukan pendaftaran");
        return false;
    }

    public function change_password($newpassword){
        $data = array(
            "password" => create_hash($newpassword),
        );
        $this->db->where('email', "saya@ahmadsahro.info");
        return($this->db->UPDATE('admin_user', $data));
    }








}
?>
