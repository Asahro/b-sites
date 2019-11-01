<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelproduk extends CI_Model{

	public function daftar_produk($offset, $fungsi, $type, $sortir, $search){
        $this->db->select('*');
        $this->db->from('produk_list');
        // $this->db->like('', $search);
        $this->db->join('produk_list_kategori', 'produk_list_kategori.id = produk_list.id_daftar_kategori');
        $this->db->order_by('produk_list.waktu_dibuat', 'DESC');
        $this->db->limit(12);
        $this->db->offset($offset);
        $data = $this->db->get()->result_array();

        return $data;
	}

    public function kategori_produk($kategori){
        $this->db->select('*');
        $this->db->from('produk_list');
        // $this->db->where('nama_produk', $nama);
        // $this->db->like('', $search);
        $this->db->join('produk_list_kategori', 'produk_list_kategori.id = produk_list.id_daftar_kategori');
        // $this->db->order_by('produk_list.waktu_dibuat', 'DESC');
        $this->db->limit(25);
        // $this->db->offset($offset);
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function daftar_produk_admin(){
        $this->db->select('*');
        $this->db->from('produk_list');
        // $this->db->like('', $search);
        $this->db->join('produk_list_kategori', 'produk_list_kategori.id = produk_list.id_daftar_kategori');
        $this->db->order_by('produk_list.waktu_dibuat', 'DESC');
        $data = $this->db->get()->result_array();

        return $data;
    }

    public function detail_produk($nama){
        $nama = str_replace("-"," ",$nama);
        $this->db->select('*');
        $this->db->join('produk_list_kategori', 'produk_list_kategori.id = produk_list.id_daftar_kategori');
        $this->db->from("produk_list");
        $this->db->where('nama_produk', $nama);
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function jumlah_produk(){
        $this->db->select('*');
        $this->db->from('produk_list');
        $this->db->join('produk_list_kategori', 'produk_list_kategori.id = produk_list.id_daftar_kategori');
        $this->db->order_by('produk_list.waktu_dibuat', 'DESC');
        return $this->db->count_all_results();
    }
    public function new_produk(){
        $this->db->select('*');
        $this->db->from('produk_list');
        $this->db->join('produk_list_kategori', 'produk_list_kategori.id = produk_list.id_daftar_kategori');
        $this->db->order_by('produk_list.waktu_dibuat', 'DESC');
        $this->db->limit(10);
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function kategori(){
        $this->db->select('*');
        $this->db->from('produk_list_kategori');
        $this->db->order_by('waktu_dibuat', 'DESC');
        $this->db->where('kategori_id', 2);
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function produk_promo(){
        $this->db->select('*');
        $this->db->from('produk_list');
        // $this->db->join('produk_list_kategori', 'produk_list_kategori.id = produk_list.id_daftar_kategori');
        // $this->db->where('produk_list.promo', 1);
        $this->db->limit(10);
        $data = $this->db->get()->result_array();
        return $data;
    }
    
    public function best_seller(){
        // $this->db->select('*');
        // $this->db->from('produk_terjual');
        // $this->db->join('produk_list', 'produk_list.id = produk_terjual.id_produk');
        // // $this->db->join('list_kategori', 'list_kategori.id = produk.id_daftar_kategori');
        // $data = $this->db->get()->result_array();
        // return $data;
    }

    public function daftar_list_type(){
        $this->db->select('*');
        $this->db->from('produk_list_kategori');
        $this->db->where('kategori_id', 2);
        $this->db->limit(10);
        $data = $this->db->get()->result_array();
        return $data;
    }


    public function daftar_list_fungsi(){
        $this->db->select('*');
        $this->db->from('produk_list_kategori');
        $this->db->where('kategori_id', 1);
        $this->db->limit(10);
        $data = $this->db->get()->result_array();
        return $data;
    }
}
?>