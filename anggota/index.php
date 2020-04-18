<?php
include '../koneksi.php';

$sql = ("SELECT * FROM anggota ORDER BY id_anggota");

$res = mysqli_query($koneksi, $sql);

$pinjam = array();

while ($data = mysqli_fetch_assoc($res)) {
    $anggota[] = $data;
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
    <center><h2 class="card-title"> <i class="fas fa-book"></i> </i> Data Anggota</h2></center>
  </div>
  <div class="card-body">
    <table class="table table-hover">


    <thead class="thead-dark">
      <a href="tambah.php" class="badge badge-danger">Tambah Data</a>
       <tr>
       <th scope="col">NO</th>
       <th scope="col">NAMA</th>
       <th scope="col">KELAS</th>
       <th scope="col">TELP</th>
      <th scope="col">AKSI</th>
       </tr>
       <?php


        ?>
    </thead>
<tbody>
  <?php
    $no = 1;
    foreach ($anggota as $p ) { ?>

    <tr>
        <th scope="row"><?= $no ?></th>
        <td><?= $p['nama'] ?></th>
        <td><?= $p['kelas'] ?></th>
        <td><?= $p['telp'] ?></th>

        <td>
          <a href="detail.php?id_anggota=<?= $p['id_anggota'] ?>&nama=<?= $p['nama'] ?>" class="badge badge-success">Detail</a>
          <a href="edit.php?id_anggota=<?= $p['id_anggota'] ?>" class="badge badge-warning">Edit</a>
          <a href="hapus.php?id_anggota=<?= $p['id_anggota'] ?>" class="badge badge-danger" onclick="return confirm('yakin ingin meghapus data?')">Hapus</a>

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
