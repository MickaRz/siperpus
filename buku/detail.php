<?php
include '../asset/header.php';
include '../koneksi.php';

$id_buku = $_GET['id_buku'];

$query = mysqli_query($koneksi, "SELECT * FROM buku where id_buku=$id_buku");
$buku = mysqli_fetch_assoc($query);
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md">
        </div>
    </div>
</div>
<div class="card">
  <div class="card-header">
    <center><h2 class="card-title"> <i class="fas fa-book"></i> </i>Detail Data Buku</h2></center>
  </div>
  <div class="card-body">
    <table class="table table-hover">
                  <tr>
                        <td><strong>Cover</strong></td>
                        <td><img width="250" src="Cover/<?php echo $buku['cover'] ?>"></td>
                  </tr>
                  <tr>
                        <td><strong>Judul</strong></td>
                        <td><?php echo $buku['judul'] ?></td>
                  </tr>
                  <tr>
                        <td><strong>Penerbit</strong></td>
                        <td><?php echo $buku['penerbit'] ?></td>
                  </tr>
                  <tr>
                        <td><strong>pengarang</strong></td>
                        <td><?php echo $buku['pengarang'] ?></td>
                  </tr>
                  <tr>
                        <td><strong>ringkasan</strong></td>
                        <td><textarea cols="50" rows="10"> <?php echo $buku['ringkasan'] ?></textarea></td>
                  </tr>
                  <tr>
                        <td><strong>stok</strong></td>
                        <td><?php echo $buku['stok'] ?></td>
                  </tr>
                  <tr>
                        <td><strong>Kategori</strong></td>
                        <td><?php echo $buku['id_kategori'] ?></td>
                  </tr>

                </table>
        </div>
    </div>


<?php
include '../asset/footer.php';
?>
