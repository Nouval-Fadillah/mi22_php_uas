<?php
 /**
     * NIM    : 2257401082
     * NAMA   : NOUVAL FADILLAH
     * KELAS  : MI22A
     */ 
?>

<?php

include 'session_login.php';   
if (isset($_POST['submit'])) {
include 'koneksi.php';
              

  $kode = $_POST['kode'];
  $nama = $_POST['name'];
  $kategori = $_POST['kategori'];
  $deskripsi = $_POST['deskripsi'];

  $sql = "INSERT INTO produk (kode_produk, nama_produk, kategori, deskripsi) VALUES ('$kode', '$nama', '$kategori', '$deskripsi')";
  $result = mysqli_query($koneksi, $sql);

  if ($result) {
    header('location:produk.php');
  }else{
    echo "gagal nambah";
  }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tambah Barang</title>
</head>
<body>
<?php
    include 'menu.php';
    include 'koneksi.php';
            
    $sql = "SELECT kode_kategori,kategori FROM kategori";
    $query = mysqli_query($koneksi, $sql);

    
    ?>
<main class="w-[calc(100%-256px)] ml-64">
<div class="py-2 px-6 bg-white flex items-center">

<section class="bg-white">
  <div class="mx-auto max-w-screen-xl px-4 py-1 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-5">
      <div class="lg:col-span-2 lg:py-1">
      <h2 class="text-2xl font-bold text-red-500"> Tambahkan produk </h2>
      </div>

      <div class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12">
        <form action="" method="post" class="space-y-4">
          <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <label for="HeadlineAct" class="block text-sm font-medium text-gray-900"> Kode Produk </label>
            <label class="sr-only" for="kode">kode produk</label>
            <input
              class="w-full rounded-lg border-gray-400 p-3 text-sm"
              placeholder="kode produk"
              type="text"
              name="kode"
            />
          </div>

          <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
          <label for="HeadlineAct" class="block text-sm font-medium text-gray-900"> Nama</label>
            <div>
              <label class="sr-only" for="name">Nama Produk</label>
              <input
                class="w-full rounded-lg border-gray-400 p-3 text-sm"
                placeholder="Nama Produk"
                type="text"
                name="name"
              />
            </div>
          </div>

          
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <label for="kategori" class="block text-sm font-medium text-gray-900"> Kategori </label>
            
            <select
                name="kategori"
                type="text"
                id="kategori"
                class="px-2 mt-1.5 w-full rounded-lg border-gray-300 text-gray-700 sm:text-sm"
            >
                <option value="">pilih</option>
                <?php while($row = mysqli_fetch_assoc($query)) : ?>
                <option value="<?php echo $row['kategori'];?>"><?php echo $row['kategori'];?></option>
                <?php endwhile;?>
            </select>
            
            </div>
         

          <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
          <label for="kategori" class="block text-sm font-medium text-gray-900"> Deskripsi </label>
            <label class="sr-only" for="message">Teks</label>

            <textarea
              class="w-full rounded-lg border-gray-200 p-3 text-sm"
              placeholder="deskripsi"
              rows="8"
              id="deskripsi"
              name="deskripsi"
            ></textarea>
          </div>

          <div class="mt-4">
            <button
              type="submit"
              name="submit"
              class="inline-block w-full rounded-lg bg-black px-5 py-3 font-medium text-white sm:w-auto"
            >
              Simpan Produk
            </button>

            <p class="py-5 text-sm text-gray-500">
                    Gajadi ?
                    <a class="underline" href="produk.php">Kembali</a>
                </p>
          </div>
        </form>

        
      </div>
    </div>
  </div>
</section>
</div>
</main>
</body>
</html>
<?php

            

        ?>