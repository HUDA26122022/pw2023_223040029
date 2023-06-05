<?php
require "../adminpanel/function/db.php";

$keyword = $_GET['keyword'];
$query = mysqli_query($link, "SELECT a.*, b.nama AS nama_kategori FROM produck a JOIN kategori b  ON a.kategori_id = b.id WHERE a.nama LIKE '%$keyword%' OR b.nama LIKE '%$keyword%'");

if(mysqli_num_rows($query) > 0) {
    while($produk = mysqli_fetch_array($query)) {
        ?>
        <div class="col-md-4 mt-3">
            <div class="card h-100 lihat-detail">
                <div class="image-produk">
                    <img src="img/image/<?php echo $produk['foto']; ?>" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $produk['nama']; ?></h5>
                    <p class="card-text"><?php echo $produk['detail']; ?></p>
                    <p class="card-text text-harga"><b>Rp.<?php echo $produk['harga']; ?></b></p>
                    <a href="produk-detail.php?nama=<?php echo $produk['nama'];?>" class="btn warna4 text-white">Lihat Detail</a>
                </div>
            </div>
        </div>
        <?php
    }
} else {
    ?>
    <h2 class="text-center my-5">Produk yang kamu cari tidak ada</h2>
    <?php
}
?>
