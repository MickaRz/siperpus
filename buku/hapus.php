<?php

session_start();

$koneksi = mysqli_connect("localhost", "root", "", "siperpus");

$id_buku = $_GET["id_buku"];

$query = mysqli_query($koneksi, "DELETE FROM buku where id_buku= $id_buku");
// var_dump($query);

if ($query>0) {
  echo "
      <script>
        alert('Data berhasil di hapus!!');
        document.location.href = 'index.php';
      </script>
  ";
}
else {
  echo "
      <script>
      alert('data gagal dihapus');
      document.location.href = 'index.php';

  ";
}


 ?>
