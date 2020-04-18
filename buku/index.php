<?php
include '../koneksi.php';

$sql = ("SELECT * FROM buku ORDER BY judul");

$res = mysqli_query($koneksi, $sql);

$pinjam = array();

while ($data = mysqli_fetch_assoc($res)) {
    $buku[] = $data;
}

include '../asset/header.php';
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md">
        </div>
    </div>
</div>
<div class="card">
  <div class="card-header">
    <center><h2 class="card-title"> <i class="fas fa-book"></i> </i> Data Buku</h2></center>
  </div>
  <div class="card-body">
    <table class="table table-hover">


    <thead class="thead-dark">
      <a href="tambah.php" class="badge badge-danger">Tambah Data</a>
       <tr>
       <th scope="col">NO</th>
       <th scope="col">JUDUL</th>
       <th scope="col">PENGARANG</th>
       <th scope="col">STOK</th>
       <th scope="col">Aksi</th>
       </tr>
       <?php


        ?>
    </thead>
<tbody>
  <?php
    $no = 1;
    foreach($buku as $p ) { ?>

    <tr>
        <th scope="row"><?= $no ?></th>
        <td><?= $p['judul'] ?></th>
        <td><?= $p['pengarang'] ?></th>
        <td><?= $p['stok'] ?></th>

        <td>
          <a href="detail.php?id_buku=<?= $p['id_buku'] ?>&judul=<?= $p['judul'] ?>" class="badge badge-success">Detail</a>
          <a href="edit.php?id_buku=<?= $p['id_buku'] ?>" class="badge badge-warning">Edit</a>
          <a href="hapus.php?id_buku=<?= $p['id_buku'] ?>" class="badge badge-danger" onclick="return confirm('yakin ingin meghapus data?')">Hapus</a>

        </td>
    </tr>

<?php
    $no++;
}
?>

</tbody>
</table>
  </div>
</div>

<?php
include '../asset/footer.php';
?>
