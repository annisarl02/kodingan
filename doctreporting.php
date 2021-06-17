<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document Reporting</title>
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

<div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA HAZARD
            </div>
            <div class="card-body">
              <a href="form-reporting.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">ID Penumpang</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">NO.TELP</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">BANDARA</th>
                    <th scope="col">KATEGORI</th>
                    <th scope="col">DESKRIPSI HAZARD</th>
                    <th scope="col">GAMBAR</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('db.php');
                      $no = 1;
                      global $connection;
                        $result = mysqli_query($connection,"SELECT * FROM penumpang");
                        $rows = [];
                        while($row = mysqli_fetch_array($result)) {
                        $rows[] = $row;
                        }
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['idpenumpang'] ?></td>
                      <td><?php echo $row['nama'] ?></td>
                      <td><?php echo $row['notelp'] ?></td>
                      <td><?php echo $row['email'] ?></td>
                      <td><?php echo $row['nmbandara'] ?></td>
                      <td><?php echo $row['nmkategori'] ?></td>
                      <td><?php echo $row['deskripsi'] ?></td>
                      <td><?php echo $row['gambar'] ?></td>
                      <td class="text-center">
                        <a href="edithazard.php?id=<?php echo $row['idpenumpang'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapushazard.php?id=<?php echo $row['idpenumpang'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>