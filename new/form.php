<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title> 
  <?php include "assets/css.php" ?>
</head>

<body>
  <?php include "assets/header.php" ?>
  <a class="kembali-btn" href="index.php" >Kembali</a>
  </div>
  </nav>
  <?php include 'assets/koneksi.php'; ?>
  <?php $type = $_GET['type'];

  if ($type === 'pengunjung') {
    if (isset($_POST['submit'])) {
      $nama           = $_POST['nama'];
      $nomor        = $_POST['nomor'];
      $jenis_kelamin  = $_POST['jenis_kelamin'];
      $tanggal         = $_POST['tanggal'];

      $result = mysqli_query($conn, "INSERT INTO pengunjung (nama, nomor, jenis_kelamin, tanggal) VALUES ('$nama', '$nomor', '$jenis_kelamin', '$tanggal')");

      header('Location:index.php');
    }
  } elseif ($type === 'narasumber') {
    if (isset($_POST['submit'])) {
      $nama           = $_POST['nama'];
      $nomor          = $_POST['nomor'];
      $jenis_kelamin  = $_POST['jenis_kelamin'];
      $acara          = $_POST['acara'];

      $result = mysqli_query($conn, "INSERT INTO narasumber (nama, nomor, jenis_kelamin, acara) VALUES ('$nama', '$nomor', '$jenis_kelamin', '$acara')");

      header('Location:index.php');
    }
  } elseif ($type === 'magang') {
    if (isset($_POST['submit'])) {
      $nama           = $_POST['nama'];
      $foto           = $_POST['foto'];
      $asal           = $_POST['asal'];
      $nomor          = $_POST['nomor'];

      $result = mysqli_query($conn, "INSERT INTO magang (nama, foto, asal, nomor) VALUES ('$nama', '$foto', '$asal', '$nomor')");

      header('Location:index.php');
    }
  }
  ?>

  <div class="container">
    <?php if ($type === 'pengunjung') { ?>
      <h1 class="mt-4">Tambah Data Mahasiswa</h1>

      <form action="" method="post">
        <div class="mb-3 row">
          <label for="nim" class="col-sm-2 col-form-label">NIM</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nim" name="nim">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" name="nama_lengkap">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="nama" class="col-sm-2 col-form-label">Tempat Lahir</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="nama" class="col-sm-2 col-form-label">Tanggal Lahir</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="tahun-bulan-hari">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
          <div class="col-sm-10">
            <select class="form-select" name="jurusan">
              <option selected>- pilih jurusan -</option>
              <option value="TI">Teknik Informatika</option>
              <option value="SI">Sistem Informasi</option>
            </select>
          </div>
        </div>

        <div class="mb-3 row">
          <label for="jurusan" class="col-sm-2 col-form-label">Jenis Kelamin</label>
          <div class="col-sm-10">
            <select class="form-select" name="jenis_kelamin">
              <option selected>- pilih -</option>
              <option value="L">Laki-Laki</option>
              <option value="P">Perempuan</option>
            </select>
          </div>
        </div>

        <div class="mb-3 row">
          <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="alamat" name="alamat">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="email" name="email">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="telepon" name="telepon">
          </div>
        </div>

        <div class="col-sm-10 offset-2">
          <input type="submit" value="Simpan" name="submit" class="btn btn-primary">
          <input type="reset" value="Reset" name="reset" class="btn btn-warning">
          <a href="show.php?file=pengunjung" class="btn btn-danger">Kembali</a>
        </div>
      </form>
    <?php } elseif ($type === 'narasumber') { ?>
      <h1 class="mt-4">Tambah Data Dosen</h1>

      <form action="" method="post">
        <div class="mb-3 row">
          <label for="nim" class="col-sm-2 col-form-label">NID</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nid" name="nid">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" name="nama_lengkap">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="jurusan" class="col-sm-2 col-form-label">Jenis Kelamin</label>
          <div class="col-sm-10">
            <select class="form-select" name="jenis_kelamin">
              <option selected>- pilih -</option>
              <option value="L">Laki-Laki</option>
              <option value="P">Perempuan</option>
            </select>
          </div>
        </div>

        <div class="mb-3 row">
          <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="alamat" name="alamat">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="email" name="email">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="telepon" name="telepon">
          </div>
        </div>

        <div class="col-sm-10 offset-2">
          <input type="submit" value="Simpan" name="submit" class="btn btn-primary">
          <input type="reset" value="Reset" name="reset" class="btn btn-warning">
          <a href="show.php?file=narasumber" class="btn btn-danger">Kembali</a>
        </div>
      </form>
    <?php } ?>
  </div>
  <?php include 'assets/js.php' ?>

  </body>

</html>