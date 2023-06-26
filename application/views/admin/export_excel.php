<?php
header("Content-type: application/vnd-as-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-chache");
header("Expires: 0");
?>

<h3><center>Laporan Data Penjualan</center></h3>
        <br/>
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