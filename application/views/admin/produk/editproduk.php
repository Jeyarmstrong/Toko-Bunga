<div class="container-fluid">
    <h3> Ubah Data Produk </h3>
    <?php foreach($produk as $b) : ?>
                <form method="post" action="<?php echo base_url(). 'admin/ubahProduk'?>">
                    <div class="form-group mb-2">
                        <label>Nama Produk</label>
                        <input type="text" name="produk" class="form-control" value="<?php echo $b->produk ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label>Keterangan</label>
                        <input type="hidden" name="id" class="form-control" value="<?php echo $b->id ?>">
                        <input type="text" name="keterangan" class="form-control" value="<?php echo $b->keterangan ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label>Kategori</label>
                        <input type="text" name="kategori" class="form-control" value="<?php echo $b->kategori ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control" value="<?php echo $b->harga ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label>Stok</label>
                        <input type="text" name="stok" class="form-control" value="<?php echo $b->stok ?>">
                    </div>
                    
                    <button type="submit" class="btn btn-primary"> Simpan </button>
                    <button class="btn btn-dark" onclick="window.history.go(-1)"> Kembali </button>
                </form>
            <?php endforeach ?>
</div>