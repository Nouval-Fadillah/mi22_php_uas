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
                        
        $nama = $_POST['name'];
          
        $sql = "INSERT INTO kategori (kategori) VALUES ('$nama')";
        $query = mysqli_query($koneksi, $sql);
          
        if ($query) {
            header('location: kategori.php');
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
    <title>kategori</title>
</head>
<body>
    <?php
    include 'menu.php';
    ?>
    <main class="w-[calc(100%-256px)] ml-64">
        <div class="py-2 px-6 bg-white flex items-center">
            <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
                
            <div class="mx-auto max-w-lg">
                <h1 class="text-center text-2xl font-bold text-red-600 sm:text-3xl">Tambahkan Kategori</h1>

                

                <form action="" method="post" class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8 bg-red-50">
                <p class="text-center text-lg font-medium">Masukan Kategori</p>

                <div>
                    <label for="text" class="sr-only">Kategori</label>

                    <div class="relative">
                    <input
                        type="text"
                        name="name"
                        class="w-full rounded-lg border-gray-200 p-4  text-sm shadow-sm"
                        placeholder="Masukan kategori disini"
                    />
                    </div>
                </div>

                <button
                    type="submit"
                    name="submit"
                    class="block w-full rounded-lg bg-red-600 px-5 py-3 text-sm font-medium text-white"
                >
                    Tambahkan
                </button>

                <p class="text-center text-sm text-gray-500">
                    Gajadi ?
                    <a class="underline" href="kategori.php">Kembali</a>
                </p>
                </form>
                
            </div>
            </div>
        </div>
    </main>
</body>
</html>