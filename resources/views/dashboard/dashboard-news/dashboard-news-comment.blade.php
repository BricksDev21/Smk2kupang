<div class="container mx-auto mt-10 mb-20">

    <!-- NAVIGATION -->
    <nav class="mb-8 grid grid-cols-1 md:grid-cols-3 xl:grid-cols-5 gap-6 items-center justify-between">

        <!-- navigation-filter -->
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
    <article class="flex flex-col items-center gap-6">
        <div class="h-fit w-full p-6 flex flex-col md:flex-row justify-between gap-4 md:gap-20 bg-white dark:bg-gray-800 rounded-3xl shadow-2xl">
            <div class="flex flex-col gap-2 justify-between">
                <div class="text-xs text-gray-500 flex items-center gap-2">
                    <span>Komentar</span>
                    <div class="h-1 w-1 rounded-full bg-gray-500"></div>
                    <time>16 November 2022 | 12:30:40</time>
                </div>
                <div class="flex flex-col gap-2">
                    <p class="text-lg font-bold dark:text-white">
                        Bagus Sekali!, Semoga terus berkembang!
                    </p>
                    <h1 class="text-sm font-medium text-gray-600 dark:text-gray-400">
                        Penerimaan Siswa Baru TA. 2022/2023
                    </h1>
                </div>
            </div>
            <div class="flex flex-col items-center justify-between gap-10">
                <div>
                    <select id="category" class="text-sm px-4 py-2 w-full bg-sky-500 rounded-xl border-none sm:text-md focus:ring-sky-500 focus:border-sky-500 text-white dark:focus:ring-sky-400 dark:focus:border-sky-400">
                        <option>Tampilkan Komentar</option>
                        <option>Sembunyikan Komentar</option>
                    </select>
                </div>
                <div class="w-full flex items-center flex-row gap-6 justify-between md:justify-end">
                    <button class="flex flex-col items-center gap-2 group" type="button" data-modal-toggle="comment">
                        <i class="bi bi-chat-left fa-xl text-gray-500 block group-hover:hidden transition-all"></i>
                        <i class="bi bi-chat-left-fill fa-xl text-gray-500 hidden group-hover:block transition-all"></i>
                    </button>
                    <div id="comment" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 w-full md:inset-0 h-modal md:h-full">
                        <div class="relative w-full max-w-md h-full md:h-auto">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-900 dark:hover:text-white" data-modal-toggle="comment">
                                    <i class="bi bi-x-lg fa-xl"></i>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="py-6 px-6 lg:px-8">
                                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Balas Komentar Berita</h3>
                                    <form class="space-y-6" action="#">
                                        <div>
                                            <label for="reply" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-300">Balas Komentar</label>
                                            <textarea id="reply" class="p-4 w-full text-gray-900 bg-gray-200 rounded-xl border-none sm:text-md focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-400 dark:focus:border-sky-400"></textarea>
                                        </div>
                                        <button type="submit" class="w-full text-white  focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-sky-500 hover:bg-sky-600 dark:focus:ring-sky-800">
                                            Kirim Balasan Komentar
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> 
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
        </div>
    </article>
</div>