<div class="container mx-auto mt-10 mb-20">

    <!-- FORM -->
    <div class="mt-20">
        <form class="container m-auto p-10 flex flex-col gap-10 rounded-3xl shadow-2xl bg-white dark:bg-gray-800">

            <!-- form-input -->
            <div class="flex flex-col gap-6">
                <div>
                    <label for="modul" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-300">Judul Modul</label>
                    <input type="text" id="modul" class="p-4 w-full text-gray-900 bg-gray-200 rounded-xl border-none sm:text-md focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-400 dark:focus:border-sky-400">
                </div>
                <div>
                    <label for="author" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-300">Penulis</label>
                    <input type="text" id="author" class="p-4 w-full text-gray-900 bg-gray-200 rounded-xl border-none sm:text-md focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-400 dark:focus:border-sky-400">
                </div>
                <div>
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-300">Deskripsi Singkat</label>
                    <textarea type="text" id="description" class="p-4 w-full text-gray-900 bg-gray-200 rounded-xl border-none sm:text-md focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-400 dark:focus:border-sky-400"></textarea>
                </div>
                <div>
                    <label for="keyword" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-300">Kata Kunci Tagging</label>
                    <input type="text" id="keyword" class="p-4 w-full text-gray-900 bg-gray-200 rounded-xl border-none sm:text-md focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-400 dark:focus:border-sky-400">
                </div>
                <div>
                    <label for="file" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-300">File Terkait</label>
                    <input required type="file" id="file" class="relative file:absolute file:h-full file:top-0 file:rounded-r-full file:-left-0 pl-32 p-4 w-full text-gray-900 bg-gray-200 rounded-xl border-none sm:text-md focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-400 dark:focus:border-sky-400 peer valid:focus:ring-green-500 invalid:focus:ring-red-500">
                </div>
                
                <!-- form-button -->
                <button class="py-4 w-full rounded-xl bg-sky-500 hover:bg-sky-600 font-semibold text-white">
                    Upload Modul
                </button>
            </div>
        </form>
    </div>
</div>