<?php

session_start();

$koneksi = mysqli_connect("localhost", "root", "", "siperpus");

$id_anggota = $_GET["id_anggota"];

$query = mysqli_query($koneksi, "DELETE FROM anggota where id_anggota= $id_anggota");
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
