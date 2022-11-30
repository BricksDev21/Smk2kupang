<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="https://picsum.photos/50">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ['Poppins'],
                    },
                    container: {
                        padding: {
                            DEFAULT: '2rem',
                            sm: '2rem',
                            lg: '4rem',
                            xl: '6rem',
                            '2xl': '8rem',
                            center: true
                        }
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        #mode:checked ~ label div.toggle {
            @apply translate-x-7 transition
        }
    </style>
    <title>SMKN 2 Kupang</title>
</head>
<div class="container mx-auto mt-10 mb-20">

    <!-- NAVIGATION -->
    <nav class="mb-8 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 items-center justify-between">

        <!-- navigation-add-news -->
        <button class="w-full col-span-1 md:col-span-3 lg:col-span-1 flex items-center gap-3 bg-sky-500 p-6 rounded-2xl shadow-xl hover:translate-y-1 hover:shadow-lg transition-all">
            <i class="bi bi-plus-circle fa-lg text-white"></i>
            <span class="text-sm font-medium text-white">Posting Berita</span>
        </button>
        <span class="text-center md:text-right text-sm text-gray-500">Urut Berdasarkan</span>

        <!-- navigation-dropdown -->
        <form>
            <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <button id="dropdownDate" data-dropdown-toggle="dateDropdown" type="button" class="w-full p-4 pl-6 flex items-start bg-white dark:bg-gray-800 rounded-full shadow-lg group">
                    <span class="text-sm text-gray-500">Tanggal Postingan</span>
                    <div class="absolute top-1/2 right-0 -mt-3 mr-5 h-6 w-6 text-white bg-sky-500 group-hover:bg-sky-600 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-full text-sm text-center inline-flex items-center justify-center dark:bg-sky-600 dark:group-hover:bg-sky-700 dark:focus:ring-sky-800">
                        <i class="bi bi-chevron-down"></i>
                    </div>
                </button>
                <div id="dateDropdown" class="hidden w-full z-10 bg-white rounded-2xl divide-y overflow-hidden shadow-xl divide-gray-100 dark:bg-gray-800">
                    <ul class="p-0 text-gray-900 text-base dark:text-gray-200 z-10" aria-labelledby="dropdownDate">
                        <li>
                            <a href="#" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">Lele</a>
                        </li>
                        <li>
                            <a href="#" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">Kuyang</a>
                        </li>
                        <li>
                            <a href="#" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">Beo</a>
                        </li>
                        <li>
                            <a href="#" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">Macan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </form>
        <form>
            <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <button id="dropdownNew" data-dropdown-toggle="newDropdown" type="button" class="w-full p-4 pl-6 flex items-start bg-white dark:bg-gray-800 rounded-full shadow-lg group">
                    <span class="text-sm text-gray-500">Terbaru Di Atas</span>
                    <div class="absolute top-1/2 right-0 -mt-3 mr-5 h-6 w-6 text-white bg-sky-500 group-hover:bg-sky-600 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-full text-sm text-center inline-flex items-center justify-center dark:bg-sky-600 dark:group-hover:bg-sky-700 dark:focus:ring-sky-800">
                        <i class="bi bi-chevron-down"></i>
                    </div>
                </button>
                <div id="newDropdown" class="hidden w-full z-10 bg-white rounded-2xl divide-y overflow-hidden shadow-xl divide-gray-100 dark:bg-gray-800">
                    <ul class="p-0 text-gray-900 text-base dark:text-gray-200 z-10" aria-labelledby="dropdownNew">
                        <li>
                            <a href="#" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">Lele</a>
                        </li>
                        <li>
                            <a href="#" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">Kuyang</a>
                        </li>
                        <li>
                            <a href="#" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">Beo</a>
                        </li>
                        <li>
                            <a href="#" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">Macan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </form>
    </nav>

    <!-- LIST -->
    <article class="flex flex-col items-center gap-6">
        <div class="h-fit w-full p-6 flex justify-between gap-4 md:gap-20 bg-white dark:bg-gray-800 rounded-3xl shadow-2xl">
            <div class="flex flex-col gap-2">
                <div class="text-xs text-gray-500 flex items-center gap-2">
                    <span>Postingan</span>
                    <div class="h-1 w-1 rounded-full bg-gray-500"></div>
                    <time>7 jam yang lalu</time>
                </div>
                <h1 class="text-lg font-bold dark:text-white">
                    Penerimaan Siswa Baru TA. 2022/2023
                </h1>
                <p class="text-xs font-medium text-gray-600 dark:text-gray-400">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mi ipsum, condimentum quis dui in, fermentum dictum neque. Donec dictum blandit dolor quis elementum. Aenean gravida pellentesque tellus sit amet porta. In nisi ex, lobortis et tincidunt eu, efficitur vitae mauris. Integer suscipit rhoncus leo, eu dignissim mi rutrum et. 
                </p>
            </div>
            <div class="flex flex-col items-center justify-between">
                <button class="flex flex-col items-center gap-2 group" type="button">
                    <i class="bi bi-pen fa-xl text-gray-500 block group-hover:hidden transition-all"></i>
                    <i class="bi bi-pen-fill fa-xl text-gray-500 hidden group-hover:block transition-all"></i>
                </button>
                <button class="flex flex-col items-center gap-2 group" type="button" data-modal-toggle="delete">
                    <i class="bi bi-trash fa-xl text-gray-500 block group-hover:hidden transition-all"></i>
                    <i class="bi bi-trash-fill fa-xl text-gray-500 hidden group-hover:block transition-all"></i>
                </button>
                <div id="delete" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 md:inset-0 h-modal md:h-full">
                    <div class="relative w-full max-w-md h-full md:h-auto">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="delete">
                                <i class="bi bi-x-lg fa-xl"></i>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-6 text-center flex flex-col items-center gap-6">
                                <div class="h-14 w-14 border-4 border-gray-500 rounded-full flex items-center justify-center">
                                    <i class="bi bi-exclamation-lg fa-2xl text-gray-500"></i>
                                </div>
                                <h3 class="text-lg font-normal text-gray-500 dark:text-gray-400">
                                    Anda yakin ingin menghapus item ini?
                                </h3>
                                <div class="flex items-center gap-4">
                                    <button data-modal-toggle="delete" type="button" class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                        Hapus
                                    </button>
                                    <button data-modal-toggle="delete" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                        Batal
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- INDICATOR -->
    <div class="container mx-auto w-full flex flex-col md:flex-row mt-20 gap-5 items-center justify-end">
        <span class="text-sm font-light text-gray-500">menampilkan 9 dari 25 berita</span>
        <div class="flex gap-2">

            <!-- indicator-left -->
            <button class="h-9 w-9 flex items-center justify-center rounded-r-lg rounded-l-3xl bg-gray-300 dark:bg-gray-800 active:bg-sky-500 dark:active:bg-sky-400 hover:scale-105 transition">
                <i class="bi bi-chevron-left fa-sm text-white"></i>

            </button>

            <!-- indicator-number -->
            <div class="flex gap-2">
                <button class="h-9 w-12 rounded-lg bg-gray-300 dark:bg-gray-800 active:bg-sky-500 dark:active:bg-sky-400 hover:scale-105 transition">
                    <span class="text-lg font-semibold text-white">1</span>
                </button>
                <button class="h-9 w-12 rounded-lg bg-gray-300 dark:bg-gray-800 active:bg-sky-500 dark:active:bg-sky-400 hover:scale-105 transition">
                    <span class="text-lg font-semibold text-white">2</span>
                </button>
                <button class="h-9 w-12 rounded-lg bg-gray-300 dark:bg-gray-800 active:bg-sky-500 dark:active:bg-sky-400 hover:scale-105 transition">
                    <span class="text-lg font-semibold text-white">3</span>
                </button>

            </div>

            <!-- indicator-right -->
            <button class="h-9 w-9 flex items-center justify-center rounded-l-lg rounded-r-3xl bg-gray-300 dark:bg-gray-800 active:bg-sky-500 dark:active:bg-sky-400 hover:scale-105 transition">
                <i class="bi bi-chevron-right fa-sm text-white"></i>
            </button>
        </div>
    </div>
</div>
</html>