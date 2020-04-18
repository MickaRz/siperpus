<?php

include '../koneksi.php';

if(isset($_POST['edit']))
{
$judul = $_POST['judul'];
$penerbit = $_POST['penerbit'];
$pengarang = $_POST['pengarang'];
$ringkasan = $_POST['ringkasan'];
$cover = $_POST['cover'];
$stok = $_POST['stok'];
$id_kategori = $_POST['id_kategori'];

$query = "UPDATE buku (judul,penerbit, pengarang, ringkasan, cover, stok, id_kategori)
            SET ('$judul','$penerbit' ,'$pengarang','$ringkasan','$cover', '$stok', '$id_kategori')";

$buku = mysqli_query($koneksi, $query);

$buku = mysqli_affected_rows($koneksi);
// var_dump($buku);
if($buku == 1)
{
   header("Location: index.php");
}
else
{
   header("Location: edit.php");
}

}
else
{
    header("Location: edit.php");
}

?>
