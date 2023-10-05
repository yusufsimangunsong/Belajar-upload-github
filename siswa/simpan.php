<?php
if(isset($_POST['simpan'])){
    include_once('koneksi.php');
    $nama_siswa = $_POST['nama_siswa'];
    $kapasitas    = $_POST['kapasitas'];
    $terisi       = $_POST['terisi'];

    $sql="INSERT INTO siswa SET nama_siswa='$nama_siswa', kapasitas='$kapasitas', terisi='$terisi' ";
    $query=mysqli_query($koneksi, $sql);
    if($query) {
        header('location:index.php?m=siswa');
        // Var_dump($sql);
        // Cek error
    } else {
        include 'index.php?m=siswa';
        echo 'script language="JavaScipt">';
        echo 'alert("Gagal menambahkan data")';
        echo '</script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}
?>