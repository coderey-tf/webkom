<?php

namespace Database\Seeders;

use App\Models\Dosen;
use App\Models\Gallery;
use App\Models\Kategori;
use App\Models\Matakuliah;
use App\Models\Post;
use App\Models\StrukturOrganisasi;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'is_admin' => true,
            "name" => "Admin",
            "email" => "admin@gmail.com",
            "password" => bcrypt("admin"),
            'remember_token' => Str::random(10),
        ]);
        User::factory()->count(5)->create();

        Kategori::create([
            "nama" => "Berita",
            "slug" => "berita"
        ]);
        Kategori::create([
            "nama" => "Pengumuman",
            "slug" => "pengumuman"
        ]);

        Post::factory()->count(20)->create();

        Gallery::create([
            'image' => 'gallery/gedung1.jpg',
            'caption' => 'Gedung Kuliah Bersama, tempat belajar mengajar MKU'
        ]);
        Gallery::create([
            'image' => 'gallery/gedung2.jpg',
            'caption' => 'Gedung Kuliah Bersama'
        ]);
        Gallery::create([
            'image' => 'gallery/gedung3.jpg',
            'caption' => 'Gedung Kuliah Bersama'
        ]);
        Gallery::create([
            'image' => 'gallery/gedung4.jpg',
            'caption' => 'Gedung Kuliah Bersama'
        ]);
        Gallery::create([
            'image' => 'gallery/kelas.jpg',
            'caption' => 'Ruang kelas gedung GKB'
        ]);
        Gallery::create([
            'image' => 'gallery/tas.jpg',
            'caption' => 'Ruang kelas gedung GKB'
        ]);

        //bidang2
        $bidangumum = Matakuliah::create([
            'nama' => 'Bidang Umum'
        ]);
        $bidangsekret = Matakuliah::create([
            'nama' => 'Bidang Kesekretariatan'
        ]);
        $bidanginven = Matakuliah::create([
            'nama' => 'Bidang Inventaris dan Kebendaharaan'
        ]);
        $bidangp3a = Matakuliah::create([
            'nama' => 'Bidang P3A'
        ]);
        $bidangptkp = Matakuliah::create([
            'nama' => 'Bidang PTKP'
        ]);
        $bidangkpp = Matakuliah::create([
            'nama' => 'Bidang KPP'
        ]);
        $bidangpp = Matakuliah::create([
            'nama' => 'Bidang Pemberdayaan Perempuan'
        ]);

        //bidang umum
        $dosen1 = Dosen::create([
            'nama' => 'Reynaldi Satriawan Wikyanhadi',
            'jurusan' => 'Informatika'
        ]);
        $dosen1->struktur()->create(['jabatan' => 'Ketua Umum']);
        $dosen1->matakuliah()->attach($bidangumum);

        $dosen2 = Dosen::create([
            'nama' => 'M. Fariz Dewananta',
            'jurusan' => 'Teknik Industri'
        ]);
        $dosen2->struktur()->create(['jabatan' => 'Sekretaris Umum']);
        $dosen2->matakuliah()->attach([$bidangsekret->id, $bidangumum->id]);

        $dosen3 = Dosen::create([
            'nama' => 'Linda Ziyadatul',
            'jurusan' => 'Teknik Mesin'
        ]);
        $dosen3->struktur()->create(['jabatan' => 'Bendahara Umum']);
        $dosen3->matakuliah()->attach([$bidanginven->id, $bidangumum->id]);

        //bidan inventaris dan kebendaharaan
        $dosen4 = Dosen::create([
            'nama' => 'Nur Fadilah Rizky S.',
            'jurusan' => 'Teknik Mesin'
        ]);
        $dosen4->struktur()->create(['jabatan' => 'Wakil Bendahara Umum']);
        $dosen4->matakuliah()->attach($bidanginven);

        //ketua bidang
        $dosen4 = Dosen::create([
            'nama' => 'Moch. Harits Pradana M.',
            'jurusan' => 'Teknologi Pangan'
        ]);
        $dosen4->struktur()->create(['jabatan' => 'Ketua Bidang P3A']);
        $dosen4->matakuliah()->attach($bidangp3a);

        $dosen4 = Dosen::create([
            'nama' => 'Abdul Fattah Juniawan',
            'jurusan' => 'Teknik Industri'
        ]);
        $dosen4->struktur()->create(['jabatan' => 'Ketua Bidang PTKP']);
        $dosen4->matakuliah()->attach($bidangptkp);

        $dosen4 = Dosen::create([
            'nama' => 'Malkhan Arifin',
            'jurusan' => 'Manajemen'
        ]);
        $dosen4->struktur()->create(['jabatan' => 'Ketua Bidang KPP']);
        $dosen4->matakuliah()->attach($bidangkpp);

        $dosen4 = Dosen::create([
            'nama' => 'Azzahra Hanggararas S.',
            'jurusan' => 'Teknik Lingkungan'
        ]);
        $dosen4->struktur()->create(['jabatan' => 'Ketua Bidang PP']);
        $dosen4->matakuliah()->attach($bidangpp);

        //bidang kesekretariatan
        $dosen4 = Dosen::create([
            'nama' => 'Izzah Illiyina',
            'jurusan' => 'Administrasi Publik'
        ]);
        $dosen4->struktur()->create(['jabatan' => 'Wakil Sekretaris Umum Bidang P3A']);
        $dosen4->matakuliah()->attach([$bidangsekret->id, $bidangp3a->id]);

        $dosen4 = Dosen::create([
            'nama' => 'Naila Nadhifa Q.',
            'jurusan' => 'Agribisnis'
        ]);
        $dosen4->struktur()->create(['jabatan' => 'Wakil Sekretaris Umum Bidang PTKP']);
        $dosen4->matakuliah()->attach([$bidangsekret->id, $bidangptkp->id]);

        $dosen4 = Dosen::create([
            'nama' => 'Naufal Naputra I.',
            'jurusan' => 'Manajemen'
        ]);
        $dosen4->struktur()->create(['jabatan' => 'Wakil Sekretaris Umum Bidang KPP']);
        $dosen4->matakuliah()->attach([$bidangsekret->id, $bidangkpp->id]);

        $dosen4 = Dosen::create([
            'nama' => 'Savira Fevilia',
            'jurusan' => 'Teknik Lingkungan'
        ]);
        $dosen4->struktur()->create(['jabatan' => 'Wakil Sekretaris Umum Bidang PP']);
        $dosen4->matakuliah()->attach([$bidangsekret->id, $bidangpp->id]);

        //bidang p3a
        $dosen4 = Dosen::create([
            'nama' => 'Lukman Hakim',
            'jurusan' => 'Ilmu Hukum'
        ]);
        $dosen4->struktur()->create(['jabatan' => 'Departemen Diklat Anggota']);
        $dosen4->matakuliah()->attach($bidangp3a);

        $dosen4 = Dosen::create([
            'nama' => 'Daud Arya Rafa',
            'jurusan' => 'Sistem Informasi'
        ]);
        $dosen4->struktur()->create(['jabatan' => 'Departemen Penerangan']);
        $dosen4->matakuliah()->attach($bidangp3a);

        //bidang ptkp
        $dosen4 = Dosen::create([
            'nama' => 'M. Esa Febriyanto',
            'jurusan' => 'Ekonomi Pembangunan'
        ]);
        $dosen4->struktur()->create(['jabatan' => 'Departemen Kepemudaan']);
        $dosen4->matakuliah()->attach($bidangptkp);

        $dosen4 = Dosen::create([
            'nama' => 'M. Fathur Rizky',
            'jurusan' => 'Ilmu Hukum'
        ]);
        $dosen4->struktur()->create(['jabatan' => 'Departemen Kepemudaan']);
        $dosen4->matakuliah()->attach($bidangptkp);

        $dosen4 = Dosen::create([
            'nama' => 'Glenn Anggoro',
            'jurusan' => 'Agribisnis'
        ]);
        $dosen4->struktur()->create(['jabatan' => 'Departemen Perguruan Tinggi dan Kemahasiswaan']);
        $dosen4->matakuliah()->attach($bidangptkp);

        $dosen4 = Dosen::create([
            'nama' => 'Raihan Izzul',
            'jurusan' => 'Ekonomi Pembangunan'
        ]);
        $dosen4->struktur()->create(['jabatan' => 'Departemen Perguruan Tinggi dan Kemahasiswaan']);
        $dosen4->matakuliah()->attach($bidangptkp);

        $dosen4 = Dosen::create([
            'nama' => 'Fatwa Ratantja K.',
            'jurusan' => 'Informatika'
        ]);
        $dosen4->struktur()->create(['jabatan' => 'Departemen Perguruan Tinggi dan Kemahasiswaan']);
        $dosen4->matakuliah()->attach($bidangptkp);

        //bidang kpp
        $dosen4 = Dosen::create([
            'nama' => 'Ahmad Shodiq Anashrulloh',
            'jurusan' => 'Ilmu Komunikasi'
        ]);
        $dosen4->struktur()->create(['jabatan' => 'Departemen Kewirausahaan dan Pengembangan Profesi']);
        $dosen4->matakuliah()->attach($bidangkpp);

        $dosen4 = Dosen::create([
            'nama' => 'Andini',
            'jurusan' => 'Akuntansi'
        ]);
        $dosen4->struktur()->create(['jabatan' => 'Departemen Kewirausahaan dan Pengembangan Profesi']);
        $dosen4->matakuliah()->attach($bidangkpp);

        $dosen4 = Dosen::create([
            'nama' => 'Ahmad Fahmi I.',
            'jurusan' => 'Teknik Industri'
        ]);
        $dosen4->struktur()->create(['jabatan' => 'Departemen Kewirausahaan dan Pengembangan Profesi']);
        $dosen4->matakuliah()->attach($bidangkpp);

        $dosen4 = Dosen::create([
            'nama' => 'Naura Nisrinne H.',
            'jurusan' => 'Teknik Lingkungan'
        ]);
        $dosen4->struktur()->create(['jabatan' => 'Departemen Kewirausahaan dan Pengembangan Profesi']);
        $dosen4->matakuliah()->attach($bidangkpp);

        // bidang pp
        $dosen4 = Dosen::create([
            'nama' => 'Nirda Nanda R.',
            'jurusan' => 'Ilmu Hukum'
        ]);
        $dosen4->struktur()->create(['jabatan' => 'Departemen Pemberdayaan Perempuan']);
        $dosen4->matakuliah()->attach($bidangpp);

        $dosen4 = Dosen::create([
            'nama' => 'Adinta Fracellya',
            'jurusan' => 'Ilmu Komunikasi'
        ]);
        $dosen4->struktur()->create(['jabatan' => 'Departemen Pemberdayaan Perempuan']);
        $dosen4->matakuliah()->attach($bidangpp);

        $dosen4 = Dosen::create([
            'nama' => 'Yumna Ellisa',
            'jurusan' => 'Ilmu Hukum'
        ]);
        $dosen4->struktur()->create(['jabatan' => 'Departemen Pemberdayaan Perempuan']);
        $dosen4->matakuliah()->attach($bidangpp);
    }
}
