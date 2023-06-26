<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
            <?php if(validation_errors()){?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors();?>
                </div>
            <?php }?>
            <?= $this->session->flashdata('pesan'); ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">JADI MEMBER SEJAK</th>
                        <th scope="col">PILIHAN</th>
                    </tr>
                </thead>
                <tbody>
                <?php $a = 1; 
                foreach ($member as $k) { ?>
                <tr>
                    <th scope="row"><?= $a++; ?></th>
                    <td><?= $k['nama']; ?></td>
                    <td><?= $k['email']; ?></td>
                    <td><?= date ('d F Y', $k['tanggal_input']) ?></td>
                    <td>
                        <a href="<?=base_url('admin/hapusUser/') . $k['id'];?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul.' '.$k['nama'];?>?');" class="badge badge-danger"><i class="fas fa-trash"></i>Hapus</a>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
