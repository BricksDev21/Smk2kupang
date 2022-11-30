<div class="container mx-auto mt-10 mb-20">
    <div class="flex flex-col-reverse lg:flex-row items-start justify-between gap-10">

        <!-- FORM -->
        <form class="flex-shrink-0 container m-auto p-10 flex flex-col gap-10 rounded-3xl shadow-2xl bg-white dark:bg-gray-800">

            <!-- form-input -->
            <div class="flex flex-col gap-6">
                <div>
                    <label for="announcement" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-300">Judul Pengumuman</label>
                    <input type="text" id="announcement" class="p-4 w-full text-gray-900 bg-gray-200 rounded-xl border-none sm:text-md focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-400 dark:focus:border-sky-400">
                </div>
                <div>
                    <label for="content" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-300">Isi Pengumuman</label>
                    <textarea id="content" class="p-4 w-full text-gray-900 bg-gray-200 rounded-xl border-none sm:text-md focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-400 dark:focus:border-sky-400"></textarea>
                </div>
                <div>
                    <label for="file" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-300">File Terkait</label>
                    <input required type="file" id="file" class="relative file:absolute file:h-full file:top-0 file:rounded-r-full file:-left-0 pl-32 p-4 w-full text-gray-900 bg-gray-200 rounded-xl border-none sm:text-md focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-400 dark:focus:border-sky-400 peer valid:focus:ring-green-500 invalid:focus:ring-red-500">
                </div>

                <!-- form-important -->
                <fieldset>
                    <legend class="sr-only">Checkbox variants</legend>
                    <div class="flex items-center jus gap-4">
                        <input id="important" type="checkbox" value="" class="w-6 h-6 text-sky-600 bg-gray-100 rounded border-gray-300 focus:ring-sky-500 dark:focus:ring-sky-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" >
                        <label for="important" class="block text-gray-500 dark:text-gray-300 letter">
                            Jadikan pengumuman penting
                        </label>
                    </div>
                </fieldset>

                
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