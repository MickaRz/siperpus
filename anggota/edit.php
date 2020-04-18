<?php
include '../asset/header.php';
include '../koneksi.php';

$id_anggota = $_GET['id_anggota'];

$sql = mysqli_query($koneksi, "SELECT * FROM anggota WHERE id_anggota=$id_anggota");
$count= mysqli_fetch_assoc($sql);

?>

 <div class="container">
     <div class="row mt-4">
         <div class="col-md-9">
             <div class="card">
                 <div class="card-header">
                   <h2>Edit Data Anggota</h2>
                 </div>
                 <div class="card-body">
                   <form method="post" action="proses-edit.php">
                 <div class="form-group">
                   <label for="anggota">nama</label>
                   <input type="text" class="form-control" name="nama" id="anggota" value="<?php echo $count['nama'] ?>" placeholder="Masukkan nama">
                 </div>
                 <div class="form-group">
                   <label for="kelas">kelas</label>
                   <input type="text" class="form-control" name="kelas" id="kelas" value="<?php echo $count['kelas'] ?>" placeholder="Masukkan kelas">
                 </div>
                 <div class="form-group">
                   <label for="telp">telp</label>
                   <input type="text" class="form-control" name="telp" id="telp" value="<?php echo $count['telp'] ?>" placeholder="Masukkan telp">
                 </div>
                 <div class="form-group">
                   <label for="username">username</label>
                   <input type="text" class="form-control" name="username" id="username" value="<?php echo $count['username'] ?>" placeholder="Masukkan username">
                 </div>
                 <div class="form-group">
                   <label for="password">password</label>
                   <input type="password" class="form-control" name="password" id="password" value="<?php echo $count['password'] ?>" placeholder="Masukkan password">
                 </div>
                 <div class="form-group">
                  <label for="stok">Level</label>
                  <select class="form-control" name="id_level" style="width : 50">
                    <option value="">---pilih Level---</option>
                    <option value="1">Admin</option>
                     <option value="2">Operator</option>
                     <option value="3">User</option>
                  </select>
                </div>
         <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
     </form>

   </body>
 </html>
