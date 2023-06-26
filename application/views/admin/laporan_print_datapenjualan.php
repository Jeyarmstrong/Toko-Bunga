<!DOCTYPE html>

<html>
<head>
    <title></title>
</head>
<body>
    
    <style type="text/css">
    .table-data{
        width: 100%;
        border-collapse: collapse;
    }
    .table-data tr th,
    .table-data tr td{
        border:1px solid black;
        font-size: 11pt;
        font-family:Verdana;
        padding: 10px 10px 10px 10px;
    }
    
    h3{
        font-family:Verdana;
    }
        </style>
        <h3><center>Laporan Data Kendaraan</center></h3>
        <br/>
        <table border class="table table-hover">
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

                <script type="text/javascript">
                window.print();
                </script>

                </body>
                </html>
                        