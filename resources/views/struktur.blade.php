@extends("layouts.main")

@section('meta')
    @include('partials.site-meta', [
        'title' => $title,
        'image' => asset('struktur-hero.jpg'),
        'keywords' => 'mku, struktur organisasi, organisasi, upn, jatim',
        'description' => "Struktur Organisasi Matakuliah Umum Universitas Pembangunan
                                                                                                  Nasional Veteran Jawa Timur",
    ])
@endsection

@section('content')
    @include('partials.hero-section', [
        'text' => 'Struktur Organisasi',
        'image' => asset('struktur-hero.jpg'),
    ])

    <main class="container mx-auto min-h-screen py-12 px-4 md:px-10">
        <div class="mb-8">
            @include('partials.section-title', [
                'text' => 'Pengurus HMI Komisariat Jenderal Sudirman UPN 2021-2022',
            ])
        </div>

        {{-- @include('partials.foto-dosen', [
            'dosen' => $koordinator->dosen,
            'class' => 'w-11/12 md:w-[30%] mx-auto',
            'keterangan' => $koordinator->jabatan,
        ]) --}}
        @foreach ($listStruktur as $struktur)
            @include('partials.section-title', [
                'text' => $struktur->nama,
            ])
            <div class="flex items-stretch flex-wrap gap-3 justify-center mt-5">

                @foreach ($struktur->listDosen as $dosen)
                    @include('partials.foto-dosen', [
                        'dosen' => $dosen,
                        'class' => 'w-11/12 md:w-[24%]',
                        'keterangan' => $dosen->struktur->jabatan,
                    ])
                @endforeach
            </div>
        @endforeach

    </main>
@endsection
