<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modellogin extends CI_Model{
    
    public function check_data($table, $field, $value){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field, $value);
        $data = $this->db->get()->result_array();
        return $data;
    }

    //------------------------------------------------------------------------------------------------------ Deret Admin
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
                    $this->session->set_userdata('selamat datang', "Selamat datang ".$data[0]['nama'].".");
                    return $data;
            }else{
                $this->session->set_userdata('error', "Password Salah, Pastikan penulisan benar atau jika lupa dapat menggunakan buka password");
                return false;
            }
        }

        $this->session->set_userdata('error', "Email Tidak Ditemukan, Pastikan penulisan benar atau jika belum memiliki akun dapat melakukan pendaftaran");
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


    //-------------------------------------------------------------------------------- Deret User
    //----------------------------------------------------Register
    public function register_user($data){
        $data = $this->db->INSERT('user_calon', $data);
        return $data;
    }

    public function kode_konfirmasi_calon_user($code){

    }

    public function link_konfirmasi_calon_user($code){

    }


    // public function update_calon_user($data, $email){
    //     $this->db->where('email', $email);
    //     return($this->db->UPDATE('m_organization', $data));

    // }
        // $query->result();
        // $query->row_array();
        // $query->num_rows();

        // $this->db->get()->result_array();
        // return($this->db->UPDATE('admin', $newpassword));
        // $this->db->INSERT('proposal', $data_insert));
        
        // $this->db->where('id', $id_date);
        // $this->db->delete('events');
        
        // $this->db->select('*');
        // $this->db->from('events');
        // $this->db->where('id_proposal', $id_proposal);

        // $this->db->where('(id_lokasi_kegiatan = '.$id_location.') AND ((start BETWEEN "' . $start_time . '" AND "' . $end_time . '") OR (end BETWEEN "' . $start_time . '" AND "' . $end_time . '"))');
        // $this->db->limit(1);
        // $this->db->get();
        
        // $query=$this->db->get();
        // $query->result();
}
?>
