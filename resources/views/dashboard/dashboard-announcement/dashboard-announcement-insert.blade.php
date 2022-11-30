<div class="container mx-auto mt-10 mb-20">

    <!-- FORM -->
    <div class="mt-20">
        <form class="container m-auto p-10 flex flex-col gap-10 rounded-3xl shadow-2xl bg-white dark:bg-gray-800">

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
                    Posting
                </button>
            </div>
        </form>
    </div>
</div>