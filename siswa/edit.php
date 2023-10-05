<section class="content">
    <div class="row">
        <div class="col-8">
            <h1>Modul Edit siswa</h1>
    </div>
    <div class="col-4">
        <a href="?m=siswa&s=tampil" class="btn btn-large btn-info float-end">Kembali</a>
</div>
    <?php
    include_once('koneksi.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM siswa WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql);
    $row  = mysqli_fetch_array($query);
    ?>
<div class="col">
<form action="?m=siswa&s=update" method="post">
    <div class="mb-2">
        <label for="">Nama siswa</label>
        <input type="text" name="nama_siswa" value="<?= $row['nama_siswa'] ?>" class="form-control" autofocus>
    </div>
    <div class="mb-2">
        <label for="">Kapasitas</label>
        <input type="number" name="kapasitas" class="form-control" value="<?= $row['kapasitas'] ?>" >
    </div>
    <div class="mb-2">
        <label for="">Terisi</label>
        <input type="number" name="terisi" class="form-control" value="<?= $row['terisi'] ?>" >
    </div>
    <div class="mb-2">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <input type="reset" class="btn btn-warning">
        <input type="submit" name="update" value="update" class="btn btn-primary">
        </div>
         </form>
      </div>
    </div>
</section>
