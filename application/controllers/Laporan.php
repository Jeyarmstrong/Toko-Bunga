<?php
defined('BASEPATH') or exit('No Direct script access allowed');
class Laporan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function laporan_dataproduk()
    {
        $data['judul'] = 'Laporan Penjualan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        // $data['produk'] = $this->ModelKendaraan->cekData()->result_array();
        $data['receipt'] = $this->ModelReceipt->tampilData();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/dataproduk', $data);
        $this->load->view('admin/footer');
    }

    public function laporan_print_datapenjualan()
    {
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['receipt'] = $this->ModelReceipt->tampilData();

        $this->load->view('admin/laporan_print_datapenjualan', $data);

    }

    public function laporan_penjualan_pdf()
    {
        $data['receipt'] = $this->ModelReceipt->tampilData();
        // $this->load->library('dompdf_gen')
        $sroot = $_SERVER['DOCUMENT_ROOT'];
        include $sroot . "/4ever/application/third_party/dompdf/autoload.inc.php";
        $dompdf = new Dompdf\Dompdf();
        $this->load->view('admin/laporan_penjualan_pdf', $data);
        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape
        $html = $this->output->get_output();
        $dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("laporan_datapenjualan.pdf", array('Attachment' => 0));
        // nama file pdf yang di hasilkan
    }


    public function export_excel()
    {
        $data = array('title' => 'Laporan Data Penjualan','receipt' => $this->ModelReceipt->tampilData());

        $this->load->view('admin/export_excel', $data);

    }
}