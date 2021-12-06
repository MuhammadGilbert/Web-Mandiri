<div class="row">
    <?php   
    include 'koneksi.php';
    $sql="select * from tblproduct order by id_produk desc";
    $hasil=mysqli_query($con,$sql);
    $jumlah = mysqli_num_rows($hasil);
    if ($jumlah>0){
        while ($data = mysqli_fetch_array($hasil)):
    ?>
        <div class="col-sm-3">
            <div class="thumbnail">
                <a href="#"><img src="image2/<?php echo $data['gambar'];?>" width="100%" alt=""></a>
                <div class="caption">
                    <h3><?php echo $data['nama'];?></h3>
                    <h4>Rp. <?php echo number_format($data['harga'],2,',','.'); ?> </h4>
                    <p><a href="shop.php?halaman=keranjang-belanja&kode_produk=<?php echo $data['kode_produk'];?>&aksi=tambah_produk&jumlah=1" class="btn btn-primary btn-block" role="button">Masukan Keranjang</a></p>
                </div>
            </div>
        </div>
        <?php 
        endwhile;
    }else {
        echo "<div class='alert alert-warning'> Tidak ada produk pada kategori ini.</div>";
    };
    ?>
</div>