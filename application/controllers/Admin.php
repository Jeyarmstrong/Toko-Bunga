<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->ModelUser->getUserLimit()->result_array();
        $data['produk'] = $this->ModelProduk->getProduk()->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admin/footer');
    }

    public function profile()
    {
        $data['judul'] = 'Profile Saya';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/user/profile', $data);
        $this->load->view('admin/footer');
    }

    public function ubahProfile()
    {
        $data['judul'] = 'Ubah Profil';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim', ['required' => 'Nama tidak Boleh Kosong']);

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/topbar', $data);
            $this->load->view('admin/user/ubahprofile', $data);
            $this->load->view('admin/footer');
            }
            else {
                $nama = $this->input->post('nama', true);
                $email = $this->input->post('email', true);
                //jika ada gambar yang akan diupload
                $upload_image = $_FILES['image']['name'];

                if ($upload_image) {
                    $config['upload_path'] = './assets/img/profile/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = '300000';
                    $config['max_width'] = '10024';
                    $config['max_height'] = '10000';
                    $config['file_name'] = 'pro' . time();
                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('image')) {$gambar_lama = $data['user']['image'];
                        if ($gambar_lama != 'default.jpg') {unlink(FCPATH . 'assets/img/profile/' . $gambar_lama);
                        }       
                        $gambar_baru = $this->upload->data('file_name');
                        $this->db->set('image', $gambar_baru);
                    } 
                    else { }
                }

            $this->db->set('nama', $nama);
            $this->db->where('email', $email);
            $this->db->update('user');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Profil Berhasil diubah </div>');
            redirect('admin/profile');
        }
    }

    public function user(){
        $data['judul'] = 'Data User';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['member'] = $this->ModelUser->cekData(['role_id' => (2)])->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/user/datauser', $data);
        $this->load->view('admin/footer', $data);
    }

    public function hapusUser($id)
    {
        $where = array('id' => $id);
        $this->ModelUser->hapusUser($where, 'user');
        redirect('admin/user');
    }

    public function produk()
    {
        $data['judul'] = 'Data Produk';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->ModelProduk->getProduk()->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/produk/produk', $data);
        $this->load->view('admin/footer');
    }

    public function createProduk(){
        $produk = $this->input->post('produk');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $image = $_FILES['image']['name'];
        if ($image = ''){}
        else {
            $config['upload_path'] = './assets/img/upload/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')){
                echo "Gambar Gagal di Upload";
            }
            else{
                $image=$this->upload->data('file_name');
            }
        }
        $data = [
            'produk' => $produk,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok,
            'image' => $image
        ];
        $this->ModelProduk->simpanProduk($data, 'produk');
        redirect('admin/produk');
    }

    public function editProduk($id)
    {
        $data['judul'] = 'Edit Data Produk';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $data['produk'] = $this->ModelProduk->getProdukWhere($where, 'produk')->result();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/produk/editproduk', $data);
        $this->load->view('admin/footer', $data);
    }

    public function ubahProduk()
    {
        $id = $this->input->post('id');
        $produk = $this->input->post('produk');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');

        $data = [
            'produk' => $produk,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok,
        ];
        $where = [
            'id' => $id
        ];
        $this->ModelProduk->updateProduk($where, $data, 'produk');
        redirect('admin/produk');
    }

    public function hapusProduk($id)
    {
        $where = array('id' => $id);
        $this->ModelProduk->hapusProduk($where, 'produk');
        redirect('admin/produk');
    }

    public function receipt()
    {
        $data['judul'] = 'Data Receipt';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['receipt'] = $this->ModelReceipt->tampilData();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/penjualan/receipt', $data);
        $this->load->view('admin/footer');
    }

    public function detailReceipt($id_receipt){
        $data['judul'] = 'Detail Receipt';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['receipt'] = $this->ModelReceipt->ambilIdReceipt($id_receipt);
        $data['det'] = $this->ModelReceipt->ambilIdDetReceipt($id_receipt);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/penjualan/detailreceipt', $data);
        $this->load->view('admin/footer', $data);
    }
}