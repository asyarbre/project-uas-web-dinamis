<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tokopedia</title>
  <link rel="stylesheet" href="../dist/style.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" type="image/x-icon" href="../src/img/logo.png" />
  <link href="../vendor/aos/aos.css" rel="stylesheet" />
</head>

<body>
  <?php include("../components/landing-nav.php"); ?>
  <?php
  include("../koneksi.php");
  $result = mysqli_query($kon, "select * from bisnis");
  while ($data = mysqli_fetch_array($result)) {
  ?>
    <section class="bg-gray-50 py-20">
      <div class="container mx-auto max-w-xl px-6 md:flex md:max-w-2xl md:gap-10 lg:max-w-4xl lg:px-0 xl:max-w-6xl" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="500">
        <img src="../src/img/<?php echo $data['gambar'] ?>" alt="bisnis-1" class="rounded-xl shadow-lg md:w-1/2 md:h-1/2 <?php echo $data['posisi_gambar'] ?> xl:max-w-lg" />
        <div class="mt-5 lg:self-center">
          <hr class="bg-primary h-1 w-16" />
          <h2 class="mt-5 text-2xl md:text-3xl lg:text-4xl font-bold text-gray-800">
            <?php echo $data['title'] ?>
          </h2>
          <p class="text-sm text-gray-500 my-5 md:text-base lg:text-lg">
            <?php echo $data['desk'] ?>
          </p>
        </div>
      </div>
    </section>
  <?php
  }
  ?>
  <section class="py-20 mx-5">
    <div class="container mx-auto p-5 rounded-lg border border-gray-300 shadow-lg max-w-lg md:max-w-2xl lg:max-w-4xl lg:flex lg:justify-center lg:p-10 xl:max-w-6xl" data-aos="fade-right" data-aos-duration="1000">
      <div class="lg:w-64 lg:mr-5">
        <hr class="bg-primary h-1 w-10 mx-auto my-5 lg:m-0" />
        <h1 class="text-gray-800 font-semibold text-center my-5 text-xl md:text-2xl lg:text-3xl lg:text-left lg:leading-10 lg:font-bold xl:leading-snug">
          Di Marketplace Kami, Perekonomian Indonesia Bergerak di Level Tinggi
        </h1>
      </div>
      <div class="lg:flex lg:flex-wrap lg:ml-20 lg:my-auto">
        <div class="lg:flex">
          <h2 class="text-primary text-center font-bold my-2 text-5xl lg:text-left lg:text-6xl xl:text-7xl">
            >2%
          </h2>
          <p class="text-gray-500 text-center my-3 md:text-lg lg:text-left lg:ml-3 lg:text-xl xl:text-2xl">
            dari total Perekonomian Indonesia terjadi di Marketplace Tokopedia
          </p>
        </div>
        <div class="lg:flex lg:gap-10">
          <div class="mx-auto p-5 my-5 border border-gray-300 rounded-lg lg:px-9 xl:px-20">
            <p class="text-primary font-bold text-3xl md:text-4xl ">
              >12 Juta
            </p>
            <p class="text-gray-500 md:text-lg lg:text-xl xl:text-2xl">Penjual</p>
          </div>
          <div class="mx-auto p-5 my-5 border border-gray-300 rounded-lg lg:px-9 xl:px-20">
            <p class="text-primary font-bold text-3xl md:text-4xl ">
              >865 Juta
            </p>
            <p class="text-gray-500 md:text-lg lg:text-xl xl:text-2xl">Produk</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include("../components/footer.php"); ?>

  <script src="../script.js"></script>
  <script src="../vendor/aos/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>