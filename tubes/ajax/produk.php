<?php

require "../adminpanel/function/db.php";

$keyword = $_GET['keyword'];
$query = mysqli_query($link, "SELECT a.*, b.nama AS nama_kategori FROM produck a JOIN kategori b  ON a.kategori_id = b.id WHERE a.nama LIKE '%$keyword%' OR b.nama LIKE '%$keyword%'");

?>

<table class="table" id="container">
  <!-- atasnya table -->
  <thead>
    <tr>
      <th>No.</th>
      <th>Foto</th>
      <th>Nama</th>
      <th>Kategori</th>
      <th>Harga</th>
      <th>Ketersediaan Stok</th>
      <th>Action</th>
    </tr>
  </thead>

  <!-- bagian isi tabel -->
  <tbody>
    <?php 
    if (mysqli_num_rows($query) < 1) {
      ?>
      <tr>
        <td colspan="7" class="text-center">Data Tidak Ditemukan</td>
      </tr>
      <?php
    } else {
      $jumlah = 1;
      while ($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
          <td><?= $jumlah; ?></td>
          <td><img src="../img/image/<?php echo $data['foto']; ?>" width="50"></td>
          <td><?php echo $data['nama']; ?></td>
          <td><?php echo $data['nama_kategori']; ?></td>
          <td>Rp. <?php echo number_format($data['harga']); ?></td>
          <td><?php echo $data['ketersediaan_stok']; ?></td>
          <td> 
            <a href="produk-detail.php?q=<?php echo $data['id'];?>" class="btn btn-info"><i class="fas fa-search"></i></a>
          </td>
        </tr>
        <?php
        $jumlah++;
      }
    }
    ?>
  </tbody>
</table>
