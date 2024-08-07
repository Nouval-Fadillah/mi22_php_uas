<?php
 /**
     * NIM    : 2257401082
     * NAMA   : NOUVAL FADILLAH
     * KELAS  : MI22A
     */ 
?>

<?php
include 'session_login.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body >
   <?php
    include 'menu.php';
    include 'koneksi.php';

    $data_user = mysqli_query($koneksi,"SELECT * FROM user");
    $data_produk = mysqli_query($koneksi,"SELECT * FROM produk");
    $data_kategori = mysqli_query($koneksi,"SELECT * FROM kategori");

    // menghitung data barang
    $jumlah_user = mysqli_num_rows($data_user);
    $jumlah_produk = mysqli_num_rows($data_produk);
    $jumlah_kategori = mysqli_num_rows($data_kategori);

    ?>
    <main class="w-[calc(100%-256px)] ml-64">
        <div class="py-2 px-6 bg-white flex items-center">
            <section class="bg-white">
                <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 md:py-16 lg:px-8">
                  <div class="mx-auto max-w-3xl text-center">
                  
                    <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Selamat datang <?php echo $_SESSION['user'];?> </h2>
                  </div>
              
                  <div class="mt-8 sm:mt-12">
                    <dl class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                      <div class="flex flex-col rounded-lg bg-red-400 px-4 py-8 text-center">
                        <dt class="order-last text-lg font-medium text-white">Produk</dt>
              
                        <dd class="text-4xl font-extrabold text-yellow-100 md:text-5xl"><?php echo $jumlah_produk; ?></dd>
                      </div>
              
                      <div class="flex flex-col rounded-lg bg-red-50 px-4 py-8 text-center">
                        <dt class="order-last text-lg font-medium text-gray-500">Kategori</dt>
              
                        <dd class="text-4xl font-extrabold text-red-600 md:text-5xl"><?php echo $jumlah_kategori; ?></dd>
                      </div>
              
                      <div class="flex flex-col rounded-lg bg-yellow-50 px-4 py-8 text-center">
                        <dt class="order-last text-lg font-medium text-gray-500">User</dt>
              
                        <dd class="text-4xl font-extrabold text-yellow-600 md:text-5xl"><?php echo $jumlah_user; ?></dd>
                      </div>
                    </dl>
                  </div>
                </div>
              </section>
        </div>
    </main>
</body>
</html>