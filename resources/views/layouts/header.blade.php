<header class="fixed w-full z-10">
    <nav class="h-16 bg-white flex justify-between items-center shadow-lg">
        <a href="{{ route('home') }}" class="h-full hidden lg:flex justify-center">
            <div class="h-full bg-white py-2 pl-4 lg:pl-8 flex justify-center items-center gap-3">
                <img src="{{ asset('komjensud.png') }}" alt="Logo" class="h-full" />
                {{-- <div class="text-black font-bold pt-2">
                    <p class="text-2xl leading-none">MKU</p>
                    <p class="leading-none text-sm">UPN "Veteran" Jawa Timur</p>
                </div> --}}
            </div>
            {{-- <svg class="h-full" viewBox="0 0 155 129" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 0H37.9438L155 129H1V0Z" fill="#C4C4C4" />
                <path d="M0 0L117 129H0V0Z" fill="white" />
            </svg> --}}
        </a>

        <a href="{{ route('home') }}"
            class="h-full py-2 pl-4 lg:pl-8 lg:hidden flex justify-center items-center gap-3">
            <img src="{{ asset('komjensud.png') }}" alt="Logo" class="h-full" />
        </a>

        <ul class="hidden justify-between uppercase text-sm pr-12 w-1/2 lg:flex h-full items-center">
            <li>
                <a href="{{ route('home') }}" class="hover:text-green-700">Home</a>
            </li>
            <li>
                <a href="{{ route('about') }}" class="hover:text-green-700">About</a>
            </li>
            <li>
                <a href="{{ route('struktur') }}" class="hover:text-green-700">Kepengurusan</a>
            </li>
            <li>
                <a href="{{ route('post.index') }}" class="hover:text-green-700">Opini Kader</a>
            </li>
            <li class="relative group h-full flex justify-center items-center">
                <button class="hover:text-green-700 uppercase">
                    <span>Info</span>
                    <i class="fas fa-angle-down ml-1"></i>
                </button>
                <div
                    class="hidden group-hover:block -left-6 top-16 absolute w-52 bg-green-600/90 rounded-br-lg rounded-bl-lg shadow-lg py-4 z-30 text-white">
                    <a href="{{ route('gallery') }}" class="block px-4 py-4 hover:bg-green-700 hover:text-white">
                        Foto
                    </a>
                    <a href="{{ route('download') }}" class="block px-4 py-4 hover:bg-green-700 hover:text-white">
                        Dokumen Penting
                    </a>
                </div>
            </li>
            <li>
                <a href="{{ route('dosen.index') }}" class="hover:text-green-700">Kontak</a>
            </li>
            <li>
                <a href=""
                    class="bg-white rounded-full border-2 border-green-700 font-bold text-green-700 px-4 py-1 transition duration-300 ease-in-out hover:bg-green-700 mr-6 hover:text-white">
                    Join Us
                </a>

            </li>
        </ul>

        <button onclick="togleNavbar()" class="text-4xl pr-4 lg:hidden">
            <i class="fas fa-bars"></i>
        </button>
    </nav>
    <div class="mobile-menu bg-white py-2 hidden">
        <a href="{{ route('post.index') }}" class="flex items-center py-4 px-8 hover:bg-gray-400">
            <i class="fas fa-newspaper mr-3"></i> Berita & Pengumuman
        </a>
        <a href="{{ route('struktur') }}" class="flex items-center py-4 px-8 hover:bg-gray-400">
            <i class="fas fa-sitemap mr-3"></i> Struktur Organisasi
        </a>
        <a href="{{ route('dosen.index') }}" class="flex items-center py-4 px-8 hover:bg-gray-400">
            <i class="fas fa-user-tie mr-3"></i> Data Dosen
        </a>
        <a href="{{ route('matakuliah.index') }}" class="flex items-center py-4 px-8 hover:bg-gray-400">
            <i class="fas fa-book mr-3"></i> Matakuliah
        </a>
        <a href="{{ route('gallery') }}" class="flex items-center py-4 px-8 hover:bg-gray-400">
            <i class="fas fa-images mr-3"></i> Gallery Foto
        </a>
        <a href="{{ route('download') }}" class="flex items-center py-4 px-8 hover:bg-gray-400">
            <i class="fas fa-file-alt mr-3"></i> Download File
        </a>
    </div>
</header>
