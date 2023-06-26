<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Pengunjung extends CI_Controller{

    function __construct(){
        parent :: __construct();
    }

    public function index(){
        $data['judul'] = "Home";
        $this->load->view('header', $data);
        $this->load->view('home', $data);
        $this->load->view('footer', $data);
    }

    public function kontak(){
        $data['judul'] = "Hubungi Kami";
        $this->load->view('header', $data);
        $this->load->view('menu/kontak', $data);
        $this->load->view('footer', $data);
    }

    public function galeri(){
        $data['judul'] = "Galeri Foto";
        $this->load->view('header', $data);
        $this->load->view('menu/galeri', $data);
        $this->load->view('footer', $data);
    }

    public function anggota(){
        $data['judul'] = "Anggota";
        $this->load->view('header', $data);
        $this->load->view('menu/anggota', $data);
        $this->load->view('footer', $data);
    }

    public function produk(){
        $data['judul'] = "Produk";
        $this->load->view('header', $data);
        $this->load->view('produk/produk', $data);
        $this->load->view('footer', $data);
    }
}