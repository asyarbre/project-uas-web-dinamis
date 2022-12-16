<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tokopedia</title>
  <link rel="stylesheet" href="../dist/style.css" />
  <link rel="icon" type="image/x-icon" href="../../src/img/logo.png" />
  <link href="../vendor/aos/aos.css" rel="stylesheet" />
</head>

<body>
  <?php include("../components/landing-nav.php"); ?>

  <section class="bg-gray-50 py-20">
    <hr class="bg-primary h-0.5 w-10 mx-auto" />
    <h2 class="mt-3 text-2xl font-semibold text-gray-800 text-center md:text-4xl lg:text-4xl lg:w-full">
      Kontak Kami
    </h2>

    <div class="container mt-10 px-5 mx-auto max-w-lg md:max-w-2xl md:flex md:flex-wrap md:justify-around lg:max-w-4xl">
      <?php include('../koneksi.php');
      $result = mysqli_query($kon, "select * from kontak");
      while ($data = mysqli_fetch_array($result)) {
      ?>
        <a href="<?php echo $data['link']; ?>" class="w-full md:w-72 lg:w-96 my-5 px-5 py-10 rounded-lg border border-gray-300 hover:-translate-y-3 hover:shadow-xl hover:border-primary hover:scale-125" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000" target="_blank">
          <h4 class="font-bold text-gray-700 text-xl md:text-2xl">
            <?php echo $data['title']; ?>
          </h4>
          <p class="text-gray-500 my-2 md:text-lg">
            <?php echo $data['desk']; ?>
            <span class="text-primary font-medium"><?php echo $data['contact_to']; ?></span>
          </p>
        </a>
      <?php
      }
      ?>
    </div>

  </section>
  <section class="bg-gray-100 py-20">
    <hr class="bg-primary h-0.5 w-10 mx-auto" />
    <h2 class="mt-3 text-2xl font-semibold text-gray-800 text-center md:text-4xl lg:text-4xl lg:w-full">
      Kantor Kami
    </h2>
    <div class="container mt-10 w-full px-10 md:flex sm:mx-auto xl:max-w-6xl sm:gap-6">
      <?php include('../koneksi.php');
      $result = mysqli_query($kon, "select * from lokasi");
      while ($data = mysqli_fetch_array($result)) {
      ?>
        <div class="my-5 md:w-1/2 border rounded-lg bg-white hover:-translate-y-3 hover:shadow-xl hover:border-primary" data-aos="zoom-in-up" data-aos-duration="1000">
          <a href="https://goo.gl/maps/6riwr9QPwARMEPe2A" target="_blank">
            <img src="../src/img/<?= $data['preview_map']?>" alt="lokasi" width="w-full" />
            <div class="flex px-4 mt-5">
              <img src="../src/img/maps.svg" alt="maps-icon" class="rounded-xl" />
              <p class="my-auto ml-3 font-semibold text-gray-700 text-lg">
                <?= $data['nama'];?>
              </p>
            </div>
            <p class="mx-3 my-3 px-5 text-sm leading-loose">
              <?= $data['alamat'];?>
            </p>
          </a>
        </div>
      <?php
      }
      ?>
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