<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PILIH</title>
  <?php include "assets/css.php" ?>

</head>

<body>
  <section class="container">
    <!-- section header -->
    <?php include "assets/header.php";
    include "assets/Login.php"?>
    <!-- end header -->

    <!-- section menu -->
    <main class="pilih-main d-flex align-items-center justify-content-center">
      <a href="form.php?type=pengunjung" class="pilih-option">Pengunjung</a>
      <a href="form.php?type=narasumber" class="pilih-option">Narasumber</a>
      <a href="form.php?type=magang" class="pilih-option">Magang</a>
    </main>
    <!-- end menu -->

    <!-- section footer -->
    <?php include "assets/footer.php"?>
    <!-- end footer -->
  </section>

  <?php include "assets/js.php"?>
</body>

</html>