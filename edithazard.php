
<?php 
  include('db.php');
    $bandara = query("SELECT idbandara,nmbandara,kota FROM bandara ORDER BY nmbandara");
    $kategori = query("SELECT idkategori,nmkategori,keterangan FROM kategori ORDER BY nmkategori");
  
  $id =  isset($_GET['id']) ? $_GET['id'] : '';
  
  $query = "SELECT * FROM penumpang WHERE idpenumpang = $id LIMIT 1";

 $result = mysqli_query($connection,"SELECT * FROM penumpang");
  $row =mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hazard Reporting</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="gambar/cobalogo.png" alt="" width="200" >
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse float-right" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="new-home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="form-reporting.php">Form Reporting</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctreporting.php">Document Reporting</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>



    <div class="container mt-5"style="margin-top: 80px"> 
       <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT HAZARD
            </div>
            <div class="card-body">
              <form action="updatehazard.php" method="POST">
      <form>
        <div class="mb-3">
          <label for="idpenumpang" class="form-label">ID Penumpang</label>
          <input type="text" class="form-control" id="idpenumpang" name="idpenumpang">
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
          <label for="notelp" class="form-label">No. Telp</label>
          <input type="text" class="form-control" id="notelp" name="notelp">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="row"> 
            <div class="col-md-6">
              <label for="bandara" class="form-label">Bandara</label>

              <select class="form-select" id="nmbandara" name="nmbandara" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <?php foreach($bandara as $bnd): ?>
                <option value="<?= $bnd['idbandara'] ?>" data-kota="<?= $bnd['kota'] ?>"><?= $bnd['nmbandara'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label for="kota" class="form-label">Kota</label>
                <input type="text" class="form-control" id="kota" name="kota">
              </div>
            </div>
          </div>
         <div class="row"> 
            <div class="col-md-6">
              <label for="kategori" class="form-label">Kategori</label>

              <select class="form-select" id="nmkategori" name="nmkategori" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <?php foreach($kategori as $kat): ?>
                <option value="<?= $kat['idkategori'] ?>" data-keterangan="<?= $kat['keterangan'] ?>"><?= $kat['nmkategori'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan">
              </div>
            </div>
        </div>
        <form class="was-validated">
  <div class="mb-3">
    <label for="deskripsi" class="form-label">Deskripsi Hazard</label>
    <textarea class="form-control is-invalid" id="deskripsi" name="deskripsi" placeholder="Required example textarea" required ></textarea>
    <div class="invalid-feedback">
      Please enter a message in the desc hazard.
    </div>
  </div>
<div class="mb-3">
    <input type="file" class="form-control" aria-label="file example" name="gambar" required>
    <div class="invalid-feedback">Example invalid form file feedback</div>
  </div>
        <button type="submit" class="btn btn-success">UPDATE</button>
        <button type="reset" class="btn btn-warning">RESET</button>
      </form>
    </div>
</form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <script type="text/javascript">
          document.getElementById("nmbandara").addEventListener("change", function() {
            e = document.getElementById("nmbandara");
            var kota = e.options[e.selectedIndex].dataset.kota;
            document.getElementById("kota").value = kota;
          });
    </script>
    <script type="text/javascript">
          document.getElementById("nmkategori").addEventListener("change", function() {
            e = document.getElementById("nmkategori");
            var keterangan = e.options[e.selectedIndex].dataset.keterangan;
            document.getElementById("keterangan").value = keterangan;
          });

    </script>
  </body>
</html>
