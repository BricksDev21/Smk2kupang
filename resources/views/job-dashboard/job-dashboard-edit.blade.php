<div class="container mx-auto mt-10 mb-20">

<!-- FORM -->
<form class="container m-auto p-10 flex flex-col gap-10 rounded-3xl shadow-2xl bg-white dark:bg-gray-800">

    <!-- form-header -->
    <div class="flex flex-col md:flex-row items-center md:items-end justify-between">
        <div class="flex flex-col md:flex-row items-center md:items-end gap-10">
            <div class="h-44 w-44 rounded-2xl overflow-hidden flex-shrink-0">
                <img src="https://picsum.photos/300" alt="profile" class="h-full w-full object-cover">
            </div>
            <div>
                <label for="small-toggle" class="inline-flex relative items-center mb-5 cursor-pointer">
                    <input type="checkbox" value="" id="small-toggle" class="sr-only peer">
                    <div class="w-9 h-5 bg-gray-200 p rounded-full peer peer-checked:after:translate-x-full dark:bg-gray-700 after:dark:bg-gray-800 after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-sky-500"></div>
                    <span class="ml-3 text-sm font-medium text-sky-500">Status Ketersediaan</span>
                </label>
            </div>
        </div>
        <button class="px-5 py-3 uppercase rounded-xl bg-sky-500 text-white flex items-center gap-3 hover:bg-sky-600">
            <i class="bi bi-upload"></i>
            <span class="text-sm font-semibold">SIMPAN</span>
        </button>
    </div>

    <!-- form-input -->
    <div class="flex flex-col gap-6">
        <div>
            <label for="job" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-300">Nama Pekerjaan</label>
            <input type="text" id="job" class="p-4 w-full text-gray-900 bg-gray-200 rounded-xl border-none sm:text-md focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-400 dark:focus:border-sky-400" placeholder="UI/UX Designer">
        </div>
        <div>
            <label for="company" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-300">Perusahaan Penyedia</label>
            <input type="text" id="company" class="p-4 w-full text-gray-900 bg-gray-200 rounded-xl border-none sm:text-md focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-400 dark:focus:border-sky-400" placeholder="Tokopedia">
        </div>
        <div class="sm:col-span-2">
            <label for="location" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-300">Lokasi</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <i class="bi bi-geo-alt fa-xl text-gray-500"></i>
                </div>
                <input type="text" id="location" class="pl-12 py-4 pr-4 w-full text-gray-900 bg-gray-200 rounded-xl border-none sm:text-md focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-400 dark:focus:border-sky-400" placeholder="Jakarta">
            </div>
        </div>
        <div class="grid gap-3 sm:gap-6 grid-cols-2 sm:grid-cols-3 items-end">
            <div>
                <label for="people" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-300">Daya Tampung</label>
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <i class="bi bi-person fa-xl text-gray-500"></i>
                    </div>
                    <input type="number" id="people" class="pl-12 py-4 pr-4 w-full text-gray-900 bg-gray-200 rounded-xl border-none sm:text-md focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-400 dark:focus:border-sky-400">
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="period" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-300">Periode Kerja</label>
                <input type="text" id="period" class="p-4 w-full text-gray-900 bg-gray-200 rounded-xl border-none sm:text-md focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-400 dark:focus:border-sky-400" placeholder="Freelance">
            </div>
        </div>
        <div>
            <label for="description" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-300">Deskripsi Pekerjaan</label>
            <textarea id="description" class="p-4 w-full text-gray-900 bg-gray-200 rounded-xl border-none sm:text-md focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-400 dark:focus:border-sky-400" placeholder="Ini adalah deskripsi"></textarea>
        </div>
        <div>
            <label for="file" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-300">Dokumen Pendukung</label>
            <input required type="file" id="file" class="relative file:absolute file:h-full file:top-0 file:rounded-r-full file:-left-0 pl-32 p-4 w-full text-gray-900 bg-gray-200 rounded-xl border-none sm:text-md focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-400 dark:focus:border-sky-400 peer valid:focus:ring-green-500 invalid:focus:ring-red-500">
        </div>
    </div>
</form>
</div>