<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelProduk extends CI_Model
{
    public function getProduk(){
        return $this->db->get('produk');
    }

    public function simpanProduk($data, $table){
        $this->db->insert($table,$data);
    }

    public function getProdukWhere($where, $table){
        return $this->db->get_where($table, $where);
    }

    public function updateProduk($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapusProduk($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function find($id){
        $result = $this->db->where('id', $id)
                            ->limit(1)
                            ->get('produk');
        if($result->num_rows() > 0) {
            return $result->row();
        }
        else{
            return array();
        }
    }

    public function detailProduk($id){
        $result = $this->db->where('id', $id)->get('produk');
        if($result->num_rows() > 0){
            return $result->result();
        }
        else{
            return false;
        }
    }

    public function dataBouquet(){
        return $this->db->get_where("produk", array('kategori' => 'Bouquet'));
    }

    public function dataFleur(){
        return $this->db->get_where("produk", array('kategori' => 'Fleur'));
    }

    public function dataDekorasi(){
        return $this->db->get_where("produk", array('kategori' => 'Dekorasi'));
    }

    public function dataVas(){
        return $this->db->get_where("produk", array('kategori' => 'Vas'));
    }

    public function getKategori(){
        return $this->db->get('kategori');
    }
}