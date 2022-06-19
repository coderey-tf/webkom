<footer class="w-full bg-bgfooter">
    <div class="border-b border-gray-400">
        <div class="container mx-auto flex flex-col lg:flex-row justify-between gap-8 py-8 px-4 md:px-10">
            <div class="px-3 flex items-center">
                <div class="h-20 py-2 flex items-center gap-3">
                    <img src="{{ asset('preload.png') }}" alt="Logo" class="h-32" />
                    <div class="text-white font-bold pt-1">
                        <p class="text-lg leading-none tracking-wider">Himpunan Mahasiswa islam</p>
                        <p class="leading-none text-sm py-2 font-thin tracking-wider">Cabang Surabaya</p>
                        <p class="leading-none text-sm font-thin tracking-wider">Komisariat Jenderal Sudirman UPN</p>
                        <span class="block w-full h-1 bg-green-700 rounded-full mt-3 "></span>
                    </div>

                </div>
                {{-- <address class="text-white-50 mb-2 text-center lg:text-left">
                    <p>Jl. Raya Rungkut Madya</p>
                    <p>Gunung Anyar, Surabaya</p>
                </address>
                <div class="flex items-center justify-center lg:justify-start gap-3">
                    <a class="block h-10" href="https://instagram.com" target="_blank">
                        <img src="{{ asset('ig.svg') }}" alt="instagram" class="h-full">
                    </a>
                    <a class="block h-10" href="https://facebook.com" target="_blank">
                        <img src="{{ asset('fb.svg') }}" alt="facebook" class="h-full">
                    </a>
                </div> --}}
            </div>

            <div class="">
                {{-- <h3 class="text-2xl font-bold mb-2 text-white">Navigasi</h3> --}}
                <div class="">
                    @include('partials.section-titlefooter', ['text' => 'Media Sosial'])
                </div>
                <div class="text-gray-600 lg:text-left flex flex-col">
                    <a href="https://instagram.com/hmiupnvjatim" target="_blank" class="flex items-center">
                        <span class="text-lg text-green-700 block w-5 text-center"><i
                                class="fab fa-instagram"></i></span>
                        <div class="w-2/3 ml-1">
                            <p>hmiupnvjt</p>
                        </div>
                    </a>

                    <div class="flex items-center">
                        <a href="https://id-id.facebook.com/pages/category/Personal-Blog/HMI-Kom-Jenderal-Sudirman-UPN-179010296061220/"
                            target="_blank" class="flex items-center">
                            <span class="text-lg text-green-700 block w-5 text-center"><i
                                    class="fab fa-facebook-square"></i></span>
                            <div class=" ml-1">
                                <p>HMI Kom. Jenderal Sudirman UPN</p>
                            </div>
                        </a>
                    </div>

                    <div class="flex items-center">
                        <a href="https://www.youtube.com/channel/UCEpWYuE1otTxdk8OsYSXJlw/videos" target="_blank"
                            class="flex items-center">
                            <span class="text-lg text-green-700 block w-5 text-center"><i
                                    class="fab fa-youtube"></i></span>
                            <div class="ml-1">
                                <p>HMI Jenderal Sudirman UPN</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="">
                <div class="">
                    @include('partials.section-titlefooter', ['text' => 'Kontak'])
                </div>
                <ul class="text-gray-600 lg:text-left flex flex-col gap-1">
                    <li><a href="{{ route('post.index', ['kategori' => 'berita']) }}"
                            class="hover:text-gray-800">Berita</a></li>
                    <li><a href="{{ route('post.index', ['kategori' => 'pengumuman']) }}"
                            class="hover:text-gray-800">Pengumuman</a></li>
                    <li><a href="{{ route('gallery') }}" class="hover:text-gray-800">Gallery Foto</a></li>
                    <li><a href="{{ route('admin.index') }}" class="hover:text-gray-800">Admin</a></li>
                </ul>
            </div>

            <div class="px-4">
                <div class="">
                    @include('partials.section-titlefooter', ['text' => 'Navigasi'])
                </div>
                <ul class="text-gray-600 lg:text-left flex flex-col gap-1">
                    <li><a href="{{ route('post.index', ['kategori' => 'berita']) }}"
                            class="hover:text-gray-800">Berita</a></li>
                    <li><a href="{{ route('post.index', ['kategori' => 'pengumuman']) }}"
                            class="hover:text-gray-800">Pengumuman</a></li>
                    <li><a href="{{ route('gallery') }}" class="hover:text-gray-800">Gallery Foto</a></li>
                    <li><a href="{{ route('admin.index') }}" class="hover:text-gray-800">Admin</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center py-6 text-gray-600">&copy; HMI Jenderal Sudirman UPN</div>
</footer>
