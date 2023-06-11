<?php
require "../functions.php";

$keyword = $_GET['keyword'];

$query = "SELECT * FROM mahasiswa WHERE 
   nama LIKE '%$keyword%' OR
   jurusan LIKE '%$keyword%' OR
   email LIKE '%$keyword%' ";
   $students = query($query);
?>
<?php if ($students) : ?>

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
  </div>
</tbody>
</table>
<?php else : ?>
<div class="row">
  <div class="col-md-6">
  <div class="alert alert-danger" role="alert">
        Data tidak ada!
  </div>
  </div>
</div>
<?php endif ; ?>
