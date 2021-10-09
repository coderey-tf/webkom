@extends("layouts.main")

@section("content")

<div
  class="relative w-full min-h-[70vh] md:min-h-screen flex justify-center items-center bg-cover bg-bottom"
  style="background-image: url({{ asset("home-hero.jpg") }})">
  <div
    class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent bg-black/50 flex justify-center items-center flex-col">
    <h1 class="text-3xl lg:text-6xl font-bold text-white text-center mb-4">Mata
      Kuliah Umum</h1>
    <span class="text-3xl lg:text-6xl font-bold text-white text-center mb-8">UPN
      “Veteran” Jawa Timur</span>
    <a href="{{ route("matakuliah") }}"
      class="px-5 py-3 bg-white font-bold rounded border-2 border-white hover:bg-transparent hover:text-white transition-all">Daftar
      Matakuliah</a>
  </div>
</div>
<main class="container mx-auto min-h-screen py-12 px-4">
  <div
    class="w-full flex flex-col md:flex-row justify-between md:items-center mb-8">
    <div class="mb-2">
      <span class="block w-40 h-1.5 bg-gray-400 rounded-full mb-2"></span>
      <h2 class="text-gray-900 font-bold text-3xl">Berita & Pengumuman</h2>
    </div>
    <a href="{{ route("posts.index") }}"
      class="flex items-center text-gray-800 hover:text-gray-500">
      Semua Berita & Pengumuman <i class="fas fa-angle-double-right ml-3"></i>
    </a>
  </div>

  @foreach ($posts as $post)
  <div
    class="shadow-md flex flex-wrap w-full md:h-64 mb-10 rounded-md overflow-hidden">
    @if ($post->sampul)
    <div
      class="bg-cover bg-bottom border w-full md:w-2/5 h-44 md:h-full relative"
      style="background-image:url('{{ asset("storage/".$post->sampul) }}')">
    </div>
    @else
    <div
      class="bg-cover bg-bottom border w-full md:w-2/5 h-44 md:h-full relative"
      style="background-image:url('{{ asset("storage/sampul-post/sampul-default.jpg") }}')">
    </div>
    @endif

    <div class="bg-white w-full md:w-3/5 h-full md:border-t-8 border-gray-200">
      <div class="h-full mx-auto px-4 md:px-0 md:pt-10 md:-ml-20 relative">
        <div
          class="bg-white h-full p-6 -mt-24 md:mt-0 relative md:mb-0 flex flex-col items-center justify-between">
          <div class="w-full text-center md:text-left">
            <a href="{{ route("posts.show", $post) }}" class="block">
              <h3
                class="text-lg font-bold capitalize hover:text-blue-500 hover:underline">
                {{ $post->judul }}</h3>
            </a>
            <p class="mb-0 mt-1 text-blue-600 text-sm uppercase">
              <a href="#"
                class="hover:underline">{{ $post->kategori->nama }}</a> - <span
                class="text-gray-500 italic capitalize lining-nums">{{ $post->created_at->format('d M Y') }}</span>
            </p>
            <hr class="w-1/4 md:ml-0 mt-2 border">

            <a class="block w-full mt-4">
              <p
                class="text-md mt-3 text-justify md:text-left text-sm text-gray-700 hover:text-gray-500 cursor-pointer">
                {{ $post->excerpt }}
              </p>
            </a>

          </div>

          <div class="w-full mt-4 text-center md:text-left">
            <a class="text-blue-400 hover:text-blue-900 text-sm transition duration-150 ease-in-out group"
              href="{{ route("posts.show", $post) }}">Read more
              <svg
                class="group-hover:hidden inline-block ml-1 w-2 h-2 stroke-2 stroke-current"
                viewBox="0 0 10 10" fill="none" aria-hidden="true">
                <g fill-rule="evenodd">
                  <path d="M1 1l4 4-4 4"></path>
                </g>
              </svg>
              <svg
                class="hidden group-hover:inline-block ml-1 w-2 h-2 stroke-2 stroke-current"
                viewBox="0 0 10 10" fill="none" aria-hidden="true">
                <g fill-rule="evenodd">
                  <path d="M0 5h7"></path>
                  <path d="M4 1l4 4-4 4"></path>
                </g>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach

  <div class="mb-8 mt-12">
    <span class="block w-40 h-1.5 bg-gray-400 rounded-full mb-2"></span>
    <h2 class="text-gray-900 font-bold text-3xl">Lokasi</h2>
  </div>

  <div
    class="w-full h-[70vh] rounded-md overflow-hidden shadow-md p-2 bg-white">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d715.8875940313916!2d112.78788501578066!3d-7.333992187814385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMjAnMDMuMCJTIDExMsKwNDcnMTYuNCJF!5e0!3m2!1sen!2sid!4v1633376746985!5m2!1sen!2sid"
      width="100%" height="100%" style="border:0;" allowfullscreen=""
      loading="lazy"></iframe>
  </div>

</main>

@endsection