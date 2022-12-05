<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tokopedia</title>
  <link rel="stylesheet" href="../dist/style.css" />
  <link rel="icon" type="image/x-icon" href="../src/img/logo.png" />
  <link href="../vendor/aos/aos.css" rel="stylesheet" />
</head>

<body>
  <?php include("../components/landing-nav.php");?>
  <section class="bg-gray-50 py-20">
    <div class="container mx-auto w-full px-6 text-center sm:max-w-6xl">
      <h3 class="text-xl font-semibold text-gray-800 md:text-3xl">
        Tokopedia adalah perusahaan teknologi Indonesia dengan misi mencapai
      </h3>
      <h4 class="text-xl font-semibold text-primary md:text-3xl">
        pemerataan ekonomi secara digital.
      </h4>
      <div class="md:flex md:flex-wrap justify-evenly">
        <?php
        include '../koneksi.php';
        $result = mysqli_query($kon, "select * from home_sec_one");
        while ($data = mysqli_fetch_array($result)) {
        ?>

          <div class="mt-8 md:w-1/4">
            <p class="text-primary text-4xl font-bold md:text-4xl lg:text-5xl">
              <?php echo $data['title']; ?>
            </p>
            <p class="text-gray-600 text-xs md:text-sm lg:text-base mt-2">
              <?php echo $data['desk']; ?>
            </p>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section>
  <section class="bg-gray-50 py-20">
    <hr class="bg-primary h-0.5 w-10 mx-auto" />
    <h2 class="mt-3 text-2xl font-semibold text-gray-800 text-center lg:text-4xl lg:w-full">
      Dampak Tokopedia Terhadap Perekonomian Indonesia
    </h2>
    <div class="container py-14 px-5 mx-auto max-w-lg sm:px-6 sm:max-w-2xl lg:flex lg:flex-wrap lg:max-w-7xl">
      <?php
      include '../koneksi.php';
      $result = mysqli_query($kon, "select * from home_sec_two");
      while ($data = mysqli_fetch_array($result)) {
      ?>
        <div class="w-full p-5 rounded-lg border shadow-md my-5 sm:flex lg:block lg:w-[600px] lg:mx-auto" data-aos="flip-up">
          <img src="../src/img/<?php echo $data['gambar']?>" alt="icon-1" class="w-24 sm:w-32" />
          <div class="ml-3">
            <h2 class="text-2xl text-primary font-semibold mt-3 sm:text-3xl">
              <?php echo $data['title']; ?>
            </h2>
            <p class="text-gray-600 text-base mt-3 sm:text-base">
              <?php echo $data['desk']; ?>
            </p>
          </div>
        </div>
      <?php
      }
      ?>

      <a href="#" class="inline-block mt-14 px-5 py-3 w-full text-center bg-primary text-white font-bold rounded-lg hover:shadow-lg hover:scale-105 lg:w-1/3 lg:mx-auto ease-out duration-300" data-aos="zoom-in-up">Lihat Selengkapnya</a>
    </div>
  </section>
  <section class="bg-gray-50 py-20">
    <div class="container mx-auto max-w-xl md:max-w-2xl lg:max-w-full xl:max-w-7xl px-6 lg:p-0 md:flex">
      <img data-aos="fade-right" src="../src/img/kisah.jpg" alt="kisah" class="rounded-lg shadow-lg md:w-1/2 md:h-1/2 md:mr-5 xl:mx-5" />
      <div class="mt-5 lg:mx-10" data-aos="fade-left">
        <hr class="bg-primary h-0.5 w-16" />
        <h4 class="text-gray-500 uppercase mt-3 lg: tracking-wider">
          Kisah Kami
        </h4>
        <h2 class="mt-3 text-2xl md:text-3xl lg:text-4xl font-semibold text-gray-800">
          Perjalanan Tokopedia bersama para penjual
        </h2>
        <p class="mt-3 text-gray-500 md:text-lg">
          Dalam satu dekade terakhir, kami menemukan berbagai tantangan di
          sepanjang perjalanan. Untungnya, kami membina hubungan baik dengan
          para penjual dan komunitas di seluruh Indonesia, serta memperkuat
          ikatan dengan Nakama (karyawan Tokopedia), yang kami anggap sebagai
          keluarga.
        </p>
        <hr class="mt-3 bg-slate-300 h-0.5 w-full" />
        <h2 class="mt-3 font-semibold text-lg">
          Berkenalan dengan keluarga besar Tokopedia
        </h2>
        <div class="lg:flex lg:gap-2">
          <a href="#" class="inline-block mt-3 px-5 py-3 w-full lg:1/2 text-center text-sm bg-primary text-white font-bold rounded-lg hover:shadow-lg hover:scale-105 ease-out duration-300">Komunitas Penjual</a>
          <a href="#" class="inline-block mt-3 px-5 py-3 w-full lg:1/2 text-center text-sm border border-primary text-primary font-bold rounded-lg hover:shadow-lg hover:scale-105 ease-out duration-300">Keluarga Nakama</a>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray-50 py-20">
    <div class="container mx-auto max-w-xl px-6 md:flex md:max-w-2xl lg:max-w-4xl lg:px-0 xl:max-w-6xl">
      <div class="mt-5 lg:self-center" data-aos="fade-right">
        <hr class="bg-primary h-1 w-16" />
        <h2 class="mt-5 text-2xl md:text-3xl lg:text-4xl font-bold text-gray-800">
          Perjalanan Baru Dalam Mendorong Perubahan Bersama GoTo
        </h2>
        <p class="text-sm text-gray-500 my-5 md:text-base lg:text-lg">
          Semangat gotong royong membawa Tokopedia dan Gojek, dua perusahaan
          anak bangsa, untuk bersatu dalam menciptakan ekosistem menyeluruh.
        </p>
      </div>
      <img data-aos="fade-left" src="../src/img/goto.png" alt="img-goto" class="rounded-xl shadow-lg md:w-1/2 md:h-1/2 md:ml-8 xl:max-w-lg" />
    </div>
  </section>
  <?php include("../components/footer.php");?>

  <script src="../script.js"></script>
  <script src="../vendor/aos/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>