<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="" href="">
    <title>Cupcup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <header>
    <h1>🅦🅔🅑🅢🅘🅣🅔 🅟🅔🅝🅓🅐🅕🅣🅐🅡🅐🅝</h1>
    <h3>Tabel Nilai </h3>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?m=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?m=jurusan">Jurusan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?m=siswa">Siswa</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    </header>

    <div class="konten container">
    <?php
        if (isset($_GET['m'])) {
            $m = $_GET['m'];
            switch ($m) {
                case 'home':
                    include "home.php";
                    break;
                case 'jurusan':
                    include "jurusan/index.php";
                    break;
                case 'siswa':
                    include "siswa/index.php";
                    break;

                default:
                    include "home.php";
                    break;
            }
        } else {
            include('home.php');
        }
        ?>
    </div>

    <center><footer>
        &copy; Dibuat oleh <a href="https://10web-site.ai/91/robust-dassie/sale/" target="_blank" rel="noopener noreferrer">Muhammad Yusuf Simangunsong</a><br>
        TKJ Angkatan ke-29 - <a href="https://rumahgemilang.com" target="_blank" rel="noopener noreferrer">RGI</a> 
    </footer></center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>