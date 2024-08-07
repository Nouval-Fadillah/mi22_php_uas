<?php
 /**
     * NIM    : 2257401082
     * NAMA   : NOUVAL FADILLAH
     * KELAS  : MI22A
     */ 
?>

<?php
include 'session_login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <?php
    include 'menu.php';
    ?>
    <main class="w-[calc(100%-256px)] ml-64">
    <div class="py-2 px-6 bg-white flex">
    <a
            class="group flex items-center justify-between gap-4 rounded-lg border border-red-600 bg-red-600 px-5 py-3 transition-colors hover:bg-transparent focus:outline-none focus:ring"
            href="tambah_produk.php"
            >
            <span
                class="font-medium text-white transition-colors group-hover:text-red-600 group-active:text-red-500"
            >
                Tambah Produk
            </span>

            <span
                class="shrink-0 rounded-full border border-current bg-white p-2 text-red-600 group-active:text-red-500"
            >
                <svg
                class="size-5 rtl:rotate-180"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M17 8l4 4m0 0l-4 4m4-4H3"
                />
                </svg>
            </span>
            </a>
    </div>
        
        <div class="py-2 px-6 bg-white flex items-center">
        
            <div class="overflow-x-auto rounded-lg border border-gray-200">
            
            <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
              <?php
                
                include 'koneksi.php';

                $sql = "SELECT kode_produk, nama_produk, kategori, deskripsi FROM produk";
                $query = mysqli_query($koneksi, $sql);

              ?>
                <thead class=" ltr:text-left rtl:text-right bg-red-500 ">
                <tr>
                    <th class="whitespace-nowrap px-10 py-2 font-medium text-white">Kode Produk</th>
                    <th class="whitespace-nowrap px-10 py-2 font-medium text-white">Nama Produk</th>
                    <th class="whitespace-nowrap px-10 py-2 font-medium text-white">Kategori</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-white">Aksi</th>
                </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                  <?php while($row = mysqli_fetch_assoc($query)) : ?>
                <tr>
                  <td class="px-3"><?php echo $row['kode_produk'];?></td>
                  <td class="px-3"><?php echo $row['nama_produk'];?></td>
                  <td class="px-3"><?php echo $row['kategori'];?></td>
                  <td>
                    <span class="inline-flex overflow-hidden rounded-md bg-white shadow-sm">
                    <a
                    class="inline-block rounded-full border border-yellow-300 bg-yellow-300 p-3 text-white hover:bg-transparent hover:text-yellow-600 focus:outline-none focus:ring active:text-indigo-500"
                    href="edit_produk.php?id=<?php echo $row['kode_produk'];?>"
                        >
                        <span class="sr-only"> hapus </span>

                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          class="h-4 w-4"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"
                          />
                            </svg>
                        </a>

                        <a
                        class="inline-block rounded-full border border-red-300 p-3 text-red-300 hover:bg-red-300 hover:text-white focus:outline-none focus:ring active:bg-indigo-500"
                        href="hapus_produk.php?id=<?php echo $row['kode_produk'];?>"
                        >
                        <span class="sr-only"> hapus </span>

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="h-4 w-4"
                            >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                            />
                            </svg>
                        </a>
                    </span>
                  </td>
                </tr>
                <?php endwhile; ?>

                </tbody>
            </table>
            </div>
        </div>
    </main>
</body>
</html>

 