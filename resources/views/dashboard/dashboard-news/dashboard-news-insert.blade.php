<div class="container mx-auto mt-10 mb-20">

    <!-- FORM -->
    <div class="mt-20">
        <form class="container m-auto p-10 flex flex-col gap-10 rounded-3xl shadow-2xl bg-white dark:bg-gray-800">

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
                    Posting
                </button>
            </div>
        </form>
    </div>
</div>