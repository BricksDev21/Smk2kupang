<div class="container mx-auto mt-10 mb-20">

    <!-- NAVIGATION -->
    <nav class="mb-8 grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6 items-center justify-between">

        <!-- navigation-add-news -->
        <button type="button" class="w-full col-span-2 md:col-span-4 lg:col-span-1 flex items-center gap-3 bg-sky-500 p-6 rounded-2xl shadow-xl hover:translate-y-1 hover:shadow-lg transition-all">
            <i class="bi bi-plus-circle fa-lg text-white"></i>
            <span class="text-sm font-medium text-white">Tambah Pekerjaan Baru</span>
        </button>

        <span class="text-center md:text-right text-sm text-gray-500">Urut Berdasarkan</span>

        <!-- navigation-dropdown -->
        <form>
            <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <button id="dropdownDate" data-dropdown-toggle="dateDropdown" type="button" class="w-full p-4 pl-6 flex items-start bg-white dark:bg-gray-800 rounded-full shadow-lg group">
                    <span class="text-sm text-gray-500">A - Z</span>
                    <div class="absolute top-1/2 right-0 -mt-3 mr-5 h-6 w-6 text-white bg-sky-500 group-hover:bg-sky-600 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-full text-sm text-center inline-flex items-center justify-center dark:bg-sky-600 dark:group-hover:bg-sky-700 dark:focus:ring-sky-800">
                        <i class="bi bi-chevron-down"></i>
                    </div>
                </button>
                <div id="dateDropdown" class="hidden w-full z-10 bg-white rounded-2xl divide-y overflow-hidden shadow-xl divide-gray-100 dark:bg-gray-800">
                    <ul class="p-0 text-gray-900 text-base dark:text-gray-200 z-10" aria-labelledby="dropdownDate">
                        <li>
                            <a href="#" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">A - Z</a>
                        </li>
                        <li>
                            <a href="#" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">Z - A</a>
                        </li>
                        <li>
                            <a href="#" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">Terbaru</a>
                        </li>
                        <li>
                            <a href="#" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">Terlama</a>
                        </li>
                    </ul>
                </div>
            </div>
        </form>

        <span class="text-center md:text-right text-sm text-gray-500">Tampilkan</span>

        <form>
            <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <button id="dropdownNew" data-dropdown-toggle="newDropdown" type="button" class="w-full p-4 pl-6 flex items-start bg-white dark:bg-gray-800 rounded-full shadow-lg group">
                    <span class="text-sm text-gray-500">10</span>
                    <div class="absolute top-1/2 right-0 -mt-3 mr-5 h-6 w-6 text-white bg-sky-500 group-hover:bg-sky-600 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-full text-sm text-center inline-flex items-center justify-center dark:bg-sky-600 dark:group-hover:bg-sky-700 dark:focus:ring-sky-800">
                        <i class="bi bi-chevron-down"></i>
                    </div>
                </button>
                <div id="newDropdown" class="hidden w-full z-10 bg-white rounded-2xl divide-y overflow-hidden shadow-xl divide-gray-100 dark:bg-gray-800">
                    <ul class="p-0 text-gray-900 text-base dark:text-gray-200 z-10" aria-labelledby="dropdownNew">
                        <li>
                            <a href="#" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">10</a>
                        </li>
                        <li>
                            <a href="#" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">25</a>
                        </li>
                        <li>
                            <a href="#" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">50</a>
                        </li>
                        <li>
                            <a href="#" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">100</a>
                        </li>
                        <li>
                            <a href="#" class="block py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-800">200</a>
                        </li>
                    </ul>
                </div>
            </div>
        </form>
    </nav>

    <!-- POST -->
    <div class="grid grid-cols-1 gap-5">
        <div class="h-fit w-full p-8 flex justify-around gap-5 flex-col md:flex-row rounded-3xl shadow-2xl bg-white dark:bg-gray-800">
            <div class="flex justify-center items-center">
                <div class="h-24 w-24 lg:h-32 lg:w-32 rounded-2xl overflow-hidden">
                    <img src="https://picsum.photos/50" alt="profile" class="h-full w-full object-cover">
                </div>
            </div>
            <div class="flex flex-col items-center md:items-start gap-3 justify-between">
                <div class="flex flex-col items-center md:items-start">
                    <h1 class="text-xl lg:text-4xl font-semibold text-black dark:text-white">Fullstack Developer</h1>
                    <h2 class="text-sm lg:text-base font-normal text-gray-500">Tokopedia</h2>
                </div>
                <time class="text-xs lg:text-base font-normal text-gray-500 lowercase">5 hari yang lalu</time>
            </div>
            <div class="flex flex-col justify-center gap-1 lg:gap-3 ml-12 md:ml-0 dark:text-white text-xs lg:text-base">
                <div class="flex items-center gap-2">
                    <i class="bi bi-geo-alt"></i>
                    <span class="font-normal uppercase">JAKARTA, DKI JAKARTA</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="bi bi-person"></i>
                    <span class="font-normal lowercase">20 orang</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="bi bi-eye"></i>
                    <span class="font-normal lowercase">250 kali</span>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center gap-3">
                <button class="flex justify-center gap-3 w-52 h-fit py-5 rounded-xl bg-sky-500 text-white hover:bg-sky-600">
                    <i class="bi bi-pen fa-lg"></i>
                    <span class="text-sm font-semibold uppercase">EDIT DETAIL</span>
                </button>
                <button class="flex justify-center gap-3 w-52 h-fit py-3 rounded-xl bg-gray-500 text-white hover:bg-gray-600">
                    <i class="bi bi-card-list fa-lg"></i>
                    <span class="text-sm font-semibold uppercase">DAFTAR PELAMAR</span>
                </button>
            </div>
        </div>
    </div>
</div>