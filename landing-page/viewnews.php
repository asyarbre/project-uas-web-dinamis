<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>News</title>
  <link rel="stylesheet" href="../dist/style.css" />
  <link rel="icon" type="image/x-icon" href="../src/img/logo.png" />
</head>

<body>
  <div class="navbar bg-base-100">
    <div class="navbar-start">
      <div class="dropdown">
        <label tabindex="0" class="btn btn-ghost btn-circle">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
          </svg>
        </label>
        <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52"></ul>
      </div>
    </div>
    <div class="navbar-center">
      <a class="btn btn-ghost normal-case text-xl">Newsroom</a>
    </div>
    <div class="navbar-end">
      <button class="btn btn-ghost btn-circle">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
      </button>
      <button class="btn btn-ghost btn-circle">
        <div class="indicator">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
          </svg>
          <span class="badge badge-xs badge-primary indicator-item"></span>
        </div>
      </button>
    </div>
  </div>
  <?php
  include "../koneksi.php";
  function input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  //Cek apakah ada nilai yang dikirim menggunakan methos GET dengan nama id
  if (isset($_GET['id'])) {
    $id = input($_GET["id"]);

    $sql = "select * from newsroom where id=$id";
    $hasil = mysqli_query($kon, $sql);
    $data = mysqli_fetch_assoc($hasil);
  }
  ?>
  <section class="bg-gray-50 py-20">
    <div class="container mx-auto w-full px-6 sm:max-w-6xl">
      <h1 class="text-gray-800 font-bold mx-auto lg:text-3xl mb-5"><?php echo $data['title']; ?></h1>
      <p class="text-gray-500 md:text-lg mb-5"><?php echo $data['tanggal']; ?></p>
      <img src="../src/img/<?php echo $data['gambar']; ?>" alt="" class="rounded-xl shadow-lg md:max-w-3xl" />
      <div class="mt-8 text-gray-500 indent-20 md:text-lg">
        <p>
          <?php echo nl2br($data['isi']); ?>
        </p>
      </div>
    </div>
  </section>
</body>

</html>