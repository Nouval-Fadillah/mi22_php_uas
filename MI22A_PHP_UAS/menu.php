<?php
 /**
     * NIM    : 2257401082
     * NAMA   : NOUVAL FADILLAH
     * KELAS  : MI22A
     */ 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Menu</title>
</head>
<body>
<div class="fixed left-0 top-0 w-64 h-full">
<div class="flex h-screen flex-col justify-between border-e bg-red-500">
          <div class="px-4 py-6">
            
      
            <ul class="mt-6 space-y-1">
              <li>
                <a
                  href=""
                  class="block rounded-lg bg-gray-100 px-4 py-2 text-sm font-medium "
                >
                  Menu
                </a>
              </li>

              <li>
                <a
                  href="dasboard.php"
                  class="block rounded-lg px-4 py-2 text-sm font-medium text-white hover:bg-gray-100 hover:text-black"
                >
                  Dashboard
                </a>
              </li>

              <li>
                <a
                  href="produk.php"
                  class="block rounded-lg px-4 py-2 text-sm font-medium text-white hover:bg-gray-100 hover:text-black"
                >
                  Produk
                </a>
              </li>
      
              <li>
                <a
                  href="kategori.php"
                  class="block rounded-lg px-4 py-2 text-sm font-medium text-white hover:bg-gray-100 hover:text-black"
                >
                  Kategori
                </a>
              </li>
      
              <li>
                <a
                  href="user.php"
                  class="block rounded-lg px-4 py-2 text-sm font-medium text-white hover:bg-gray-100 hover:text-black"
                >
                  User
                </a>
              </li>
      
              <li>
                <details class="group [&_summary::-webkit-details-marker]:hidden">
                  <summary
                    class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-white hover:bg-gray-100 hover:text-black"
                  >
                    <span class="text-sm font-medium"> Account </span>
      
                    <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd"
                        />
                      </svg>
                    </span>
                  </summary>
      
                  <ul class="mt-2 space-y-1 px-4">
      
                    <li>
                      <form action="logout.php">
                        <button
                          type="submit"
                          class="w-full rounded-lg px-4 py-2 text-sm font-medium text-white [text-align:_inherit] hover:bg-gray-100 hover:text-black"
                        >
                          Logout
                        </button>
                      </form>
                    </li>
                  </ul>
                </details>
              </li>
            </ul>
          </div>
      
          <div class="sticky inset-x-0 bottom-0 border-t border-gray-100">
            <a href="#" class="flex items-center gap-2 bg-white p-4 hover:bg-gray-50">
      
              <div>
                <p class="text-xs">
                  <strong class="block font-medium">made in Nouval Fadillah</strong>
      
                  <span> captnouval@gmail.com </span>
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

</body>
</html>