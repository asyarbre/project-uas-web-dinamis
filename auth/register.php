<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Daftar | Tokopedia</title>
  <link rel="stylesheet" href="../dist/style.css" />
  <link rel="icon" type="image/x-icon" href="../src/img/logo.png" />
</head>

<body>
  <div class="w-full flex flex-wrap h-screen">
    <div class="w-full md:w-1/2 flex flex-col mx-auto my-auto">
      <a href="index.html" class="text-3xl font-bold text-green-500 my-10 mx-auto hover:text-green-700">Tokopedia</a>

      <div class="flex flex-col justify-center mx-3 pt-10 border rounded-lg shadow-xl md:py-12 px-8 md:px-24 lg:px-32">
        <p class="text-center font-bold text-3xl">Daftar</p>
        <form class="flex flex-col pt-3 md:pt-8" action="save_register.php" method="POST">
          <div class="flex flex-col pt-4">
            <label class="text-lg">Username</label>
            <input type="text" name="username" id="username" placeholder="username" class="border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" required />
          </div>
          <div class="flex flex-col pt-4">
            <label class="text-lg">Email</label>
            <input type="email" name="email" id="email" placeholder="email@domain.com" class="border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" required />
          </div>
          <div class="flex flex-col pt-4">
            <label class="text-lg">Password</label>
            <input type="password" name="password" class="border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" placeholder="Password" required />
          </div>
          <button type="submit" name="submit" class="bg-green-500 rounded-lg text-white font-bold text-lg hover:bg-green-700 hover:shadow-lg p-2 mt-8">Sign Up</button>
        </form>
        <div class="text-center py-5">
          <p>
            Sudah punya akun?
            <a href="login.php" class="underline font-semibold text-green-500 hover:text-orange-500">Log In</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>