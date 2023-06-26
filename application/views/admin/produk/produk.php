<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
            <?php if(validation_errors()){?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors();?>
                </div>
            <?php }?>
            <?= $this->session->flashdata('pesan'); ?>
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#ProdukBaruModal"><i class="fas fa-file-alt"></i> Tambah Produk</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">PRODUK</th>
                        <th scope="col">KETERANGAN</th>
                        <th scope="col">KATEGORI</th>
                        <th scope="col">HARGA</th>
                        <th scope="col">STOK</th>
                        <th scope="col">PILIHAN</th>
                    </tr>
                </thead>
                <tbody>
                <?php $a = 1; 
                foreach ($produk as $k) { ?>
                <tr>
                    <th scope="row"><?= $a++; ?></th>
                    <td><?= $k['produk']; ?></td>
                    <td><?= $k['keterangan']; ?></td>
                    <td><?= $k['kategori']; ?></td>
                    <td><?= $k['harga']; ?></td>
                    <td><?= $k['stok']; ?></td>
                    <td>
                        <a href="<?=base_url('admin/editProduk/') . $k['id'];?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                        <a href="<?=base_url('admin/hapusProduk/') . $k['id'];?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul.' '.$k['produk'];?>?');" class="badge badge-danger"><i class="fas fa-trash"></i>Hapus</a>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<!-- Modal Tambah kategori baru-->
<div class="modal fade" id="ProdukBaruModal" tabindex="-1" role="dialog" aria-labelledby="ProdukBaruModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="=ProdukBaruModalLabel">Tambah Data Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url(). 'admin/createProduk'; ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="produk" id="produk" placeholder="Masukan Nama Produk" class="form-control form-control-user">
                    </div>
                    <div class="form-group">
                        <input type="text" name="keterangan" id="keterangan" placeholder="Masukan Keterangan Produk" class="form-control form-control-user">
                    </div>
                    <div class="form-group">
                        <input type="text" name="kategori" id="kategori" placeholder="Masukan Kategori Produk" class="form-control form-control-user">
                    </div>
                    <div class="form-group">
                        <input type="text" name="harga" id="harga" placeholder="Masukan Harga Produk" class="form-control form-control-user">
                    </div>
                    <div class="form-group">
                        <input type="text" name="stok" id="stok" placeholder="Masukan Stok Produk" class="form-control form-control-user">
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                            <input type="file" class="form-control form-control-user ms-2" id="image" name="image">
                            <label class="custom-file-label ms-2"for="image">Pilih file</label>
                                    
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-ban"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
                </div>
<!-- End of Modal Tambah Mneu -->