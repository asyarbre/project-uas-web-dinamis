<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About | Tokopedia</title>
  <link rel="stylesheet" href="../dist/style.css" />
  <link rel="icon" type="image/x-icon" href="../src/img/logo.png" />
  <link rel="stylesheet" href="../vendor/aos/aos.css" />
</head>

<body>
  <?php include("../components/landing-nav.php"); ?>
  <?php include("../koneksi.php");
  $result = mysqli_query($kon, "select * from about");
  while ($data = mysqli_fetch_array($result)) {
  ?>
    <section class="bg-gray-50 py-20">
      <div class="container mx-auto max-w-xl px-6 md:flex md:gap-10 md:max-w-2xl lg:max-w-4xl lg:px-0 xl:max-w-6xl" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="500">
        <img src="../src/img/<?= $data['gambar']; ?>" alt="about" class="rounded-xl shadow-lg md:w-1/2 md:h-1/2 <?= $data['posisi_gambar'];?> xl:max-w-lg" />
        <div class="mt-5">
          <hr class="bg-primary h-1 w-16" />
          <h2 class="mt-5 text-2xl md:text-3xl lg:text-4xl font-bold text-gray-800">
            <?= $data['title']; ?>
          </h2>
          <p class="text-sm text-gray-500 my-5 md:text-base lg:text-lg">
            <?= $data['desk']; ?>
          </p>

        </div>
      </div>
    </section>
  <?php
  }
  ?>
  
  <?php include("../components/footer.php"); ?>

  <script src="../script.js"></script>
  <script src="../vendor/aos/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>