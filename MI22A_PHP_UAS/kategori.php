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
            href="tambah_kategori.php"
            >
            <span
                class="font-medium text-white transition-colors group-hover:text-red-600 group-active:text-red-500"
            >
                Tambah Kategori
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
        
        <div class="py-2 px-6 bg-white flex ">
            
            <div class="flow-root rounded-lg border border-red-300 py-3 shadow-sm">
                <dl class="-my-3 divide-y divide-gray-100 text-sm">
                    <?php
                    include 'koneksi.php';

                    $sql = "SELECT kode_kategori,kategori FROM kategori";
                                $query = mysqli_query($koneksi, $sql);
                    ?>
                    <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4 px-5  ">
                        <?php while($row = mysqli_fetch_assoc($query)) : ?>
                    <dt class="font-medium text-gray-900">
                        <td><?php echo $row['kategori'];?></td>
                    </dt>
                    <dd class="text-gray-700 sm:col-span-2 px-5 ">
                    <a
                        class="inline-block rounded-full border border-red-600 p-2 text-red-600 hover:bg-red-600 hover:text-white focus:outline-none focus:ring active:bg-red-500"
                        href="hapus_kategori.php?id=<?php echo $row['kode_kategori'];?>"
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
                    </dd>
                        <?php endwhile; ?>
                    </div>
                </dl>
            </div>

        </div>
    </main>
</body>
</html>