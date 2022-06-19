@extends("layouts.main")

@section('meta')
    @include('partials.site-meta', [
        'title' => $title,
        'image' => asset('posts-hero.jpg'),
        'keywords' => 'mku, dosen, upn, jatim',
        'description' => "Download File Matakuliah Umum Universitas Pembangunan Nasional
                                                                                                                                                                                                                                                                                                                                              Veteran Jawa Timur",
    ])
@endsection

@section('content')
    @include('partials.hero-section', [
        'text' => 'Tentang Komjensud',
        'image' => asset('posts-hero.jpg'),
    ])

    <main class="container mx-auto min-h-screen py-12 px-4 md:px-10">
        <div class="mb-10">
            @include('partials.section-title', ['text' => 'Tentang Komjensud'])
        </div>
        <div class="flex justify-between gap-8">
            <div class="w-1/2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus animi voluptate
                iure quis quia
                inventore impedit eius laborum. Numquam expedita, ad neque dolorem fugit aliquid vitae excepturi porro
                eveniet ab similique deleniti nostrum, nihil natus, quae delectus saepe est labore quidem! Nulla repellat
                eos quis fugit dolore veritatis quae dolorum ipsa consequatur a assumenda asperiores suscipit, architecto
                voluptas, alias sequi recusandae tempore doloribus? Ex omnis ad enim sequi natus officiis consectetur,
                eveniet quis, accusamus, placeat est odit qui dolor laudantium blanditiis iure nulla architecto dolores
                alias ratione aliquam inventore reprehenderit consequatur! Tempore natus qui porro ullam neque! Sint eaque
                ut recusandae, magni ipsa at deleniti qui doloremque? Quos porro aperiam, fugiat modi nam ab architecto
                facere libero autem officia necessitatibus delectus eos accusamus dolorem culpa deleniti quibusdam ea rerum
                iste inventore exercitationem earum! Sunt vel impedit ab est! Debitis vero in alias a accusantium ratione
                ipsum voluptas quaerat eaque beatae laboriosam officia optio autem, nulla sit natus nesciunt quia doloribus.
                Molestias tempore voluptatibus rem, eum reprehenderit, aspernatur amet, aliquid explicabo fugiat doloremque
                sapiente a cumque voluptatem? Maxime, aliquid repellat iste doloribus dolores molestiae. Molestias eligendi
                recusandae minus, minima consectetur obcaecati eveniet rerum, ducimus itaque totam, harum dolorum sequi!
                Voluptatum distinctio dolore recusandae libero totam incidunt necessitatibus dolorem voluptatibus, aut
                perspiciatis doloremque tenetur debitis aliquam cum, omnis autem culpa velit aliquid beatae! At saepe ea,
                eum ad illum sint quisquam dolorum eius ipsum iure commodi consequuntur id unde maiores soluta, voluptatem
                enim assumenda odio ducimus sit iusto, illo aut? Molestiae quibusdam sequi magnam optio. Omnis hic quis
                culpa maiores sint officiis ab sapiente sunt reprehenderit modi exercitationem expedita sequi eius
                perferendis ut necessitatibus rem dolorem cupiditate voluptas porro et, qui mollitia possimus. Nam aperiam
                perferendis iste amet totam ipsam magnam, reiciendis excepturi eius natus accusantium porro! Alias ducimus,
            </div>
            <div class="w-1/2 flex flex-col justify-start items-center ">
                <img src="{{ asset('hmi.png') }}" alt="" class="w-10 lg:w-24 h-auto mb-3 block">
                <span class="pb-2">Himpunan Mahasiswa Islam</span>
                <span class="block w-32 h-1 bg-green-700 rounded-full mb-2"></span>
                <div class="flex flex-col gap-5">
                    <div class="flex items-center gap-4">
                        <span class="text-6xl text-green-700 block w-32 text-center"><i class="fas fa-users"></i></span>
                        <div class="w-2/3">
                            <p class="text-lg font-semibold">Pemrakarsa</p>
                            <p class="font-light">Lafran Pane beserta 14 orang mahasiswa Sekolah Tinggi Islam (sekarang
                                Universitas Islam
                                Indonesia).</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <span class="text-6xl text-green-700 block w-32 text-center"><i class="fas fa-calendar"></i></span>
                        <div>
                            <p class="text-lg font-semibold">Tanggal Pembentukan</p>
                            <p class="font-light">5 Februari 1947 / 14 Rabiul Awal 1366 H</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <span class="text-6xl text-green-700 block w-32 text-center"><i
                                class="fas fa-chalkboard-teacher"></i></span>
                        <div>
                            <p class="text-lg font-semibold">Jenis</p>
                            <p class="font-light">Organisasi Kemahasiswaan, Perkaderan dan Perjuangan.</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 ">
                        <span class="text-6xl text-green-700 block w-32 text-center"><i
                                class="fas fa-quote-left"></i></span>
                        <div class="w-2/3">
                            <p class="text-lg font-semibold">Slogan</p>
                            <p class="font-light">Lafran Pane beserta 14 orang mahasiswa Sekolah Tinggi Islam (sekarang
                                Universitas Islam
                                Indonesia).</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <span class="text-6xl text-green-700 block w-32 text-center"><i
                                class="fab fa-font-awesome-flag"></i></span>
                        <div class="w-2/3">
                            <p class="text-lg font-semibold">Tujuan</p>
                            <p class="font-light">Terbinanya insan akademis, pencipta, pengabdi yang bernafaskan islam
                                dan bertanggung jawab atas terwujudnya masyarakat adil makmur yang diridhoi Allah SWT.</p>
                        </div>
                    </div>



                </div>


    </main>
@endsection
