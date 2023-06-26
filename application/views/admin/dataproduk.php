<!-- Begin Page Content -->

<div class="container-fluid">

    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-12">
            <?php if(validation_errors()){?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors();?>
                </div>
                <?php }?>
                <?= $this->session->flashdata('pesan'); ?>
                <a href="<?= base_url('laporan/laporan_print_datapenjualan'); ?>" class="btn btn-primary mb-3"><i class="fas fa-print"></i> Print</a>
                <a href="<?= base_url('laporan/laporan_penjualan_pdf'); ?>" class="btn btn-warning mb-3"><i class="far fa-file-pdf"></i> Download Pdf</a>
                <a href="<?= base_url('laporan/export_excel'); ?>" class="btn btn-success mb-3"><i class="far fa-file-excel"></i> Export ke Excel</a>
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">ALAMAT</th>
                        <th scope="col">TANGGAL PESAN</th>
                        <th scope="col">BATAS PEMBAYARAN</th>
                        <th scope="col">PILIHAN</th>
                    </tr>
                </thead>
                <tbody>
                <?php $a = 1; 
                foreach ($receipt as $k) : ?>
                <tr>
                    <th scope="row"><?= $a++; ?></th>
                    <td><?php echo $k->nama; ?></td>
                    <td><?php echo $k->alamat; ?></td>
                    <td><?php echo $k->tgl_pesan; ?></td>
                    <td><?php echo $k->batas_bayar; ?></td>
                    <td>
                        <?php echo anchor('admin/detailReceipt/' . $k->id, '<div class="badge badge-info"><i class="fas fa-edit">Detail</i></div>') ?>
                    </td>
                </tr>
                <?php endforeach ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
