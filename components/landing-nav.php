<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<header>
  <nav class="relative px-4 py-4 flex justify-between items-center bg-white mx-auto max-w-screen-2xl">
    <a class="text-3xl font-bold leading-none flex" href="home.php">
      <img src="../src/img/logo.png" class="mr-3 h-6 md:h-9" alt="Logo" />
      <span class="self-center text-xl font-semibold whitespace-nowrap text-primary">Tokopedia</span>
    </a>
    <div class="lg:hidden">
      <button class="navbar-burger flex items-center text-gray-700 p-3">
        <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
        </svg>
      </button>
    </div>
    <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:items-center lg:w-auto lg:space-x-6">
      <li class="mb-1">
        <a class="block p-4 font-semibold <?= ($activePage == 'home') ? 'text-primary':'text-gray-700'; ?> text-primary rounded" href="home.php">Beranda</a>
      </li>
      <li class="mb-1">
        <a class="block p-4 font-semibold <?= ($activePage == 'about') ? 'text-primary':'text-gray-700'; ?> hover:text-primary rounded" href="about.php">Tentang Kami</a>
      </li>
      <li class="mb-1">
        <a class="block p-4 font-semibold <?= ($activePage == 'bisnis') ? 'text-primary':'text-gray-700'; ?> hover:text-primary rounded" href="bisnis.php">Bisnis Kami</a>
      </li>
      <li class="mb-1">
        <a class="block p-4 font-semibold <?= ($activePage == 'newsroom') ? 'text-primary':'text-gray-700'; ?> hover:text-primary rounded" href="newsroom.php">Newsroom</a>
      </li>
      <li class="mb-1">
        <a class="block p-4 font-semibold <?= ($activePage == 'gabung') ? 'text-primary':'text-gray-700'; ?> hover:text-primary rounded" href="gabung.php">Gabung</a>
      </li>
      <li class="mb-1">
        <a class="block p-4 font-semibold <?= ($activePage == 'kontak') ? 'text-primary':'text-gray-700'; ?> hover:text-primary rounded" href="kontak.php">Kontak</a>
      </li>
    </ul>
    <a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 text-gray-800 border border-primary hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 text-sm font-bold rounded-xl" href="../auth/login.php">Masuk</a>
    <a class="hidden lg:inline-block py-2 px-6 bg-primary hover:bg-green-600 text-sm text-white font-bold rounded-xl transition duration-200" href="../auth/register.php">Daftar</a>
  </nav>
  <div class="navbar-menu relative z-50 hidden">
    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
      <div class="flex items-center mb-8">
        <a class="mr-auto text-3xl font-bold leading-none flex" href="home.php">
          <img src="../src/img/logo.png" class="mr-3 h-6 md:h-9" alt="Logo" />
          <span class="self-center text-xl font-semibold whitespace-nowrap text-primary">Tokopedia</span>
        </a>
        <button class="navbar-close">
          <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      <div>
        <ul>
          <li class="mb-1">
            <a class="block p-4 text-sm font-semibold <?= ($activePage == 'home') ? 'text-primary':'text-gray-700'; ?> rounded" href="home.php">Beranda</a>
          </li>
          <li class="mb-1">
            <a class="block p-4 text-sm font-semibold <?= ($activePage == 'about') ? 'text-primary':'text-gray-700'; ?> hover:text-primary rounded" href="about.php">Tentang Kami</a>
          </li>
          <li class="mb-1">
            <a class="block p-4 text-sm font-semibold <?= ($activePage == 'bisnis') ? 'text-primary':'text-gray-700'; ?> hover:text-primary rounded" href="bisnis.php">Bisnis Kami</a>
          </li>
          <li class="mb-1">
            <a class="block p-4 text-sm font-semibold <?= ($activePage == 'newsroom') ? 'text-primary':'text-gray-700'; ?> hover:text-primary rounded" href="newsroom.php">Newsroom</a>
          </li>
          <li class="mb-1">
            <a class="block p-4 text-sm font-semibold <?= ($activePage == 'gabung') ? 'text-primary':'text-gray-700'; ?> hover:text-primary rounded" href="gabung.php">Gabung</a>
          </li>
          <li class="mb-1">
            <a class="block p-4 text-sm font-semibold <?= ($activePage == 'kontak') ? 'text-primary':'text-gray-700'; ?> hover:text-primary rounded" href="kontak.php">Kontak</a>
          </li>
        </ul>
      </div>
      <div class="mt-auto">
        <div class="pt-6">
          <a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold text-gray-800 border border-primary hover:bg-gray-50 focus:ring-4 focus:ring-gray-300rounded-xl" href="../auth/login.php">Login</a>

          <a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-primary hover:bg-green-500 rounded-xl" href="register.php">Daftar</a>
        </div>
      </div>
    </nav>
  </div>
</header>