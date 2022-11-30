<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="https://picsum.photos/50">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    <title>{{ $title ?? '' }}</title>
</head>

<body class="font-poppins dark:bg-gray-900 cursor-default">
    <header>
        <div class="p-5 container m-auto flex flex-col sm:flex-row items-center justify-between gap-5">
            
        <!-- DRAWER -->
        <div class="w-full flex items-center sm:justify-start justify-between sm:gap-10">
            <nav class="flex flex-col justify-between">

                <!-- drawer-toggle -->
                <div class="flex">
                    <button class="text-white bg-sky-500 hover:bg-sky-600 focus:ring-4 focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-sky-600 dark:hover:bg-sky-700 focus:outline-none dark:focus:ring-sky-800" type="button" data-drawer-target="drawer-body-scrolling" data-drawer-show="drawer-body-scrolling" data-drawer-body-scrolling="true" aria-controls="drawer-body-scrolling">
                        <i class="bi bi-list fa-2xl"></i>
                    </button>
                </div>
                
                <!-- drawer-component -->
                <div id="drawer-body-scrolling" class="fixed z-40 h-screen flex flex-col justify-between overflow-y-auto rounded-r-3xl bg-white w-80 dark:bg-gray-800 transition-transform left-0 top-0 -translate-x-full" tabindex="-1" aria-labelledby="drawer-body-scrolling-label" aria-hidden="true">
                    <div>
                        <div class="flex justify-between items-center p-3">
                            <div class="flex gap-4 items-center">
                                <div class="h-12 w-12 overflow-hidden">
                                    <img src="{{ asset('img/logo.webp') }}" alt="logo" class="h-full w-full object-cover">
                                </div>
                                <span id="drawer-body-scrolling-label" class="p-3 text-xl font-semibold text-gray-500 uppercase dark:text-gray-400">
                                    SMKN 2 KUPANG
                                </span>
                            </div>
                            <button type="button" data-drawer-dismiss="drawer-body-scrolling" aria-controls="drawer-body-scrolling" class="p-3 flex items-center text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-xl text-sm dark:hover:bg-gray-600 dark:hover:text-white">
                                <i class="bi bi-x-lg fa-xl"></i>
                            </button>
                        </div>

                        <!-- drawer-component-card -->
                        <div>
                            <ul>
                                <li>
                                    <a href="#" class="flex items-center gap-5 py-5 pr-5 pl-10 text-base font-normal text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <i class="bi bi-grid-1x2 fa-lg"></i>
                                        <span class="text-base font-medium">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.pengumuman') }}" class="flex items-center gap-5 py-5 pr-5 pl-10 text-base font-normal text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <i class="bi bi-megaphone fa-lg"></i>
                                        <span class="text-base font-medium">Pengumuman</span>
                                    </a>
                                </li>
                                <li>
                                    <button type="button" class="group w-full flex items-center justify-between gap-5 py-5 pr-5 pl-10 text-base font-normal text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700" aria-controls="dropdown-news" data-collapse-toggle="dropdown-news">
                                        <div class="flex gap-5 items-center">
                                            <i class="bi bi-newspaper fa-lg"></i>
                                            <span class="text-base font-medium" sidebar-toggle-item>Berita</span>
                                        </div>
                                        <i class="bi bi-chevron-down fa-lg"></i>
                                    </button>
                                    <ul id="dropdown-news" class="hidden">
                                        <li>
                                            <a href="{{ route('admin.berita.view') }}" class="flex items-center gap-5 py-5 pr-5 pl-20 text-base font-normal text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                                <span class="text-base font-medium">Daftar Berita</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.komentar-berita') }}" class="flex items-center gap-5 py-5 pr-5 pl-20 text-base font-normal text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                                <span class="text-base font-medium">Komentar</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.kategori-berita') }}" class="flex items-center gap-5 py-5 pr-5 pl-20 text-base font-normal text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                                <span class="text-base font-medium">Kategori Berita</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('admin.agenda') }}" class="flex items-center gap-5 py-5 pr-5 pl-10 text-base font-normal text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <i class="bi bi-app-indicator fa-lg"></i>
                                        <span class="text-base font-medium">Agenda Sekolah</span>
                                    </a>
                                </li>
                                <li>
                                    <button type="button" class="group w-full flex items-center justify-between gap-5 py-5 pr-5 pl-10 text-base font-normal text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700" aria-controls="dropdown-gallery" data-collapse-toggle="dropdown-gallery">
                                        <div class="flex gap-5 items-center">
                                            <i class="bi bi-image fa-lg"></i>
                                            <span class="text-base font-medium" sidebar-toggle-item>Galeri</span>
                                        </div>
                                        <i class="bi bi-chevron-down fa-lg"></i>
                                    </button>
                                    <ul id="dropdown-gallery" class="hidden">
                                        <li>
                                            <a href="{{ route('admin.album-galeri') }}" class="flex items-center gap-5 py-5 pr-5 pl-20 text-base font-normal text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                                <span class="text-base font-medium">Album Sekolah</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.komentar-galeri') }}" class="flex items-center gap-5 py-5 pr-5 pl-20 text-base font-normal text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                                <span class="text-base font-medium">Komentar</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('admin.modul') }}" class="flex items-center gap-5 py-5 pr-5 pl-10 text-base font-normal text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <i class="bi bi-journals fa-lg"></i>
                                        <span class="text-base font-medium">Modul</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.event') }}" class="flex items-center gap-5 py-5 pr-5 pl-10 text-base font-normal text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <i class="bi bi-calendar-check fa-lg"></i>
                                        <span class="text-base font-medium">Event</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.prestasi') }}" class="flex items-center gap-5 py-5 pr-5 pl-10 text-base font-normal text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <i class="bi bi-trophy fa-lg"></i>
                                        <span class="text-base font-medium">Prestasi</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- responsive-switch -->
                    <ul class="p-5 flex justify-end">
                        <li class="relative flex flex-col items-center justify-center">
                            <div class="peer">
                                <input id="mode" type="checkbox" class="hidden transition"/>
                                <label for="mode">
                                    <div class="w-16 p-1 flex items-center bg-gray-800 dark:bg-white rounded-full cursor-pointer">
                                        <div class="toggle h-7 w-7 relative flex items-center justify-center bg-sky-500 rounded-full transition">
                                            <i class="bi bi-brightness-high block dark:hidden dark:text-gray-800 transition"></i>
                                            <i class="bi bi-moon-fill hidden dark:block dark:text-gray-800 transition"></i>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- TITLE -->
            <div class="text-3xl font-semibold text-sky-500">
                Title belum dinamis
            </div>
        </div>

            <!-- PROFILE -->
            <div class="flex-shrink-0">                
                <button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation" class="flex items-center gap-3 text-black dark:text-white bg-white rounded-3xl shadow-xl focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium text-sm px-4 py-3 text-center dark:bg-gray-800 dark:focus:ring-sky-800 group hover:translate-y-1 hover:shadow-lg transition-all" type="button">
                    <div class="h-8 w-8 rounded-full overflow-hidden flex-shrink-0">
                        <img src="https://picsum.photos/50" alt="profile" class="h-full w-full object-cover">
                    </div>
                    <div>
                        <span>Hello, Belum dinamis!</span>
                        <i class="bi bi-chevron-down ml-1"></i>
                    </div>
                </button>

                <!-- profile-menu -->
                <div id="dropdownInformation" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 10.4px, 0px);">
                    <div class="py-3 px-4 text-sm text-gray-900 dark:text-white">
                        <div>Belum Dinamis</div>
                        <div class="font-medium truncate">inibelumdinamis@gmail.com</div>
                    </div>
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformationButton">
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main class="py-4">
        @yield('content')
    </main>

    <script>

        // DARK MODE
        const checkbox = document.querySelector('#mode');
        const html = document.querySelector('html');

        checkbox.addEventListener('click', function() {
            checkbox.checked ? html.classList.add('dark') : html.classList.remove('dark');
        });
    </script>
    <script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/jquery/jquery.min.js"></script>
    <script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/jquery/jquery.min.js"></script>
    <script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/dist/js/adminlte.js"></script>
    @stack('js')
</body>
</html>