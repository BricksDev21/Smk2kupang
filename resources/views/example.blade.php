<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="https://picsum.photos/50">
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <title>Document</title>
</head>
<body class="font-poppins dark:bg-gray-900 cursor-default">
    <header>
        
        <!-- NAVBAR -->
        <nav class="w-screen z-10 fixed">

            <!-- navbar-top -->
            <nav class="h-9 hidden md:flex text-white dark:text-black bg-sky-500">
                <div class="container m-auto flex justify-between gap-5">
                    <ul class="flex items-center">
                        <li class="relative flex flex-col items-center justify-center">
                            <div class="peer">
                                <input id="mode" type="checkbox" class="hidden transition"/>
                                <label for="mode">
                                    <div class="w-10 p-1 flex items-center bg-white dark:bg-gray-800 rounded-full cursor-pointer">
                                        <div class="toggle h-4 w-4 relative flex items-center justify-center bg-sky-500 rounded-full transition">
                                            <i class="bi bi-brightness-high fa-xs block dark:hidden dark:text-gray-800 transition"></i>
                                            <i class="bi bi-moon-fill fa-xs hidden dark:block dark:text-gray-800 transition"></i>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="p-2 z-10 hidden absolute top-9 text-xs font-light text-black align-middle bg-white rounded-md shadow-lg peer-hover:block dark:peer-hover:hidden transition">Mode&nbspcerah</div>
                            <div class="p-2 z-10 hidden absolute top-9 text-xs font-light text-white align-middle bg-gray-800 rounded-md shadow-lg peer-hover:hidden dark:peer-hover:block transition">Mode&nbspgelap</div>
                        </li>
                    </ul>
                    <ul class="flex items-center gap-6 text-xs">
                        <li>
                            <a href="#" class="active:font-bold">Pendaftaran</a>
                        </li>
                        <li>
                            <a href="#" class="active:font-bold">Pusat Informasi</a>
                        </li>
                        <li>
                            <a href="#" class="active:font-bold">Tata Usaha</a>
                        </li>
                        <li>
                            <a href="#" class="active:font-bold">E-Learning</a>
                        </li>
                        <li>
                            <a href="#" class="active:font-bold">Login/Register</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- navbar-bottom -->
            <nav class="py-4 bg-black/30 rounded-b-3xl backdrop-blur-lg dark:bg-white/30">
                <div class="container flex flex-wrap justify-between items-center mx-auto">
                    <a href="#" class="h-full flex items-center gap-3 md:gap-6">
                        <div class="h-auto w-8 md:w-12 overflow-hidden bg-contain">
                            <img src="https://picsum.photos/50" alt="logo">
                        </div>
                        <span class="lg:text-2xl font-bold text-white dark:text-gray-900">SMK N 2 KUPANG</span>
                    </a>
                    <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex justify-center items-center ml-3 text-white rounded-lg md:hidden hover:text-gray-300 focus:outline-none focus:ring-2 focus:ring-sky-300 dark:text-gray-900 dark:hover:text-white dark:focus:ring-sky-300" aria-controls="navbar-solid-bg" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <i class="bi bi-list fa-2xl"></i>
                    </button>
                    <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
                        <ul class="flex flex-col mt-4 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-transparent md:dark:bg-transparent ">
                            <li>
                                <a href="#" class="flex items-center w-full py-2 pr-4 pl-3 text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-sky-300 md:p-0 dark:text-gray-900 dark:hover:bg-gray-200 md:dark:hover:text-sky-500 md:dark:hover:bg-transparent text-base" aria-current="page">Home</a>
                            </li>
                            <li>
                                <button id="drop-major" data-dropdown-toggle="major-dropped" type="button" class="transition group flex items-center w-full py-2 pr-4 pl-3 text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-sky-300 md:p-0 dark:text-gray-900 md:dark:hover:text-sky-500 dark:hover:bg-gray-200 md:dark:hover:bg-transparent text-base">
                                    <span for="drop-major">Jurusan</span>
                                    <i class="bi bi-chevron-down ml-1 -rotate-90 group-focus:rotate-0 transition"></i>
                                </button>
                                <div id="major-dropped" class="hidden w-full md:w-44 z-10 bg-white rounded-2xl divide-y overflow-hidden shadow-xl divide-gray-100 dark:bg-gray-900">
                                    <ul class="p-0 text-gray-900 text-base dark:text-gray-200 z-10" aria-labelledby="drop-profile">
                                        <li>
                                            <a href="#" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">Monyet</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">Kucing</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">Singa</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <button id="drop-profile" data-dropdown-toggle="profile-dropped" type="button" class="transition group flex items-center w-full py-2 pr-4 pl-3 text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-sky-300 md:p-0 dark:text-gray-900 md:dark:hover:text-sky-500 dark:hover:bg-gray-200 md:dark:hover:bg-transparent text-base">
                                    <span for="drop-profile">Profil Sekolah</span>
                                    <i class="bi bi-chevron-down ml-1 -rotate-90 group-focus:rotate-0 transition"></i>
                                </button>
                                <div id="profile-dropped" class="hidden w-full md:w-44 z-10 bg-white rounded-2xl divide-y overflow-hidden shadow-xl divide-gray-100 dark:bg-gray-900">
                                    <ul class="p-0 text-gray-900 text-base dark:text-gray-200 z-10" aria-labelledby="drop-profile">
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
                            </li>
                            <li>
                                <button id="drop-academic" data-dropdown-toggle="academic-dropped" type="button" class="transition group flex items-center w-full py-2 pr-4 pl-3 text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-sky-300 md:p-0 dark:text-gray-900 md:dark:hover:text-sky-500 dark:hover:bg-gray-200 md:dark:hover:bg-transparent text-base">
                                    <span for="drop-academic">Akademik</span>
                                    <i class="bi bi-chevron-down ml-1 -rotate-90 group-focus:rotate-0 transition"></i>
                                </button>
                                <div id="academic-dropped" class="hidden w-full md:w-44 z-10 bg-white rounded-2xl divide-y overflow-hidden shadow-xl divide-gray-100 dark:bg-gray-900">
                                    <ul class="p-0 text-gray-900 text-base dark:text-gray-200 z-10" aria-labelledby="drop-profile">
                                        <li>
                                            <a href="#" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">Monyet</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">Kucing</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">Singa</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- responsive-switch -->
                            <ul class="w-full flex justify-end md:hidden">
                                <li class="relative flex flex-col items-center justify-center">
                                    <div class="peer">
                                        <input id="mode" type="checkbox" class="hidden transition"/>
                                        <label for="mode">
                                            <div class="p-1 flex items-center bg-white dark:bg-gray-800 rounded-full cursor-pointer">
                                                <div class="toggle h-4 w-4 relative flex items-center justify-center bg-sky-500 rounded-full transition">
                                                    <i class="bi bi-brightness-high fa-xs block dark:hidden dark:text-gray-800 transition"></i>
                                                    <i class="bi bi-moon-fill fa-xs hidden dark:block dark:text-gray-800 transition"></i>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </nav>
        </nav>
    </header>

    <main>

        <!-- GREETING -->
        <div class="h-screen relative flex flex-col md:items-center justify-center bg-cover rounded-b-3xl overflow-hidden">
            <div class="absolute h-full w-full -z-10 bg-gradient-to-b from-transparent to-black/50"></div>
            <img src="https://picsum.photos/1920/1080" alt="cover" class="h-full w-full object-cover -z-20 absolute">
            <span class="text-white text-sm md:text-xl mx-5 lg:mx-0 font-light mb-2">Selamat datang di</span>
            <span class="w-fit text-white text-4xl md:text-6xl mx-5 lg:mx-0 font-bold px-5 py-1 bg-sky-500/50">SMKN 2 KUPANG</span>
        </div>

        <div class="container relative mx-auto flex flex-col items-center -translate-y-40 -mb-40">
            
            <!-- NEWS -->
            <section class="mb-24 w-full flex flex-col self-center" id="news">
                <div class="mb-5 flex items-center justify-between">

                    <!-- news-title -->
                    <h1 class="pl-2 md:pl-3 border-l-4 text-base md:text-xl border-sky-500 text-white font-medium md:font-semibold">
                        Berita Terkini
                    </h1>
                </div>

                <!-- news-card -->
                <article class="h-full mb-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-7">
                    <a class="h-96 group cursor-pointer">
                        <article class="relative h-96 group rounded-3xl shadow-2xl overflow-hidden dark:bg-gray-800 group-hover:translate-y-2 group-hover:shadow-xl transition">
                            <div class="h-1/2 overflow-hidden">
                                <img src="https://picsum.photos/1350/1080" alt="berita" class="h-full w-full object-cover group-hover:scale-110 transition bg-black">
                            </div>
                            <time class="absolute top-36 m-6 px-5 py-2 text-sm text-white rounded-full bg-sky-500">
                                Selasa, 20 Sept 2020
                            </time>
                            <div class="h-1/2 p-6 flex flex-col justify-around text-left text-black dark:text-white bg-white dark:bg-gray-800">
                                <h2 class="text-xl font-semibold ">Penerimaan Siswa Baru <br> TA. 2023-2024</h2>
                                <p class="mt-3 text-xs">Informasi terbaru Penerimaan Siswa Baru TA. 2023-2024. Pengumuman terbaru kuota</p>
                            </div>
                        </article>
                    </a>
                    <a class="h-96 group cursor-pointer">
                        <article class="relative h-96 group rounded-3xl shadow-2xl overflow-hidden dark:bg-gray-800 group-hover:translate-y-2 group-hover:shadow-xl transition">
                            <div class="h-1/2 overflow-hidden">
                                <img src="https://picsum.photos/1350/1080" alt="berita" class="h-full w-full object-cover group-hover:scale-110 transition bg-black">
                            </div>
                            <time class="absolute top-36 m-6 px-5 py-2 text-sm text-white rounded-full bg-sky-500">
                                Selasa, 20 Sept 2020
                            </time>
                            <div class="h-1/2 p-6 flex flex-col justify-around text-left text-black dark:text-white bg-white dark:bg-gray-800">
                                <h2 class="text-xl font-semibold ">Penerimaan Siswa Baru <br> TA. 2023-2024</h2>
                                <p class="mt-3 text-xs">Informasi terbaru Penerimaan Siswa Baru TA. 2023-2024. Pengumuman terbaru kuota</p>
                            </div>
                        </article>
                    </a>
                    <a class="h-96 group cursor-pointer">
                        <article class="relative h-96 group rounded-3xl shadow-2xl overflow-hidden dark:bg-gray-800 group-hover:translate-y-2 group-hover:shadow-xl transition">
                            <div class="h-1/2 overflow-hidden">
                                <img src="https://picsum.photos/1350/1080" alt="berita" class="h-full w-full object-cover group-hover:scale-110 transition bg-black">
                            </div>
                            <time class="absolute top-36 m-6 px-5 py-2 text-sm text-white rounded-full bg-sky-500">
                                Selasa, 20 Sept 2020
                            </time>
                            <div class="h-1/2 p-6 flex flex-col justify-around text-left text-black dark:text-white bg-white dark:bg-gray-800">
                                <h2 class="text-xl font-semibold ">Penerimaan Siswa Baru <br> TA. 2023-2024</h2>
                                <p class="mt-3 text-xs">Informasi terbaru Penerimaan Siswa Baru TA. 2023-2024. Pengumuman terbaru kuota</p>
                            </div>
                        </article>
                    </a>
                </article>

                <!-- news-button -->
                <div class="w-full flex justify-center">
                    <button class="group">
                        <a href="#">
                            <div class="w-fit px-12 py-3 rounded-full shadow-xl md:text-xl font-medium text-white bg-sky-500 group-hover:pr-8 group-hover:translate-y-1 group-hover:shadow-none active:ring-4 focus:ring-sky-300 transition-all">
                                <span>Lihat berita lainnya</span>
                                <i class="bi bi-arrow-right fa-xl ml-2 group-hover:ml-6 transition-all"></i>
                            </div>
                        </a>
                    </button>
                </div>
            </section>
                
            <!-- PROFILE -->
            <section class="mb-24 w-full flex flex-col self-center" id="profile">
                <div class="mb-5 flex items-center justify-between">

                    <!-- profile-title -->
                    <h1 class="pl-2 md:pl-3 border-l-4 text-base md:text-xl border-sky-500 text-gray-700 dark:text-white font-medium md:font-semibold">
                        Profil Singkat Sekolah
                    </h1>

                    <!-- profile-more -->
                    <a href="#" class="hidden md:flex group items-center gap-2 text-gray-500 dark:text-gray-400 hover:text-sky-500 transition-all">
                        <span class="text-xl font-light">Pelajari lebih lanjut</span>
                        <div class="flex justify-center h-7 w-7 border-2 border-gray-700 rounded-full dark:border-gray-400 group-hover:border-sky-500 transition-all">
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </a>
                </div>

                <!-- profile-card -->
                <article class="mb-12 h-auto rounded-3xl shadow-2xl overflow-hidden">
                    <iframe width="100%" height="600px" src="https://youtube.com/embed/1JNmz17gnMw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </article>

                <!-- profile-button -->
                <div class="w-full flex md:hidden justify-center">
                    <button class="group">
                        <a href="#">
                            <div class="w-fit px-12 py-3 rounded-full shadow-xl md:text-xl font-medium text-white bg-sky-500 group-hover:pr-8 group-hover:translate-y-1 group-hover:shadow-none active:ring-4 focus:ring-sky-300 transition-all">
                                <span>Pelajari Lebih Lanjut</span>
                                <i class="bi bi-arrow-right fa-xl ml-2 group-hover:ml-6 transition-all"></i>
                            </div>
                        </a>
                    </button>
                </div>
            </section>

            <!-- AGENDA -->
            <section class="mb-24 w-full flex flex-col self-center" id="agenda">
                <div class="mb-5 flex justify-between">

                    <!-- agenda-title -->
                    <h1 class="pl-2 md:pl-3 border-l-4 text-base md:text-xl border-sky-500 text-gray-700 dark:text-white font-medium md:font-semibold">
                        Agenda Sekolah
                    </h1>
                    
                    <!-- agenda-more -->
                    <a href="#" class="hidden md:flex group items-center gap-2 text-gray-500 dark:text-gray-400 hover:text-sky-500 transition-all">
                        <span class="text-xl font-light">Lebih Banyak</span>
                        <div class="flex justify-center h-7 w-7 border-2 border-gray-700 rounded-full dark:border-gray-400 group-hover:border-sky-500 transition-all">
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </a>
                </div>

                <!-- agenda-card -->
                <article class="h-full mb-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 md:gap-7">
                    <article class="h-full p-9 relative flex md:flex-col justify-around gap-9 md:justify-between rounded-3xl shadow-2xl bg-white dark:bg-gray-800">
                        <div class="flex flex-row justify-between items-center">
                            <div class="flex flex-col">
                                <span class="text-3xl font-bold text-sky-500">21</span>
                                <span class="text-black dark:text-white">Sept</span>
                            </div>
                        </div>
                        <div class="group absolute top-5 right-5 md:top-9 md:right-9 cursor-pointer transition-all">
                            <div class="p-2 rounded-full bg-sky-500 shadow-xl text-white group-hover:translate-y-1 group-hover:shadow-none active:ring-4 active:ring-sky-300 transition-all">
                                <i class="bi bi-bell fa-xl"></i>
                            </div>
                        </div>
                        <div class="mt-9 flex flex-col gap-5">
                            <span class="text-xl font-extrabold text-black dark:text-white">07.00 - 08.30</span>
                            <span class="text-black dark:text-white">Pembagian Raport untuk Kelas Sekian 2022</span>
                        </div>
                    </article>
                    <article class="h-full p-9 relative flex md:flex-col justify-around gap-9 md:justify-between rounded-3xl shadow-2xl bg-white dark:bg-gray-800">
                        <div class="flex flex-row justify-between items-center">
                            <div class="flex flex-col">
                                <span class="text-3xl font-bold text-sky-500">21</span>
                                <span class="text-black dark:text-white">Sept</span>
                            </div>
                        </div>
                        <div class="group absolute top-5 right-5 md:top-9 md:right-9 cursor-pointer transition-all">
                            <div class="p-2 rounded-full bg-sky-500 shadow-xl text-white group-hover:translate-y-1 group-hover:shadow-none active:ring-4 active:ring-sky-300 transition-all">
                                <i class="bi bi-bell fa-xl"></i>
                            </div>
                        </div>
                        <div class="mt-9 flex flex-col gap-5">
                            <span class="text-xl font-extrabold text-black dark:text-white">07.00 - 08.30</span>
                            <span class="text-black dark:text-white">Pembagian Raport untuk Kelas Sekian 2022</span>
                        </div>
                    </article>
                    <article class="h-full p-9 relative flex md:flex-col justify-around gap-9 md:justify-between rounded-3xl shadow-2xl bg-white dark:bg-gray-800">
                        <div class="flex flex-row justify-between items-center">
                            <div class="flex flex-col">
                                <span class="text-3xl font-bold text-sky-500">21</span>
                                <span class="text-black dark:text-white">Sept</span>
                            </div>
                        </div>
                        <div class="group absolute top-5 right-5 md:top-9 md:right-9 cursor-pointer transition-all">
                            <div class="p-2 rounded-full bg-sky-500 shadow-xl text-white group-hover:translate-y-1 group-hover:shadow-none active:ring-4 active:ring-sky-300 transition-all">
                                <i class="bi bi-bell fa-xl"></i>
                            </div>
                        </div>
                        <div class="mt-9 flex flex-col gap-5">
                            <span class="text-xl font-extrabold text-black dark:text-white">07.00 - 08.30</span>
                            <span class="text-black dark:text-white">Pembagian Raport untuk Kelas Sekian 2022</span>
                        </div>
                    </article>
                    <article class="h-full p-9 relative flex md:flex-col justify-around gap-9 md:justify-between rounded-3xl shadow-2xl bg-white dark:bg-gray-800">
                        <div class="flex flex-row justify-between items-center">
                            <div class="flex flex-col">
                                <span class="text-3xl font-bold text-sky-500">21</span>
                                <span class="text-black dark:text-white">Sept</span>
                            </div>
                        </div>
                        <div class="group absolute top-5 right-5 md:top-9 md:right-9 cursor-pointer transition-all">
                            <div class="p-2 rounded-full bg-sky-500 shadow-xl text-white group-hover:translate-y-1 group-hover:shadow-none active:ring-4 active:ring-sky-300 transition-all">
                                <i class="bi bi-bell fa-xl"></i>
                            </div>
                        </div>
                        <div class="mt-9 flex flex-col gap-5">
                            <span class="text-xl font-extrabold text-black dark:text-white">07.00 - 08.30</span>
                            <span class="text-black dark:text-white">Pembagian Raport untuk Kelas Sekian 2022</span>
                        </div>
                    </article>
                </article>

                <!-- agenda-button -->
                <div class="w-full flex md:hidden justify-center">
                    <button class="group">
                        <a href="#">
                            <div class="w-fit px-12 py-3 rounded-full shadow-xl md:text-xl font-medium text-white bg-sky-500 group-hover:pr-8 group-hover:translate-y-1 group-hover:shadow-none active:ring-4 focus:ring-sky-300 transition-all">
                                <span>Lebih Banyak</span>
                                <i class="bi bi-arrow-right fa-xl ml-2 group-hover:ml-6 transition-all"></i>
                            </div>
                        </a>
                    </button>
                </div>
            </section>

            <!-- ANNOUNCEMENT -->
            <section class="mb-24 w-full flex flex-col self-center" id="announcement">
                <div class="mb-5 flex justify-between">

                    <!-- announcement-title -->
                    <h1 class="pl-2 md:pl-3 border-l-4 text-base md:text-xl border-sky-500 text-gray-700 dark:text-white font-medium md:font-semibold">
                        Pengumuman
                    </h1>
                    
                    <!-- announcement-more -->
                    <a href="#" class="hidden md:flex group items-center gap-2 text-gray-500 dark:text-gray-400 hover:text-sky-500 transition-all">
                        <span class="text-xl font-light">Lebih Banyak</span>
                        <div class="flex justify-center h-7 w-7 border-2 border-gray-700 rounded-full dark:border-gray-400 group-hover:border-sky-500 transition-all">
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </a>
                </div>

                <!-- announcement-card -->
                <article class="h-full mb-12 grid grid-cols-1 lg:grid-cols-2 gap-5 md:gap-7">
                    <article class="h-full w-full p-9 text-black dark:text-white bg-white rounded-3xl shadow-2xl border-2 border-sky-500 dark:bg-gray-800">
                        <div class="flex items-center justify-between">
                            <div class="flex gap-6">
                                <div class="py-1 px-2 flex flex-row items-center gap-2 bg-gray-200 rounded-full dark:bg-gray-700">
                                    <div class="h-2 w-2 bg-red-500 rounded-full dark:bg-red-400"></div>
                                    <span class="text-xs font-medium text-red-500 uppercase dark:text-red-400">PENTING</span>
                                </div>
                                <div class="py-1 px-2 flex flex-row items-center gap-2 bg-gray-200 rounded-full dark:bg-gray-700">
                                    <div class="h-2 w-2 bg-blue-500 rounded-full dark:bg-blue-400"></div>
                                    <span class="text-xs font-medium text-blue-500 uppercase dark:text-blue-400">TERBARU</span>
                                </div>
                            </div>
                            <span class="text-xs font-medium tracking-widest text-gray-500 dark:text-gray-400">7 hari yang lalu</span>
                        </div>
                        <div class="my-6 flex flex-col">
                            <span class="text-lg font-bold">Pengumuman Seleksi Beasiswa Tahun Akademik 2022/2023</span>
                            <br>
                            <span class="text-sm">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                        </div>
                        <div class="w-full flex justify-end">
                            <button class="group hover:translate-y-1 transition">
                                    <div class="w-fit py-3 px-3 md:px-8 flex items-center gap-3 bg-sky-500 rounded-full shadow-xl group-hover:translate-y-1 group-hover:shadow-none active:ring-4 active:ring-sky-300 transition-all">
                                        <span class="hidden md:flex text-sm font-medium text-white">Lihat Pengumuman</span>
                                        <i class="text-white bi bi-box-arrow-up-right fa-lg md:fa-xs"></i>
                                    </div>
                            </button>
                        </div>
                    </article>
                    <article class="h-full w-full p-9 text-black dark:text-white bg-white rounded-3xl shadow-2xl border-2 border-sky-500 dark:bg-gray-800">
                        <div class="flex items-center justify-between">
                            <div class="flex gap-6">
                                <div class="py-1 px-2 flex flex-row items-center gap-2 bg-gray-200 rounded-full dark:bg-gray-700">
                                    <div class="h-2 w-2 bg-red-500 rounded-full dark:bg-red-400"></div>
                                    <span class="text-xs font-medium text-red-500 uppercase dark:text-red-400">PENTING</span>
                                </div>
                                <div class="py-1 px-2 flex flex-row items-center gap-2 bg-gray-200 rounded-full dark:bg-gray-700">
                                    <div class="h-2 w-2 bg-blue-500 rounded-full dark:bg-blue-400"></div>
                                    <span class="text-xs font-medium text-blue-500 uppercase dark:text-blue-400">TERBARU</span>
                                </div>
                            </div>
                            <span class="text-xs font-medium tracking-widest text-gray-500 dark:text-gray-400">7 hari yang lalu</span>
                        </div>
                        <div class="my-6 flex flex-col">
                            <span class="text-lg font-bold">Pengumuman Seleksi Beasiswa Tahun Akademik 2022/2023</span>
                            <br>
                            <span class="text-sm">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                        </div>
                        <div class="w-full flex justify-end">
                            <button class="group hover:translate-y-1 transition">
                                    <div class="w-fit py-3 px-3 md:px-8 flex items-center gap-3 bg-sky-500 rounded-full shadow-xl group-hover:translate-y-1 group-hover:shadow-none active:ring-4 active:ring-sky-300 transition-all">
                                        <span class="hidden md:flex text-sm font-medium text-white">Lihat Pengumuman</span>
                                        <i class="text-white bi bi-box-arrow-up-right fa-lg md:fa-xs"></i>
                                    </div>
                            </button>
                        </div>
                    </article>
                    <article class="h-full w-full p-9 text-black dark:text-white bg-white rounded-3xl shadow-2xl border-2 border-sky-500 dark:bg-gray-800">
                        <div class="flex items-center justify-between">
                            <div class="flex gap-6">
                                <div class="py-1 px-2 flex flex-row items-center gap-2 bg-gray-200 rounded-full dark:bg-gray-700">
                                    <div class="h-2 w-2 bg-red-500 rounded-full dark:bg-red-400"></div>
                                    <span class="text-xs font-medium text-red-500 uppercase dark:text-red-400">PENTING</span>
                                </div>
                                <div class="py-1 px-2 flex flex-row items-center gap-2 bg-gray-200 rounded-full dark:bg-gray-700">
                                    <div class="h-2 w-2 bg-blue-500 rounded-full dark:bg-blue-400"></div>
                                    <span class="text-xs font-medium text-blue-500 uppercase dark:text-blue-400">TERBARU</span>
                                </div>
                            </div>
                            <span class="text-xs font-medium tracking-widest text-gray-500 dark:text-gray-400">7 hari yang lalu</span>
                        </div>
                        <div class="my-6 flex flex-col">
                            <span class="text-lg font-bold">Pengumuman Seleksi Beasiswa Tahun Akademik 2022/2023</span>
                            <br>
                            <span class="text-sm">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                        </div>
                        <div class="w-full flex justify-end">
                            <button class="group hover:translate-y-1 transition">
                                    <div class="w-fit py-3 px-3 md:px-8 flex items-center gap-3 bg-sky-500 rounded-full shadow-xl group-hover:translate-y-1 group-hover:shadow-none active:ring-4 active:ring-sky-300 transition-all">
                                        <span class="hidden md:flex text-sm font-medium text-white">Lihat Pengumuman</span>
                                        <i class="text-white bi bi-box-arrow-up-right fa-lg md:fa-xs"></i>
                                    </div>
                            </button>
                        </div>
                    </article>
                    <article class="h-full w-full p-9 text-black dark:text-white bg-white rounded-3xl shadow-2xl border-2 border-sky-500 dark:bg-gray-800">
                        <div class="flex items-center justify-between">
                            <div class="flex gap-6">
                                <div class="py-1 px-2 flex flex-row items-center gap-2 bg-gray-200 rounded-full dark:bg-gray-700">
                                    <div class="h-2 w-2 bg-red-500 rounded-full dark:bg-red-400"></div>
                                    <span class="text-xs font-medium text-red-500 uppercase dark:text-red-400">PENTING</span>
                                </div>
                                <div class="py-1 px-2 flex flex-row items-center gap-2 bg-gray-200 rounded-full dark:bg-gray-700">
                                    <div class="h-2 w-2 bg-blue-500 rounded-full dark:bg-blue-400"></div>
                                    <span class="text-xs font-medium text-blue-500 uppercase dark:text-blue-400">TERBARU</span>
                                </div>
                            </div>
                            <span class="text-xs font-medium tracking-widest text-gray-500 dark:text-gray-400">7 hari yang lalu</span>
                        </div>
                        <div class="my-6 flex flex-col">
                            <span class="text-lg font-bold">Pengumuman Seleksi Beasiswa Tahun Akademik 2022/2023</span>
                            <br>
                            <span class="text-sm">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                        </div>
                        <div class="w-full flex justify-end">
                            <button class="group hover:translate-y-1 transition">
                                    <div class="w-fit py-3 px-3 md:px-8 flex items-center gap-3 bg-sky-500 rounded-full shadow-xl group-hover:translate-y-1 group-hover:shadow-none active:ring-4 active:ring-sky-300 transition-all">
                                        <span class="hidden md:flex text-sm font-medium text-white">Lihat Pengumuman</span>
                                        <i class="text-white bi bi-box-arrow-up-right fa-lg md:fa-xs"></i>
                                    </div>
                            </button>
                        </div>
                    </article>

                    <!-- announcement-button -->
                    <div class="w-full flex md:hidden justify-center">
                        <button class="group">
                            <a href="#">
                                <div class="w-fit px-12 py-3 rounded-full shadow-xl md:text-xl font-medium text-white bg-sky-500 group-hover:pr-8 group-hover:translate-y-1 group-hover:shadow-none active:ring-4 focus:ring-sky-300 transition-all">
                                    <span>Lebih Banyak</span>
                                    <i class="bi bi-arrow-right fa-xl ml-2 group-hover:ml-6 transition-all"></i>
                                </div>
                            </a>
                        </button>
                    </div>
                </article>
            </section>

            <section class="w-full mb-24 grid grid-cols-1 lg:grid-cols-2 gap-6">

                <!-- LOCATION -->
                <div class="mb-24 lg:mb-0 flex flex-col self-center" id="location">
                    
                    <!-- location-title -->
                    <div class="pl-3 mb-5 border-l-4 border-sky-500">
                        <span class="text-xl font-semibold text-gray-700 dark:text-gray-200">Lokasi Sekolah</span>
                    </div>

                    <!-- location-card -->
                    <article class="h-96 rounded-3xl shadow-2xl overflow-hidden">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d490.907060521753!2d123.58813562666583!3d-10.159794965114882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c569c934a35b42f%3A0x4366c64780b085e2!2sSMK%20Negeri%202%20Kupang!5e0!3m2!1sid!2sid!4v1666948471107!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </article>
                </div>

                <!-- NEWEST -->
                <div class="flex flex-col self-center" id="newest">
                    
                    <!-- newest-title -->
                    <div class="pl-3 mb-5 border-l-4 border-sky-500">
                        <span class="text-xl font-semibold text-gray-700 dark:text-gray-200">Postingan Terbaru</span>
                    </div>

                    <!-- newest-card -->
                    <div class="h-96 rounded-3xl shadow-2xl bg-gray-500 overflow-hidden">
                    </div>
                </div>
            </section>

            <!-- GALLERY -->
            <section class="w-full flex flex-col self-center" id="gallery">
                <div class="mb-5 flex justify-between">

                    <!-- gallery-title -->
                    <h1 class="pl-2 md:pl-3 border-l-4 text-base md:text-xl border-sky-500 text-gray-700 dark:text-white font-medium md:font-semibold">
                        Galeri Foto
                    </h1>
                    
                    <!-- gallery-more -->
                    <a href="#" class="hidden md:flex group items-center gap-2 text-gray-500 dark:text-gray-400 hover:text-sky-500 transition-all">
                        <span class="text-xl font-light">Lebih Banyak</span>
                        <div class="flex justify-center h-7 w-7 border-2 border-gray-700 rounded-full dark:border-gray-400 group-hover:border-sky-500 transition-all">
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </a>
                </div>

                <!-- gallery-card -->
                <article class="grid md:grid-cols-2 lg:grid-cols-3 gap-7 bg-cover">
                    <article class="group transition-all">
                        <button class="w-full h-96 md:h-52 relative rounded-3xl overflow-hidden shadow-2xl cursor-pointer group-hover:translate-y-2 transition-all group-hover:shadow-xl">
                            <img src="https://picsum.photos/1080/1920" alt="galerry" class="h-full w-full absolute overflow-hidden -z-10 object-cover group-hover:scale-110 transition-all">
                            <div class="h-full w-full bg-gradient-to-b from-transparent to-black/50">
                                <div class="h-full p-6 flex flex-col gap-2 text-left justify-end font-medium text-white">
                                    <span class="text-xs">Senin, 17 Agustus 2022</span>
                                    <span class="lg:text-xl">Upacara Kemerdekaan Indonesia</span>
                                </div>
                            </div>
                        </button>
                    </article>
                    <article class="group transition-all">
                        <button class="w-full h-96 md:h-52 relative rounded-3xl overflow-hidden shadow-2xl cursor-pointer group-hover:translate-y-2 transition-all group-hover:shadow-xl">
                            <img src="https://picsum.photos/1080/1920" alt="galerry" class="h-full w-full absolute overflow-hidden -z-10 object-cover group-hover:scale-110 transition-all">
                            <div class="h-full w-full bg-gradient-to-b from-transparent to-black/50">
                                <div class="h-full p-6 flex flex-col gap-2 text-left justify-end font-medium text-white">
                                    <span class="text-xs">Senin, 17 Agustus 2022</span>
                                    <span class="lg:text-xl">Upacara Kemerdekaan Indonesia</span>
                                </div>
                            </div>
                        </button>
                    </article>
                    <article class="group transition-all">
                        <button class="w-full h-96 md:h-52 relative rounded-3xl overflow-hidden shadow-2xl cursor-pointer group-hover:translate-y-2 transition-all group-hover:shadow-xl">
                            <img src="https://picsum.photos/1080/1920" alt="galerry" class="h-full w-full absolute overflow-hidden -z-10 object-cover group-hover:scale-110 transition-all">
                            <div class="h-full w-full bg-gradient-to-b from-transparent to-black/50">
                                <div class="h-full p-6 flex flex-col gap-2 text-left justify-end font-medium text-white">
                                    <span class="text-xs">Senin, 17 Agustus 2022</span>
                                    <span class="lg:text-xl">Upacara Kemerdekaan Indonesia</span>
                                </div>
                            </div>
                        </button>
                    </article>
                </article>

                <!-- galerry-button -->
                <div class="mt-8 w-full flex md:hidden justify-center">
                    <button class="group">
                        <a href="#">
                            <div class="w-fit px-12 py-3 rounded-full shadow-xl md:text-xl font-medium text-white bg-sky-500 group-hover:pr-8 group-hover:translate-y-1 group-hover:shadow-none active:ring-4 focus:ring-sky-300 transition-all">
                                <span>Lebih Banyak</span>
                                <i class="bi bi-arrow-right fa-xl ml-2 group-hover:ml-6 transition-all"></i>
                            </div>
                        </a>
                    </button>
                </div>
            </section>
        </div>
    </main>

    <footer>

        <!-- CONTACT -->
        <section  class="mt-20 py-8 lg:py-16 bg-gray-300 rounded-t-3xl dark:bg-gray-700">
            <div class="container flex flex-col justify-between m-auto">
                
                <!-- contact-description -->
                <ul class="flex flex-col lg:flex-row justify-center text-gray-600 gap-10 lg:gap-20 dark:text-gray-300">
                    <li>

                        <!-- contact-description-logo -->
                        <ul class="flex flex-col lg:flex-row gap-5 lg:gap-12">
                            <li class="h-10 w-10 lg:h-32 lg:w-32 overflow-hidden bg-contain">
                                <img src="https://picsum.photos/150" alt="logo">
                            </li>

                            <!-- contact-description-about -->
                            <li>
                                <ul class="flex flex-col gap-3 lg:gap-4">
                                    <li class="lg:text-2xl font-bold">SMKN 2 KUPANG</li>
                                    <li>
                                        <a href="#" class="flex gap-3">
                                            <i class="bi bi-geo-alt"></i>
                                            <span class="text-sm lg:text-base">Jalan Jend. A. Yani No. 48 Kupang</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex gap-3">
                                            <i class="bi bi-envelope"></i>
                                            <span class="text-sm lg:text-base">admin@smkn2kupang.sch.id</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex gap-3">
                                            <i class="bi bi-telephone"></i>
                                            <span class="text-sm lg:text-base">(0380) 833239</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>

                        <!-- contact-description-profile -->
                        <ul class="flex flex-col gap-3 lg:gap-4">
                            <li class="lg:text-xl font-semibold">Profil Sekolah</li>
                            <li>
                                <a href="#" class="text-sm lg:text-base">Sambutan Kepala Sekolah</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm lg:text-base">Tenaga Pendidik</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm lg:text-base">Visi & Misi</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm lg:text-base">Tracking Alumni</a>
                            </li>
                        </ul>
                    </li>
                    <li>

                        <!-- contact-description-link -->
                        <ul class="flex flex-col gap-3 lg:gap-4">
                            <li class="lg:text-xl font-semibold">Link Berguna</li>
                            <li>
                                <a href="#">Dashboard Sekolah</a>
                            </li>
                            <li>
                                <a href="#">Tata Usaha Sekolah</a>
                            </li>
                            <li>
                                <a href="#">E-Learning</a>
                            </li>
                            <li class="text-sm lg:text-base mt-3 font-bold">
                                <a href="#">Masuk/Login</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <!-- contact-copyright -->
                <div class="mt-12 flex flex-col lg:items-center gap-2 lg:gap-4 text-gray-400 dark:text-gray-400">
                    <i class="bi bi-globe2"></i>
                    <span class="text-sm font-semibold">Hak Cipta @ SMKN 2 Kupang 2022</span>
                </div>
            </div>
        </section>
    </footer>
</body>
</html>