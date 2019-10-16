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
        $data = $this->db->delete('admin_user');
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

    public function ambil_menu_menu(){
        $this->db->select('*');
        $this->db->from("admin_menu");
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


    public function ambil_submenu_menu($id_menu){
        $this->db->select('*');
        $this->db->from("admin_menu");
        $this->db->where('id_parent', $id_menu);
        $this->db->order_by('urutan', 'asc');
        $data = $this->db->get()->result_array();
        return $data;
    }


    public function tambah_menu($data_insert, $parent, $urutan){
        $this->db->set('urutan', 'urutan+1', FALSE);
        $this->db->where('id_parent =', $parent);
        $this->db->where('urutan >=', $urutan);
        $this->db->update('admin_menu');
        $data = $this->db->INSERT('admin_menu', $data_insert);
        return $data;    
    }

    public function inactive_menu($id){
        $data = array(
            "status" => 'inactive',
        );
        $this->db->where('id =', $id);
        $data = $this->db->UPDATE('admin_menu', $data);
        return $data;
    }

    public function active_menu($id){
        $data = array(
            "status" => 'active',
        );
        $this->db->where('id =', $id);
        $data = $this->db->UPDATE('admin_menu', $data);
        return $data;
    }

    public function hapus_menu($id, $urutan, $parent){
        $this->db->where('id', $id);
        $data = $this->db->delete('admin_menu');
        $this->db->set('urutan', 'urutan-1', FALSE);
        $this->db->where('id_parent =', $parent);
        $this->db->where('urutan >=', $urutan);
        $this->db->update('admin_menu');
        return $data;
    }

    public function menu_home(){
        $this->db->select('*');
        $this->db->from('web_menu');
        $this->db->where('status', 1);
        $this->db->order_by('urutan', 'asc');
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function spesial_menu_home(){
        $this->db->select('*');
        $this->db->from('web_menu');
        $this->db->where('status', 2);
        $this->db->order_by('urutan', 'asc');
        $data = $this->db->get()->result_array();
        return $data;
    }

        // $query->result();
        // $query->row_array();
        // $query->num_rows();

        // $this->db->get()->result_array();
        // return($this->db->UPDATE('admin', $newpassword));
                
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
