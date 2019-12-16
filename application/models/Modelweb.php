<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelweb extends CI_Model{
    
    public function daftar_jaminan(){
        $this->db->select('*');
        $this->db->from('web_jaminan');
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function daftar_produk(){
        $this->db->select('*');
        $this->db->from('produk_list');
        // $this->db->like('', $search);
        $this->db->join('produk_list_kategori', 'produk_list_kategori.id = produk_list.id_daftar_kategori');
        $this->db->order_by('produk_list.waktu_dibuat', 'DESC');
        $this->db->limit(12);
        $data = $this->db->get()->result_array();

        return $data;
    }

    public function tambahjaminan($data){
        $data = $this->db->INSERT('web_jaminan', $data);
        return $data;
    }

    public function ambil_menu(){
        $this->db->select('*');
        $this->db->from('web_menu');
        $this->db->order_by('urutan', 'asc');
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function ambil_submenu($id_menu){
        $this->db->select('*');
        $this->db->from("web_menu");
        $this->db->where('id_parent', $id_menu);
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

}
?>
