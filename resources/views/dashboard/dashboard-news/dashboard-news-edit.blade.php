<div class="container mx-auto mt-10 mb-20">
    <div class="flex flex-col-reverse lg:flex-row items-start justify-between gap-10">

        <!-- FORM -->
        <form class="flex-shrink-0 container m-auto p-10 flex flex-col gap-10 rounded-3xl shadow-2xl bg-white dark:bg-gray-800">

            <!-- form-input -->
            <div class="flex flex-col gap-6">
                <div>
                    <label for="news" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-300">Judul Berita</label>
                    <input type="text" id="news" class="p-4 w-full text-gray-900 bg-gray-200 rounded-xl border-none sm:text-md focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-400 dark:focus:border-sky-400">
                </div>
                <div>
                    <label for="naration" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-300">Narasi berita</label>
                    <textarea id="naration" class="p-4 w-full text-gray-900 bg-gray-200 rounded-xl border-none sm:text-md focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-400 dark:focus:border-sky-400"></textarea>
                </div>
                <div>
                    <label for="keyword" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-300">Kata Kunci Tagging</label>
                    <input type="text" id="keyword" class="p-4 w-full text-gray-900 bg-gray-200 rounded-xl border-none sm:text-md focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-400 dark:focus:border-sky-400">
                </div>
                <div>
                    <label for="category" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-300">Kategori</label>
                    <select id="category" class="p-4 w-full text-gray-900 bg-gray-200 rounded-xl border-none sm:text-md focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-400 dark:focus:border-sky-400">
                        <option>Pendidikan</option>
                        <option>Kesehatan</option>
                    </select>
                </div>
                <div>
                    <label for="author" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-300">Nama Penulis</label>
                    <input type="text" id="author" class="p-4 w-full text-gray-900 bg-gray-200 rounded-xl border-none sm:text-md focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-400 dark:focus:border-sky-400">
                </div>
                
                <!-- form-image -->
                <div class="flex flex-wrap gap-6">
                    <div class="flex-shrink-0 relative h-36 w-36 rounded-2xl overflow-hidden">
                        <img src="https://picsum.photos/250" alt="" class="h-full w-full">
                        <button class="z-10 p-3 absolute top-0 right-0 flex flex-col items-center gap-2 group" type="button" data-modal-toggle="delete">
                            <i class="bi bi-trash fa-xl text-white block group-hover:hidden transition-all"></i>
                            <i class="bi bi-trash-fill fa-xl text-white hidden group-hover:block transition-all"></i>
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

                <!-- form-file -->
                <div>
                    <label for="file" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-300">Pilih Gambar</label>
                    <label for="file" class="flex flex-col items-center justify-center w-full h-48 rounded-xl cursor-pointer bg-gray-200 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-300 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <i class="bi bi-cloud-upload fa-2xl text-gray-500"></i>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF</p>
                        </div>
                        <input id="file" type="file" class="hidden" />
                    </label>
                </div> 
                
                <!-- form-button -->
                <button class="py-4 w-full rounded-xl bg-sky-500 hover:bg-sky-600 font-semibold text-white">
                    Simpan Perubahan
                </button>
            </div>
        </form>
        <button class="w-full mt-0 lg:mt-10 flex flex-col items-center justify-center lg:justify-end gap-2 group" type="button" data-modal-toggle="delete">
            <i class="bi bi-trash fa-xl text-gray-500 block group-hover:hidden transition-all"></i>
            <i class="bi bi-trash-fill fa-xl text-gray-500 hidden group-hover:block transition-all"></i>
            <span>Hapus Item</span>
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