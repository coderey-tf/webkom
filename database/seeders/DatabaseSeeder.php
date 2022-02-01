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



        $agama = Matakuliah::create([
            "nama" => "Pendidikan Agama",
            "slug" => "pendidikan-agama",
            "detail" => '<div>Matakuliah Pendidikan Agama</div>'
        ]);
        $agama->listDosen()->createMany([
            [
                'nama' => 'A. Muammar Alawi, S.Pd.I, M.Pd.I',
                'keterangan' => 'Agama Islam'
            ],
            [
                'nama' => 'Drs. Zawawi, M.Pd',
                'keterangan' => 'Agama Islam',
                'nip' => '370069600601'
            ],
            [
                'nama' => 'Drs. Imam Ghozali, M.M',
                'keterangan' => 'Agama Islam',
                'nip' => '19650910199331001'
            ],
            [
                'nama' => 'Saifuddin Zuhri. M.Si, Drs',
                'keterangan' => 'Agama Islam',
                'nip' => '370069400351'
            ],
            [
                'nama' => 'Rohmatul Faizah, S.Pd.I, M.Pd.I',
                'keterangan' => 'Agama Islam',
                'nip' => '17219940221007'
            ],
            [
                'nama' => 'Taufikurrahman, S.Pd, M.Pd',
                'keterangan' => 'Agama Islam',
                'nip' => '20119930410246'
            ],
            [
                'nama' => 'Erwin K, S.Th.I, M.Pd',
                'keterangan' => 'Agama Islam',
                'nip' => '17219920510006'
            ],
            [
                'nama' => 'Cholid Fadil, S.Sos.I, M.Pd.I',
                'keterangan' => 'Agama Islam',
                'nip' => '374100802651'
            ],
            [
                'nama' => 'Drs. Sony Wiliams Ss, M.Hum',
                'keterangan' => 'Agama Katolik'
            ],
            [
                'nama' => 'Niluh P K, Se, S.Pdh, M.Pdh',
                'keterangan' => 'Agama Hindu'
            ],
            [
                'nama' => 'Suranto, S. Ag, M. A',
                'keterangan' => 'Agama Budha'
            ],
            [
                'nama' => 'Pdt. Abraham Lalong L, Ma',
                'keterangan' => 'Agama Kristen'
            ],
            [
                'nama' => 'Andreas Jonathan, Ph.D',
                'keterangan' => 'Agama Kristen'
            ],
        ]);
        $agama->file_support()->create([
            'path' => 'file-support/pendidikan-agama.pdf',
            'filename' => 'Jadwal matakuliah Pendidikan Agama'
        ]);

        $indonesia = Matakuliah::create([
            "nama" => "Bahasa Indonesia",
            "slug" => "bahasa-indonesia",
            "detail" => '<div>Matakuliah Bahasa Indonesia</div>'
        ]);
        $indonesia->listDosen()->createMany([
            [
                'nama' => 'Adelia S, S.Hum, M.Hum',
                'nip' => '20219920404240'
            ],
            [
                'nama' => 'Ahmad Suyuti, S.Pd, M.A',
                'nip' => '20119920302241'
            ],
            [
                'nama' => 'Dewi Puspa A, S.Pd, M.Pd',
                'nip' => '1719890624026'
            ],
            [
                'nama' => 'Endang S, Dr. S.Pd, M.Pd',
                'nip' => '17219860506024'
            ],
            [
                'nama' => 'Siti Ning Farida, Dra. M.Si',
                'nip' => '196407291990032000'
            ],
            [
                'nama' => 'Ilmatus S, S.Pd., M.Hum',
                'nip' => '20219930130239'
            ],
            [
                'nama' => 'Dra. Peni Cahya Cartika, M.Si'
            ],
            [
                'nama' => 'Dr. Eko Hardianto, M.Pd'
            ],
        ]);
        $indonesia->file_support()->create([
            'path' => 'file-support/bahasa-indonesia.pdf',
            'filename' => 'Jadwal matakuliah Bahasa Indonesia'
        ]);

        $inggris = Matakuliah::create([
            "nama" => "Bahasa Inggris",
            "slug" => "bahasa-inggris",
            "detail" => '<div>Matakuliah Bahasa Inggris</div>'
        ]);
        $inggris->listDosen()->createMany([
            [
                'nama' => 'Dr. Rosida, S.Tp, M.P',
                'nip' => '371029500441'
            ],
            [
                'nama' => 'Dr. Zainal Abidin Achmad, S.Sos, M.Si',
                'nip' => '37305997301701'
            ],
            [
                'nama' => 'Laksmi Diana, S.S, M.Pd',
                'nip' => ''
            ],
            [
                'nama' => 'Kinanti Resmi Hayati, S.Hum, M.A',
                'nip' => ''
            ],
            [
                'nama' => 'Navisatul Izzah, S.Pd, M.Tesol',
                'nip' => '20219950330243'
            ],
            [
                'nama' => 'Wahyu Kyestiati Sumarno, S.Pd, M.Ed, M.Pd',
                'nip' => '20219890807242'
            ],
            [
                'nama' => 'Dwi Wahyuningtyas, S.Pd, M.A',
                'nip' => '20219910528244'
            ],
            [
                'nama' => 'Drs. Suprapto, M.Hum',
                'nip' => '573031404660007'
            ],
            [
                'nama' => 'Dr.Drs. Sukirmiyadi, M.Pd',
                'nip' => '196106011993091000'
            ],
            [
                'nama' => 'Hendra Sudarso S.Pd, M.Pd',
                'nip' => '0727048701'
            ],
            [
                'nama' => 'Linda Mayasari,  S.Pd.M.Pd',
                'nip' => '0718928401'
            ],
            [
                'nama' => 'Ari Setyorini, Ss., Ma',
            ],
            [
                'nama' => 'Diah Astuty Ss.,M.Pd,',
                'nip' => '0714127401'
            ],
            [
                'nama' => 'Dr.Drs Kani Sulam Taufik M.Pd',
                'nip' => '0725105101'
            ],
            [
                'nama' => 'Sulton Dedi Wijaya S.Pd.,M.Pd,',
                'nip' => '3515111512750004'
            ],
            [
                'nama' => 'Davy budiono S.Pd.,Mhum',
                'nip' => '0718097601'
            ],
            [
                'nama' => 'Nuriah Mufidah Ss.,M.Pd'
            ],
            [
                'nama' => 'Septaria S. Prihandini'
            ],
        ]);
        $inggris->file_support()->create([
            'path' => 'file-support/bahasa-inggris.pdf',
            'filename' => 'Jadwal matakuliah Bahasa Inggris'
        ]);

        $kepemimpinan = Matakuliah::create([
            "nama" => "Kepemimpinan",
            "slug" => "kepemimpinan",
            "detail" => '<div>Matakuliah Kepemimpinan</div>'
        ]);
        $kepemimpinan->listDosen()->createMany([
            [
                'nama' => 'Ario Bimo Utomo, S.Ip, M.I.R'
            ],
            [
                'nama' => 'Budi Prabowo, S.Sos, Mm'
            ],
            [
                'nama' => 'Dr. I Gede Susrama Masdiyasa, S.T, M.Kom',
                'nip' => '370060602101'
            ],
            [
                'nama' => 'Ir. Minto Waluyo, Dr. Mmt',
                'nip' => '196111301990031001'
            ],
            [
                'nama' => 'Dra. Ety Dwi Susanti, M.Si',
                'nip' => '196805011994032001'
            ],
            [
                'nama' => 'Dra. Sri Wibawani, M.Si',
                'nip' => '196704061994032001'
            ],
            [
                'nama' => 'Dra. Herlina Suksmawati, M.Si',
                'nip' => '196412251993092001'
            ],
            [
                'nama' => 'Ir. Bambang Wahyudi, M.S'
            ],
            [
                'nama' => 'Praja Firdaus Nuryananda, S.Hub.Int, M.Hub.Int',
                'nip' => '388071303601'
            ],
            [
                'nama' => 'Artimuri Krisbowo, S.I.P., M.Si.',
                'nip' => '388071303601'
            ],
            [
                'nama' => 'Dandi Darmadi, S.Ip., M.A.P.',
                'nip' => '388071303601'
            ],
            [
                'nama' => 'Drh. Wiludjeng Widayati, M.P.',
                'nip' => '388071303601'
            ],
            [
                'nama' => 'Made Bambang Adnyana, M.Par.',
                'nip' => '388071303601'
            ],
            [
                'nama' => 'Dra.Ec. Nurjanti Takarini, M.Si.',
                'nip' => '388071303601'
            ],
            [
                'nama' => 'Drs.Ec. Hery Pudjoprastyono, M.M.',
                'nip' => '388071303601'
            ],
            [
                'nama' => 'IR. Naniek Ratni Juliardi A.R., M.Kes.',
                'nip' => '388071303601'
            ],
            [
                'nama' => 'Dhian Satria Yudha Kartika, S.Kom., M.Kom.',
                'nip' => '388071303601'
            ],
            [
                'nama' => 'Dra. Endang Iryanti, M.M.',
                'nip' => '388071303601'
            ],
            [
                'nama' => 'Dr.Ir. Penta Suryaminarsih, M.P.',
                'nip' => '388071303601'
            ],
            [
                'nama' => 'Dr.Ir. Hery Nirwanto, M.P.',
                'nip' => '388071303601'
            ],
            [
                'nama' => 'Dra. Suparwati, M.Si.',
                'nip' => '388071303601'
            ],
            [
                'nama' => 'Dr. Sutrisno. SH.M.Hum.',
                'nip' => '388071303601'
            ],
            [
                'nama' => 'Dr. Ir. Ni Ketut Sari. MT.',
                'nip' => '388071303601'
            ],
            [
                'nama' => 'Dr.Ir.Hamidah Hendrarini,M.Si.',
                'nip' => '388071303601'
            ],
        ]);
        $kepemimpinan->file_support()->create([
            'path' => 'file-support/kepemimpinan.pdf',
            'filename' => 'Jadwal matakuliah Kepemimpinan'
        ]);

        $kewirausahaan = Matakuliah::create([
            "nama" => "Kewirausahaan",
            "slug" => "kewirausahaan",
            "detail" => '<div>Matakuliah Kewirausahaan</div>'
        ]);
        $kewirausahaan->listDosen()->createMany([
            [
                'nama' => 'Adibah N.Y, St, Bbe, Msc'
            ],
            [
                'nama' => 'Aileena S, C.E.C, St, M.Ds'
            ],
            [
                'nama' => 'Aloysia K, St, M.Ds'
            ],
            [
                'nama' => 'Ardika Nurmawati, St, Mt'
            ],
            [
                'nama' => 'Arief Budiman, S.Ab.M.Ab'
            ],
            [
                'nama' => 'Arista Pratama, S.Kom, M.Kom'
            ],
            [
                'nama' => 'Dra. Diana Amalia, M.Si'
            ],
            [
                'nama' => 'Dr.Ir. Hamidah Hendrarini, M.Si'
            ],
            [
                'nama' => 'Dr. Renny Oktafia, S.E., M.E.I'
            ],
            [
                'nama' => 'Dra. Anna Rumintag Nauli, M.T.'
            ],
            [
                'nama' => 'Dra.Ec. Nurjanti Takarini, M.Si.'
            ],
            [
                'nama' => 'Dra.Ec. Niniel Imaningsih, M.P.'
            ],
            [
                'nama' => 'Dra.Ec. Tituk D.Widajantie, M.Aks.'
            ],
            [
                'nama' => 'Drs.Ec. Muslimin M.Si.'
            ],
            [
                'nama' => 'Drs.Ec. Hery Pudjoprastyono, M.M.'
            ],
            [
                'nama' => 'Dyan Agustin,  St, Mt'
            ],
            [
                'nama' => 'Egan Evanzha Y,  Smn., Mm.'
            ],
            [
                'nama' => 'Fauzatul Laily Nisa,  Se, Me'
            ],
            [
                'nama' => 'Henni Endah W,  S.Kom, M.Kom'
            ],
            [
                'nama' => 'Ika Nawang P,  St.Mt'
            ],
            [
                'nama' => 'Ir. Bambang Wahyudi, M.S.'
            ],
            [
                'nama' => 'Ir. Eendang Pudji Widjajati, M.Mt.'
            ],
            [
                'nama' => 'Ir. Handoyo, M.T.'
            ],
            [
                'nama' => 'Ir. Setyo Parsudi, M.P.'
            ],
            [
                'nama' => 'Muhammad Ilham Naufal, S.A., Mba.'
            ],
            [
                'nama' => 'Ratna Andriani,  St., Mds'
            ],
            [
                'nama' => 'Renova Panjaitan,  St.M'
            ],
            [
                'nama' => 'Reva Edra Nugraha,  Ssi'
            ],
            [
                'nama' => 'Sugiarto,  S.Kom, M.Kom'
            ],
            [
                'nama' => 'Tri Lathif Mardi Suryanto, S.Kom.,M.T.'
            ],
            [
                'nama' => 'Widyasari,  St, Mt'
            ],
            [
                'nama' => 'Wiwin Yulianingsih,  Sh., Mkn'
            ],
            [
                'nama' => 'Dr. Yudiana Indriastuti, S.Sos.,M.Si.'
            ],
            [
                'nama' => 'Zetta Rasullia K,  St,Mt., M.Sc'
            ],
            [
                'nama' => 'Zuhda Mila F,  Sh., L.L.M'
            ],
            [
                'nama' => 'Ika Sari Tondang, S.P., M.Sc.'
            ],
            [
                'nama' => 'Risqi Firdaus Setiawan, S.P., M.P.'
            ],
        ]);
        $kewirausahaan->file_support()->create([
            'path' => 'file-support/kewirausahaan.pdf',
            'filename' => 'Jadwal matakuliah Kewirausahaan'
        ]);

        $belaNegara = Matakuliah::create([
            "nama" => "Pendidikan Bela Negara",
            "slug" => "pendidikan-bela-negara",
            "detail" => '<div>Matakuliah Pendidikan Bela Negara</div>'
        ]);
        $belaNegara->listDosen()->createMany([
            ['nama' => 'A. Muammar Alawi, S.Pd.I, M.Pd.I'],
            ['nama' => 'Anita Wulansari, S.Kom, M.Kom'],
            ['nama' => 'Ardian Jaya Prasetya, S.T, M.Ds'],
            ['nama' => 'Arief Rachman Hakim, S.H, M.H'],
            ['nama' => 'Arimurti Kriswibowo, Sip, M.Si'],
            ['nama' => 'Asif Faroqi, S.Kom, M.Kom'],
            ['nama' => 'Cholid Fadil, S.Sos.I, M.Pd.I'],
            ['nama' => 'Daisy Marthina Rosyanti, Se, Mm'],
            ['nama' => 'Dhian Satria Y K, S.Kom, M.Kom'],
            ['nama' => 'Dr. Agus Widiyarta, S.Sos.,M.Si'],
            ['nama' => 'Dr.Dra. Sutini, M.Pd'],
            [
                'nama' => 'Dr. I Gede Susrama Masdiyasa, S.T.,M.Kom',
                'nip' => '370060602101'
            ],
            ['nama' => 'Dr. Ida Syamsu Roidah, S.P., Mma'],
            ['nama' => 'Prof.Dr.Dra.Ec. Indrawati Yuhertiana, M.M.,Ak'],
            [
                'nama' => 'Dr.Ir. Ni Ketut Sari, M.T',
                'nip' => '196507311992032001'
            ],
            ['nama' => 'Dr. Jojok Dwiridotjahjono, S.Sos,M.Si'],
            ['nama' => 'Dr. Lukman Arif, M.Si'],
            ['nama' => 'Dr. Sutrisno, S.H.,M.Hum'],
            ['nama' => 'Dra.Ec. Niniek Imaningsih, M.P'],
            ['nama' => 'Dra. Endang Iryanti, M.M'],
            [
                'nama' => 'Dra. Sri Wibawani, M.Si',
                'nip' => '196704061994032001'
            ],
            ['nama' => 'Drh. Wiludjeng Widayati, M.P'],
            [
                'nama' => 'Drs.Ec. Hery Pudjoprastyono, M.M',
                'nip' => '196203181988031002'
            ],
            ['nama' => 'Drs.Ec. Sjarief Hidajat, M.Si'],
            [
                'nama' => 'Drs. Zawawi, M.Pd',
                'nip' => '370069600601'
            ],
            [
                'nama' => 'Drs. Imam Ghozali, M.M',
                'nip' => '19650910199331001'
            ],
            [
                'nama' => 'Drs. Saifuddin Zuhri, M.Si',
                'nip' => '370069400351'
            ],
            ['nama' => 'Eka Nanda Ravizki, S.H., Ll.M'],
            ['nama' => 'Faisal Muttaqin, S.Kom., M.T'],
            ['nama' => 'Iis Purnamawati, S.P., M.Si'],
            ['nama' => 'Ir. Akmal Suryadi, M.T'],
            ['nama' => 'Ir. Didik Utomo Pribadi, M.P'],
            ['nama' => 'Ir. Guniarti, M.M'],
            ['nama' => 'Ir. Mutasim Billah, M.S'],
            ['nama' => 'Ir. Mulyanto, M.Si'],
            ['nama' => 'Ir. Purwadi, M.P'],
            ['nama' => 'Ir. Sutiyono, M.T'],
            ['nama' => 'Ir. Yuliatin Ali Syamsiah, M.M'],
            ['nama' => 'Kalvin Edo W, S.Sos., M.Kp'],
            ['nama' => 'Kartika Maulida H, S.Kom, M.Kom'],
            ['nama' => 'Kinanti Resmi Hayati S.Hum., M.A'],
            ['nama' => 'Mohammad Idhom, S.P.,S.Kom.M.T'],
            ['nama' => 'Muchammad Chasif Ascha, S.Sos., M.Si'],
            ['nama' => 'Miko Aditiya Suharto, S.H., M.H'],
            ['nama' => 'Mohamad Mirwan, St., Mt'],
            ['nama' => 'Muhammad Indrawan J, S.Ip., M.A'],
            ['nama' => 'Nurul Azizah, S.Ab, M.Ab'],
            ['nama' => 'Oryza Tannar, S.Ak.,M.Acc'],
            ['nama' => 'Panggung Handoko, S.Sos.,S.H.,M.M'],
            ['nama' => 'Pardi Sampe Tola, S.Si., M.Si., Ph.D'],
            ['nama' => 'Prihandono Wibowo, S.Hub.Int,M.Hub.Int'],
            ['nama' => 'Prof.Dr.Drs.Ec. Syamsul Huda, M.T'],
            ['nama' => 'Puji Lestari Tarigan, Sp., M.Sc'],
            ['nama' => 'Putra Perdana, Se, M.Sc'],
            ['nama' => 'Syahrul Munir, S.T., M.T'],
            ['nama' => 'Tranggono, S.T., M.T'],
            ['nama' => 'Tri Lathif Mardi S, S.Kom, Mt'],
            ['nama' => 'Dra.Ec. Nurjanti Takarini, M.Si'],
            ['nama' => 'Mirza Andrian Syah, S.P., M.P'],
            ['nama' => 'Dr. Bambang Priyanto, Su'],
            ['nama' => 'Dr. Ir. Sumartono, Su'],
            ['nama' => 'Suprapto, Dr. M.Sc'],
        ]);
        $belaNegara->file_support()->create([
            'path' => 'file-support/pendidikan-bela-negara.pdf',
            'filename' => 'Jadwal matakuliah Pendidikan Bela Negara'
        ]);

        $pancasila = Matakuliah::create([
            "nama" => "Pendidikan Pancasila",
            "slug" => "pendidikan-pancasila",
            "detail" => '<div>Matakuliah Pendidikan Pancasila</div>'
        ]);
        $pancasila->listDosen()->createMany([
            ['nama' => 'Ir. Mutasim Billah, M.S'],
            ['nama' => 'Prof.Dr.Ir. H. Syarif Imam Hidayat, M.M'],
            ['nama' => 'Prof.Dr.Drs.Ec. Syamsul Huda, M.T'],
            ['nama' => 'Dr. Lukman Arif, M.Si'],
            ['nama' => 'Drs. Zawawi, M.Pd'],
            ['nama' => 'Panggung Handoko, S.Sos, S.H, M.M'],
            ['nama' => 'Drs.Ec. Munari, M.M'],
            ['nama' => 'Ir. Setyo Budi Santoso, M.P'],
            ['nama' => 'Ir. Purwadi, M.P'],
            ['nama' => 'Ir. Eko Priyanto, M.P'],
            ['nama' => 'Anajeng Eem, Sh.Mhum'],
            [
                'nama' => 'Drs. Imam Ghozali, M.M.',
                'nip' => '19650910199331001'
            ],
            ['nama' => 'Kinanti Resmi H, St,Mt'],
            ['nama' => 'Dr. Hervina Puspitosari, S.H.,M.H'],
            ['nama' => 'Nurul Azizah, S.Ab, M.Ab'],
            ['nama' => 'Laksmi Diana S.S., M.Pd'],
            ['nama' => 'Drh. Wiludjeng Widayati, M.P'],
            ['nama' => 'Eka Prakarsa Mandyartha, S.T.,M.Kom'],
            ['nama' => 'Fawwaz Ali Akbar, S.Kom,M.Kom'],
            ['nama' => 'Dewi Puspa Arum, Spd, Mpd'],
            ['nama' => 'Rachmad Ramadhan Y., S.T.,M.T'],
            ['nama' => 'Saefurrohman, S.P., M.Sc'],
            ['nama' => 'Fitri Wijayanti, Sp.,Mp'],
            ['nama' => 'Iis Purnamawati, Sp.,M.Si'],
            ['nama' => 'Puji Lestari Tarigan, S.P., M.Sc'],
            ['nama' => 'Safira Rizka Lestari, Sp.,Mp'],
            ['nama' => 'Tranggono, St.,Mt'],
            ['nama' => 'Ir. Rr. Djarwatiningsih Pogki Soedjarwo, M.P'],
            ['nama' => 'Dr.Dra. Sutini, M.Pd'],
            ['nama' => 'Dr. Noor Rizkiyah, S.P., M.P'],
            ['nama' => 'Dr. Dona Wahyuning Laily, S.P., M.P'],
            ['nama' => 'Dr. Ida Syamsu Roidah, S.P., Mma'],
            ['nama' => 'Prof.Dr.Ir. Moch. Sodiq'],
            ['nama' => 'Ir. Sutoyo, Mm'],
            ['nama' => 'Drs. Pailan, Mpd'],
            ['nama' => 'Dr. Maslichah Mafruchati, Drh., M.Si'],
            ['nama' => 'Drs. Sumarno, M.Hum'],
        ]);
        $pancasila->file_support()->create([
            'path' => 'file-support/pendidikan-pancasila.pdf',
            'filename' => 'Jadwal matakuliah Pendidikan Pancasila'
        ]);

        $kewarganegaraan = Matakuliah::create([
            "nama" => "Kewarganegaraan",
            "slug" => "kewarganegaraan",
            "detail" => '<div>Matakuliah Kewarganegaraan</div>'
        ]);
        $kewarganegaraan->listDosen()->createMany([
            [
                'nama' => 'Dr. Ir. R.A. Nora Agustien, MP',
            ],
            [
                'nama' => 'Alfian Candra Ayuswantana, ST, M.Ds',
            ],
            [
                'nama' => 'Anajeng Esri Edhi Mahanani, SH, MH',
            ],
            [
                'nama' => 'Asif Faroqi, S.Kom, M.Kom',
            ],
            [
                'nama' => 'Aulia Ulfah Farahdiba, ST, M.Sc',
            ],
            [
                'nama' => 'Azkia Avenzoar, ST, MT',
            ],
            [
                'nama' => 'Cholid Fadil, S.Sos.I, M.Pd.I',
            ],
            [
                'nama' => 'Chrystia Aji Putra, S.Kom, MT',
            ],
            [
                'nama' => 'Dewi Puspa Arum',
            ],
            [
                'nama' => 'Diana Aqidatun Nisa, ST, M.Ds',
            ],
            [
                'nama' => 'Djarwatiningsih Pongki S',
            ],
            [
                'nama' => 'Dona Wahyuning Laily',
            ],
            [
                'nama' => 'Dr. Dra. Wiwik Handayani, MM',
            ],
            [
                'nama' => 'Dr. Jojok Dwiridho Tjahyono, M.Si',
            ],
            [
                'nama' => 'Dr. Lukman Arif, M.Si',
            ],
            [
                'nama' => 'Dr. Moch. Ali Mashuri, S.Sos., M.Si',
            ],
            [
                'nama' => 'Dra. Ec. Niniek Imaningsih, M.P.',
            ],
            [
                'nama' => 'Dra. Endang Iriyanti, MM',
            ],
            [
                'nama' => 'Dra. Sri Wibawani, M.Si',
            ],
            [
                'nama' => 'Drh, Wilujeng Widajati, MP',
            ],
            [
                'nama' => 'Drs. A. Zawawi, M.Pd, MM',
            ],
            [
                'nama' => 'Drs. Ec. Munari, MM',
            ],
            [
                'nama' => 'Drs. Ec. R. Sjarief Hidajat , M.Si',
            ],
            [
                'nama' => 'Drs. Imam Ghazali, MM',
            ],
            [
                'nama' => 'Drs. Saifuddin Zuhri, M.Si',
            ],
            [
                'nama' => 'Eka Prakarsa Mandyartha, ST, M.Kom',
            ],
            [
                'nama' => 'Fairuz Mutia, ST, MT',
            ],
            [
                'nama' => 'Fawwaz Ali Akbar, S.Kom, M.Kom',
            ],
            [
                'nama' => 'Fithri Estikhamah, ST, MT',
            ],
            [
                'nama' => 'Fitri Wijayanti',
            ],
            [
                'nama' => 'Haryo Sulistyantoro, SH, MM',
            ],
            [
                'nama' => 'Ida Syamsu Roidah',
            ],
            [
                'nama' => 'Iis Purnamawati',
            ],
            [
                'nama' => 'Ir. Mulyanto, M.Si',
            ],
            [
                'nama' => 'Ir. Purwadi, MP',
            ],
            [
                'nama' => 'Ir. Setyo Budi Santoso, MP',
            ],
            [
                'nama' => 'Ir. Sigit Dwi Nugroho, M.Si',
            ],
            [
                'nama' => 'Kalvin Edo W., S.Sos, M.Kp',
            ],
            [
                'nama' => 'Kinanti Resmi Hayati, S.Hum. MA.',
            ],
            [
                'nama' => 'Laksmi Diana, S.S., M.Pd',
            ],
            [
                'nama' => 'Lilik Suprianti, ST., MSc',
            ],
            [
                'nama' => 'Luqman Agung Wicaksono, S.TP., M.P',
            ],
            [
                'nama' => "Mu'tasim Billah",
            ],
            [
                'nama' => 'Noor Rizkiyah',
            ],
            [
                'nama' => 'Panggung Handoko, S.Sos, SH, MM',
            ],
            [
                'nama' => 'Prasmita Dian Wijayati',
            ],
            [
                'nama' => 'Prihandono, S.Hub.Int, M.Hub.Int',
            ],
            [
                'nama' => 'Prof. Dr. Drs. Ec. Syamsul Huda, MT',
            ],
            [
                'nama' => 'Prof. Dr. Ir. H. Syarif Imam Hidayat, MM',
            ],
            [
                'nama' => 'Prof. Dr. Ir. Sri Redjeki, MS',
            ],
            [
                'nama' => 'Puji Lestari Tarigan',
            ],
            [
                'nama' => 'Rachmad Ramadhan Yogaswara, S.T, M.T',
            ],
            [
                'nama' => 'Raden Kokoh, ST, MT',
            ],
            [
                'nama' => 'Reiga Ritomeia Ariescy, SE,MM',
            ],
            [
                'nama' => 'Riko Setya Wijaya, S.E.,M.M.',
            ],
            [
                'nama' => 'Saefurrohman',
            ],
            [
                'nama' => 'Safira Rizka Lestari',
            ],
            [
                'nama' => 'Sutini',
            ],
            [
                'nama' => 'Tranggono, ST, MT',
            ],
            [
                'nama' => 'Tri Lathif Mardi Suryanto, S.Kom, M.T',
            ],
            
        ]);



        $dosen1 = Dosen::create([
            'nama' => 'Dr.Ir. Srie Mulijani, MT'
        ]);
        $dosen1->struktur()->createMany([
            ['jabatan' => 'Ketua Program MKU'],
            ['jabatan' => 'Koordinator MK Kewirausahaan'],
        ]);

        $dosen2 = Dosen::create([
            'nama' => 'Chrystia Aji Putra, S.Kom.MT'
        ]);
        $dosen2->matakuliah()->attach($kewirausahaan->id);
        $dosen2->struktur()->create(['jabatan' => 'Sekretaris Program MKU']);

        $dosen3 = Dosen::create([
            'nama' => 'Dr. Fazlul Rahman, Lc.MA',
            'keterangan' => 'Agama Islam',
            'nip' => '20119850913247'
        ]);
        $dosen3->matakuliah()->attach($agama->id);
        $dosen3->struktur()->create(['jabatan' => 'Koordinator MK Agama']);

        $dosen4 = Dosen::create([
            'nama' => 'Drs. Kusnarto, M.Si',
            'nip' => '195808011984021000'
        ]);
        $dosen2->matakuliah()->attach($indonesia->id);
        $dosen4->struktur()->create(['jabatan' => 'Koordinator MK Bahasa Indonesia']);

        $dosen5 = Dosen::create([
            'nama' => 'Dr. Wulan Retno Wiganti, M.Pd',
            'nip' => '195808251991032001'
        ]);
        $dosen5->matakuliah()->attach($inggris->id);
        $dosen5->struktur()->create(['jabatan' => 'Koordinator MK Bahasa Inggris']);

        $dosen6 = Dosen::create([
            'nama' => 'Prof.Dr.Ir. Syarif Imam Hidayat, MM'
        ]);
        $dosen6->struktur()->create(['jabatan' => 'Koordinator MK Kewarganegaraan']);

        $dosen7 = Dosen::create([
            'nama' => 'Ir. Sigit Dwi Nugroho, M.Pkn'
        ]);
        $dosen7->matakuliah()->attach($pancasila->id);
        $dosen7->struktur()->create(['jabatan' => 'Koordinator MK Pancasila']);

        $dosen8 = Dosen::create([
            'nama' => 'Dra. Sri Wibawani, M.Si'
        ]);
        $dosen8->matakuliah()->attach($belaNegara->id);
        $dosen8->struktur()->create(['jabatan' => 'Koordinator MK Bela Negara']);

        $dosen9 = Dosen::create([
            'nama' => 'Dr. Ertien Rining Nawangsari, M.Si'
        ]);
        $dosen9->matakuliah()->attach($kepemimpinan->id);
        $dosen9->struktur()->create(['jabatan' => 'Koordinator MK Kepemimpinan']);
    }
}
