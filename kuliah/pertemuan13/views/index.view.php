<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">
  <h1>Halaman Home</h1>

  <h3>Daftar Mahasiswa</h3>

  <a href="tambah.php" class="btn btn-primary">Tambah Data Mahasiswa</a>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">gambar</th>
        <th scope="col">nim</th>
        <th scope="col">nama</th>
        <th scope="col">email</th>
        <th scope="col">jurusan</th>
        <th scope="col">aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <tr>
        <?php foreach ($students as $student) : ?>
        <th scope="row"><?= $i++; ?></th>
        <td>
          <img src="img/<?= $student['gambar']?>" width="50">
          


      </td>
      <td><?=  $student['nim']; ?></td>
      <td><?= $student['nama'];?></td>
      <td><?= $student['email']; ?></td>
      <td><?= $student['jurusan'];?></td>
      <td>
        <a href="ubah.php?id=<?= $student["id"]; ?>" class="btn btn-warning">ubah</a> |
        <a href="hapus.php?id=<?= $student["id"]; ?>" onclick="return confirm('yakin?');" class="btn btn-danger">hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>

<?php require('partials/footer.php'); ?>