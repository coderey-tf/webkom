<?php

namespace App\Http\Controllers;

use App\Models\FileSupport;
use App\Models\Gallery;
use App\Models\Post;
use App\Models\StrukturOrganisasi;
use App\Models\Matakuliah;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::with("kategori")->latest()->take(3)->get();
        return view('index', [
            "title" => "Home",
            "posts" => $posts
        ]);
    }

    public function about()
    {
        return view('about', [
            "title" => "About"
        ]);
    }
    public function struktur()
    {
        // $koordinator = StrukturOrganisasi::with("dosen")->where('jabatan', 'like', '%Ketua%')->first();
        $struktur = Matakuliah::with("listDosen.struktur")->get();
        // $struktur = $struktur->except([$koordinator->id]);

        // dd($struktur[0]->listDosen[0]->struktur);

        return view('struktur', [
            "title" => "Struktur Organisasi",
            // "koordinator" => $koordinator,
            "listStruktur" => $struktur
        ]);
    }

    public function gallery()
    {
        $dataGalleries = Gallery::latest()->get();
        // $galleries = [];
        // foreach ($dataGalleries as $index => $gallery) {

        // }


        return view('gallery', [
            "title" => "Gallery Foto",
            'galleries' => $dataGalleries
        ]);
    }

    public function download()
    {
        $files = FileSupport::all();

        return view('download', [
            "title" => "Download File",
            'files' => $files
        ]);
    }
}
