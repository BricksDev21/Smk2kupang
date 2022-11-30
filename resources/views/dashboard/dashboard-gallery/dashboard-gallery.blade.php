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

    <!-- LIST -->
    <article class="grid grid-cols-1 lg:grid-cols-2 items-center gap-6">
        <div class="h-96 bg-white dark:bg-gray-800 rounded-3xl shadow-2xl overflow-hidden group hover:translate-y-2 hover:shadow-xl transition-all">
            <div class="h-2/3 m-6 rounded-2xl relative overflow-hidden">
                <img src="https://picsum.photos/1080/1080" alt="major" class="h-full w-full object-cover group-hover:scale-110 transition-all">
            </div>
            <div class="px-6 flex justify-between items-end text-black dark:text-white">
                <button class="flex flex-col text-left justify-end font-medium" type="button" data-modal-toggle="defaultModal">
                    <div class="flex gap-2 items-center">
                        <div class="h-3 w-3 bg-red-500 rounded-full shadow-xl dark:bg-red-400"></div>
                        <span class="font-medium">
                            <em>22 September 2022</em>
                        </span>
                    </div>
                    <span class="text-2xl font-semibold">Upacara Hari Senin</span>
                </button>
            </div>
        </div>
        <div class="h-96 bg-white dark:bg-gray-800 rounded-3xl shadow-2xl overflow-hidden group hover:translate-y-2 hover:shadow-xl transition-all">
            <div class="h-2/3 m-6 rounded-2xl relative overflow-hidden">
                <img src="https://picsum.photos/1080/1080" alt="major" class="h-full w-full object-cover group-hover:scale-110 transition-all">
            </div>
            <div class="px-6 flex justify-between items-end text-black dark:text-white">
                <button class="flex flex-col text-left justify-end font-medium" type="button" data-modal-toggle="defaultModal">
                    <div class="flex gap-2 items-center">
                        <div class="h-3 w-3 bg-red-500 rounded-full shadow-xl dark:bg-red-400"></div>
                        <span class="font-medium">
                            <em>22 September 2022</em>
                        </span>
                    </div>
                    <span class="text-2xl font-semibold">Upacara Hari Senin</span>
                </button>
            </div>
        </div>
        <div class="h-96 bg-white dark:bg-gray-800 rounded-3xl shadow-2xl overflow-hidden group hover:translate-y-2 hover:shadow-xl transition-all">
            <div class="h-2/3 m-6 rounded-2xl relative overflow-hidden">
                <img src="https://picsum.photos/1080/1080" alt="major" class="h-full w-full object-cover group-hover:scale-110 transition-all">
            </div>
            <div class="px-6 flex justify-between items-end text-black dark:text-white">
                <button class="flex flex-col text-left justify-end font-medium" type="button" data-modal-toggle="defaultModal">
                    <div class="flex gap-2 items-center">
                        <div class="h-3 w-3 bg-red-500 rounded-full shadow-xl dark:bg-red-400"></div>
                        <span class="font-medium">
                            <em>22 September 2022</em>
                        </span>
                    </div>
                    <span class="text-2xl font-semibold">Upacara Hari Senin</span>
                </button>
            </div>
        </div>
        <div class="h-96 bg-white dark:bg-gray-800 rounded-3xl shadow-2xl overflow-hidden group hover:translate-y-2 hover:shadow-xl transition-all">
            <div class="h-2/3 m-6 rounded-2xl relative overflow-hidden">
                <img src="https://picsum.photos/1080/1080" alt="major" class="h-full w-full object-cover group-hover:scale-110 transition-all">
            </div>
            <div class="px-6 flex justify-between items-end text-black dark:text-white">
                <button class="flex flex-col text-left justify-end font-medium" type="button" data-modal-toggle="defaultModal">
                    <div class="flex gap-2 items-center">
                        <div class="h-3 w-3 bg-red-500 rounded-full shadow-xl dark:bg-red-400"></div>
                        <span class="font-medium">
                            <em>22 September 2022</em>
                        </span>
                    </div>
                    <span class="text-2xl font-semibold">Upacara Hari Senin</span>
                </button>
            </div>
        </div>
    </article>

    <!-- INDICATOR -->
    <div class="container mx-auto w-full flex flex-col md:flex-row mt-20 gap-5 items-center justify-end">
        <span class="text-sm font-light text-gray-500">menampilkan 9 dari 25 gambar</span>
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