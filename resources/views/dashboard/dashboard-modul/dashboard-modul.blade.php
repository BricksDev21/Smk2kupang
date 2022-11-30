<div class="container mx-auto mt-10 mb-20">

    <!-- NAVIGATION -->
    <nav class="mb-8 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 items-center justify-between">

        <!-- navigation-add-news -->
        <button class="w-full col-span-1 md:col-span-3 lg:col-span-1 flex items-center gap-3 bg-sky-500 p-6 rounded-2xl shadow-xl hover:translate-y-1 hover:shadow-lg transition-all">
            <i class="bi bi-plus-circle fa-lg text-white"></i>
            <span class="text-sm font-medium text-white">Upload Modul</span>
        </button>
        <span class="text-center md:text-right text-sm text-gray-500">Urut Berdasarkan</span>

        <!-- navigation-dropdown -->
        <form>
            <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <button id="dropdownDate" data-dropdown-toggle="dateDropdown" type="button" class="w-full p-4 pl-6 flex items-start bg-white dark:bg-gray-800 rounded-full shadow-lg group">
                    <span class="text-sm text-gray-500">Modul Terbaru</span>
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
    <!-- TABLE -->
    <div class="overflow-x-auto relative shadow-2xl rounded-xl">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="font-bold text-gray-700 bg-gray-200 dark:bg-gray-600 dark:text-gray-200">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        No
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Judul Modul
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Tanggal
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Jurusan
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Penulis
                    </th>
                    <th scope="col" class="py-3 px-6 flex float-right mr-4">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        1
                    </th>
                    <td class="py-4 px-6">
                        Juara 1 Ngapusi Wong Tuwa
                    </td>
                    <td class="py-4 px-6">
                        Lorem Ipsum
                    </td>
                    <td class="py-4 px-6">
                        Akhirat
                    </td>
                    <td class="py-4 px-6">
                        Lorem
                    </td>
                    <td class="py-4 px-6 flex gap-6 items-center justify-end">
                        <button class="flex flex-col items-center gap-2 group" type="button" data-modal-toggle="approval">
                            <i class="bi bi-pen fa-xl text-gray-500 block group-hover:hidden transition-all"></i>
                            <i class="bi bi-pen-fill fa-xl text-gray-500 hidden group-hover:block transition-all"></i>
                        </button>
                        <div id="approval" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 w-full md:inset-0 h-modal md:h-full">
                            <div class="relative w-full max-w-md h-full md:h-auto">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-900 dark:hover:text-white" data-modal-toggle="approval">
                                        <i class="bi bi-x-lg fa-xl"></i>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="py-6 px-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit Prestasi</h3>
                                        <form class="space-y-6" action="#">
                                            <div class="flex flex-col gap-6">
                                                <div>
                                                    <label for="achievement" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-300">Nama Prestasi</label>
                                                    <input disabled type="text" id="achievement" class="disabled:text-gray-500 p-4 w-full text-gray-900 bg-gray-200 rounded-xl border-none sm:text-md focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-400 dark:focus:border-sky-400">
                                                </div>
                                                <div>
                                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-300">Nama Siswa</label>
                                                    <input disabled type="text" id="name" class="disabled:text-gray-500 p-4 w-full text-gray-900 bg-gray-200 rounded-xl border-none sm:text-md focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-400 dark:focus:border-sky-400">
                                                </div>
                                                <div>
                                                    <label for="level" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-300">Tingkat</label>
                                                    <input disabled type="text" id="level" class="disabled:text-gray-500 p-4 w-full text-gray-900 bg-gray-200 rounded-xl border-none sm:text-md focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-400 dark:focus:border-sky-400">
                                                </div>

                                                <!-- form-button -->
                                                <button class="py-4 w-full rounded-xl bg-sky-500 hover:bg-sky-600 font-semibold text-white">
                                                    Ubah Prestasi
                                                </button>
                                            </div>
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
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>