<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelReceipt extends CI_Model
{
    public function index(){
        date_default_timezone_set('Asia/Jakarta');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');

        $receipt = array (
            'nama' => $nama,
            'alamat' => $alamat,
            'tgl_pesan' => date('Y-m-d H:i:s'),
            'batas_bayar' => date('Y-m-d H:i:s', mktime( date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))),
        );
        $this->db->insert('receipt', $receipt);
        $id_receipt = $this->db->insert_id();

        foreach ($this->cart->contents() as $item){
            $data = array(
                'id_receipt' => $id_receipt,
                'id_produk' => $item['id'],
                'nama_produk' => $item['name'],
                'jumlah' => $item['qty'],
                'harga' => $item['price'],
            );
            $this->db->insert('detail_receipt', $data);
        }
        return TRUE;
    }

    public function tampilData(){
        $result = $this->db->get('receipt');
        if($result->num_rows() > 0){
            return $result->result();
        }
        else{
            return false;
        }
    }

    public function ambilIdReceipt($id_receipt){
        $result = $this->db->where('id', $id_receipt)->limit(1)->get('receipt');
        if($result->num_rows() > 0){
            return $result->row();
        }
        else{
            return false;
        }
    }

    public function ambilIdDetReceipt($id_receipt){
        $result = $this->db->where('id_receipt', $id_receipt)->get('detail_receipt');
        if($result->num_rows() > 0){
            return $result->result();
        }
        else{
            return false;
        }
    }
}