<!DOCTYPE html>
<html>
<head>
    <title>{{ $title ?? '' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="https://picsum.photos/50">
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
<<<<<<< HEAD
    <br><br>
    <a href="{{ route('admin.galeri') }}" class="btn btn-md btn-success mb-3">Galeri</a><br>
    <a href="{{ route('admin.guru') }}" class="btn btn-md btn-success mb-3">Tenaga Pendidik</a><br>
    <a href="{{ route('admin.status') }}" class="btn btn-md btn-success mb-3">Status Guru</a><br>
    <a href="{{ route('admin.kategori') }}" class="btn btn-md btn-success mb-3">Kategori Berita</a><br>
    <a href="{{ route('admin.tag') }}" class="btn btn-md btn-success mb-3">Tag</a><br>
    <a href="{{ route('admin.berita') }}" class="btn btn-md btn-success mb-3">Berita</a><br>
    <a href="{{ route('admin.pengumuman') }}" class="btn btn-md btn-success mb-3">Pengumuman</a><br>
    <a href="{{ route('admin.modul') }}" class="btn btn-md btn-success mb-3">Modul</a><br>
=======
    
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
                        <span id="drawer-body-scrolling-label" class="p-3 text-xl font-semibold text-gray-500 uppercase dark:text-gray-400">
                            Bursa Kerja SMK
                        </span>
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
                                        <a href="{{ route('admin.daftar-berita') }}" class="flex items-center gap-5 py-5 pr-5 pl-20 text-base font-normal text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
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
                                <a href="{{ route('admin.galeri') }}" class="flex items-center gap-5 py-5 pr-5 pl-10 text-base font-normal text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <i class="bi bi-image fa-lg"></i>
                                    <span class="text-base font-medium">Galeri</span>
                                </a>
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
    <!-- END OF DRAWER -->

>>>>>>> 7661521e9eaddce1c1f0dab61a6e1c869d092488
    <main class="py-4">
        @yield('content')
    </main>
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/jquery/jquery.min.js"></script>
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/dist/js/adminlte.js"></script>
@stack('js')
</body>
</html>