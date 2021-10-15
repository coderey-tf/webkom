<aside class="relative bg-gray-700 h-screen w-80 hidden md:block shadow-xl">
    <div class="p-2 border-b border-gray-500">
        <a href="{{ route("admin.index") }}"
            class="h-14 py-2 flex items-center gap-3">
            <img src="{{ asset("UPN.png") }}" alt="Logo" class="h-full" />
            <div class="text-white font-bold pt-2">
                <p class="leading-none">MKU</p>
                <span class="leading-none text-xs">UPN "Veteran" Jawa
                    Timur</span>
            </div>
        </a>
    </div>
    <nav class="text-white text-sm font-semibold pt-3">
        <a href="{{ route("admin.post.index") }}"
            class="flex items-center py-4 pl-4 hover:bg-gray-300 hover:text-gray-800 {{ Request::routeIs("admin.post*") ? "bg-white text-gray-800" : "text-white" }}">
            <i class="fas fa-newspaper mr-3"></i>
            Berita & Pengumuman
        </a>
        <a href="{{ route("admin.struktur.index") }}"
            class="flex items-center py-4 pl-4 hover:bg-gray-300 hover:text-gray-800 {{ Request::routeIs("admin.struktur*") ? "bg-white text-gray-800" : "text-white" }}">
            <i class="fas fa-sitemap mr-3"></i>
            Struktur Organisasi
        </a>
        <a href="{{ route("admin.dosen.index") }}"
            class="flex items-center py-4 pl-4 hover:bg-gray-300 hover:text-gray-800 {{ Request::routeIs("admin.dosen*") ? "bg-white text-gray-800" : "text-white" }}">
            <i class="fas fa-user-tie mr-3"></i>
            Data Dosen
        </a>
        <a href="{{ route("admin.matakuliah.index") }}"
            class="flex items-center py-4 pl-4 hover:bg-gray-300 hover:text-gray-800 {{ Request::routeIs("admin.matakuliah*") ? "bg-white text-gray-800" : "text-white" }}">
            <i class="fas fa-book mr-3"></i>
            Data Matakuliah
        </a>
    </nav>
</aside>