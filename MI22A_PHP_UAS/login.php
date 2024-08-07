<?php
 /**
     * NIM    : 2257401082
     * NAMA   : NOUVAL FADILLAH
     * KELAS  : MI22A
     */ 
?>

<?php

session_start();

include 'koneksi.php';

    if(isset($_POST["login"])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT username, password FROM user WHERE username = '$username' AND password = sha1('$password');";
        $result = mysqli_query($koneksi, $sql);

        $user = mysqli_fetch_assoc($result);
        if ($user) {
            $_SESSION['user'] = $username;
            header('location: dasboard.php');
        } else {
            $_SESSION['error'] = "Username / Password tidak sesuai";
            
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>
<body class="bg-gray-900 flex">
    
  <div class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center">
    <div class="container max-w-sm rounded-lg p-9 bg-gradient-to-t from-white to-red-500 text-center m-auto p-10 ">
        <h1
            class="text-white text-10xl font-extrabold text-transparent sm:text-5xl"
        >
            Login
            <span class="sm:block"> ^ </span>
        </h1>
        

        </p>
        <div>
    <form action="" method="post" class="mb-0 mt-6 space-y-4 rounded-lg p-4 bg-white shadow-lg sm:p-6 lg:p-8">
    <p id="error">
              <?php
              if (isset($_SESSION['error'])) {
                echo "<span style='color:red'>".$_SESSION['error']."</label>";
                unset($_SESSION['error']);
              }
              ?>  
      <div>
        <label for="username" class="sr-only">Username</label>

        <div class="relative">
          <input
            type="name"
            name="username"
            class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
            placeholder="Enter Username"
          />

          <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="size-4 text-gray-400"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
              />
            </svg>
          </span>
        </div>
      </div>

      <div>
        <label for="password" class="sr-only">Password</label>

        <div class="relative">
          <input
            type="password"
            name="password"
            class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
            placeholder="Enter password"
          />

          <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="size-4 text-gray-400"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
              />
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
              />
            </svg>
          </span>
        </div>
      </div>

      <button
        type="submit"
        name="login"
        class="block w-full rounded-lg bg-red-600 px-5 py-3 text-sm font-medium text-white"
      >
        Login
      </button>

      <p class="text-center text-sm text-gray-500">
        No account?
        <a class="underline" href="#">Sign up</a>
      </p>
    </form>

    <p id="error">

    </p>
        </div>
    </div>
  </div>

</body>
</html>