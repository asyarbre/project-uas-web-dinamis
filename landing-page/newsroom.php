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
  <?php include("../components/landing-nav.php"); ?>
  <div data-aos="fade-down" data-aos-duration="1000" class="py-20">
    <hr class="bg-primary h-1 w-10 mx-auto mt-20" />
    <h1 class="mt-3 text-4xl font-semibold text-gray-800 text-center md:text-5xl lg:w-full">
      Newsroom
    </h1>
    <p class="mt-3 text-gray-500 text-center lg:text-lg">
      Baca berita terbaru mengenai Tokopedia
    </p>
  </div>

  <div class="container mt-10 p-5 mx-auto max-w-lg sm:flex sm:flex-wrap sm:justify-between md:max-w-3xl lg:max-w-4xl xl:max-w-6xl 2xl:max-w-7xl" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
    <?php
    include("../koneksi.php");
    $result = mysqli_query($kon, "select * from newsroom");
    while ($data = mysqli_fetch_array($result)) {
    ?>
      <div class="card card-compact my-5 w-full bg-base-100 shadow-xl hover:scale-105 ease-in duration-300 sm:w-56 lg:w-64 xl:w-80 2xl:w-96">
        <figure>
          <img src="../src/img/<?= $data['gambar']; ?>" alt="news-1" />
        </figure>
        <div class="card-body">
          <h2 class="card-title text-base hover:text-primary xl:text-xl">
            <?= $data['title']; ?>
          </h2>
          <p><?= date('d F Y', strtotime($data['tanggal'])); ?></p>
          <div class="card-actions">
            <a href="../landing-page/viewnews.php?id=<?php echo htmlspecialchars($data['id']); ?>" class="text-primary font-bold hover:scale-105 hover:text-green-600 xl:text-lg" target="_blank">Selengkapnya
            </a>
            <img src="../src/img/arrow.svg" alt="arrow" class="w-5 my-auto" />
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>

  <div class="flex justify-center">
    <a href="all_news.php" class="px-5 py-3 mx-auto text-center text-sm bg-primary text-white font-bold rounded-lg hover:shadow-lg hover:scale-105 lg:w-1/3 lg:mx-auto ease-out duration-300" target="_blank">Klik di sini untuk melihat seluruh Siaran Pers</a>
  </div>
  <?php include("../components/footer.php"); ?>

  <script src="../script.js"></script>
  <script src="../vendor/aos/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>