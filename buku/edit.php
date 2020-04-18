<?php
include '../koneksi.php';
include '../asset/header.php';

$id_buku = $_GET['id_buku'];

$sql = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku=$id_buku");
$buku= mysqli_fetch_assoc($sql);

?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                  <h2>Edit Data Buku</h2>
                </div>
                <div class="card-body">
                  <form method="post" action="proses-edit.php">
                <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" class="form-control" name="judul" id="judul" value="<?php echo $buku['judul'] ?>" placeholder="Masukkan Judul">
                </div>
                <div class="form-group">
                  <label for="stok">penerbit</label>
                  <input type="text" class="form-control" name="penerbit" id="penerbit" value="<?php echo $buku['penerbit'] ?>" placeholder="Masukkan penerbit">
                  <small class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                  <label for="pengarang">pengarang</label>
                  <input type="text" class="form-control" name="pengarang" id="pengarang" value="<?php echo $buku['pengarang'] ?>" placeholder="Masukkan Pengarang">
                  <small class="form-text text-muted">Contoh: pidi baiq</small>
                </div>
                <div class="form-group">
                  <label for="stok">ringkasan</label>
                  <textarea type="text" cols="50" rows="10" class="form-control" name="ringkasan"value="<?php echo $buku['ringkasan']; ?>" id="ringkasan"></textarea>
                  <small class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                  <label for="stok">cover</label>
                  <input type="file" class="form-control" name="cover" id="cover" value="<?php echo $buku['cover'] ?>" placeholder="Masukkan cover">
                  <small class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                  <label for="stok">Stok</label>
                  <input type="number" class="form-control" name="stok" id="stok" value="<?php echo $buku['stok'] ?>" placeholder="Masukkan Stok">
                  <small class="form-text text-muted"></small>
                </div>
                 <div class="form-group">
                  <label for="stok">Kategori</label>
                  <select class="form-control" name="id_kategori" value="<?php echo $buku['id_kategori'] ?>" style="width : 50">
                    <option value="">---pilih kategori---</option>
                    <option value="1">Fiksi</option>
                     <option value="2">Non Fiksi</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary" name="edit">Edit</button>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../asset/footer.php';
?>
