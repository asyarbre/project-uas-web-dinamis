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
    <div class="container px-5 mx-auto max-w-lg md:max-w-2xl lg:max-w-3xl" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-sine">
      <h1 class="text-gray-800 font-bold text-center text-3xl md:text-4xl lg:text-5xl">
        Find Your Dream Job in Tokopedia!
      </h1>
      <p class="text-gray-500 font-medium text-center mt-3 lg:text-lg">
        We found our purposes through the impact we make on others. You, too,
        can find yours.
      </p>
      <div class="border-2 rounded-full flex items-center p-3 mt-5">
        <input type="text" placeholder="All Location" class="w-full max-w-xs ml-10 focus:outline-none bg-transparent focus:text-gray-900" />
        <img src="../src/img/location.svg" class="absolute ml-2 w-4" alt="Location Icon" />
      </div>
      <div class="border-2 rounded-full flex items-center p-3 mt-5">
        <input type="text" placeholder="Type Your Dream Job" class="w-full max-w-xs ml-10 focus:outline-none bg-transparent focus:text-gray-900" />
        <img src="../src/img/search.svg" class="absolute ml-2 w-4" alt="Search Icon" />
      </div>
      <button class="btn btn-sm border-none w-full rounded-full mt-3 bg-gradient-to-r from-[#db4f21] via-[#ff5b24] to-[#ff8d45]">
        Search
      </button>
      <div class="divider">OR</div>
      <button class="btn btn-sm border-none w-full rounded-full bg-gradient-to-r from-[#199421] via-[#14a01d] to-[#6dcf73]">
        View All Job
      </button>
    </div>
  </section>
  <section class="bg-gray-50 py-20">
    <div class="container mx-auto max-w-lg md:max-w-2xl lg:max-w-4xl xl:max-w-7xl ">
      <?php include("../koneksi.php");
      $result = mysqli_query($kon, "select * from gabung");
      while ($data = mysqli_fetch_array($result)) {
      ?>
        <div class="md:flex md:flex-row <?php echo $data['posisi_gambar'] ?> md:justify-center" data-aos="zoom-in-down" data-aos-duration="1000" data-aos-easing="linear">
          <div class="my-auto md:basis-1/3">
            <img src="../src/img/<?php echo $data['gambar'] ?>" alt="gabung-1" class="rounded-lg bg-transparent" />
          </div>
          <div class="text-center px-3 my-auto md:basis-1/2">
            <h1 class="text-gray-800 font-bold text-xl my-5">
              <?php echo $data['title'] ?>
            </h1>
            <p class="text-gray-500">
              <?php echo $data['desk'] ?>.
            </p>
          </div>
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