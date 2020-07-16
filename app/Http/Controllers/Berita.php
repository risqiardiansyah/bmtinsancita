<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Berita_model;

class Berita extends Controller
{
    // Beritapage
    public function index()
    {
    	$site 	= DB::table('konfigurasi')->first();
        $slider = DB::table('galeri')->where('jenis_galeri', 'Homepage')->limit(5)->orderBy('id_galeri', 'DESC')->get();
    	// $berita = DB::table('berita')->where('status_berita','Publish')->orderBy('id_berita', 'DESC')->get();
        $pagination = DB::table('berita')
        ->select('*')
        ->orderBy('id_berita', 'DESC')
        ->paginate(4);
        $model 	= new Berita_model();
        $berita = $model->listing();

        $data = array(  'title'     => $site->namaweb.' - '.$site->tagline,
                        'deskripsi' => $site->namaweb.' - '.$site->tagline,
                        'keywords'  => $site->namaweb.' - '.$site->tagline,
                        'slider'    => $slider,
                        'site'		=> $site,
                        'mypaginate'=> $pagination,
                        'aktif'     => 'Berita',
                        'beritas'	=> $berita,
                        'content'   => 'berita/index'
                    );
        return view('layout/wrapper',$data);
    }

    // kontak
    public function read($slug_berita)
    {
        $site   = DB::table('konfigurasi')->first();
        $slider = DB::table('galeri')->where('jenis_galeri', 'Homepage')->limit(5)->orderBy('id_galeri', 'DESC')->get();
        // $berita = DB::table('berita')->where('status_berita','Publish')->orderBy('id_berita', 'DESC')->get();
        $model  = new Berita_model();
        $berita = $model->read($slug_berita);
        $berita_all         = $model->all_kategori($berita->id_kategori);


        $data = array(  'title'     => $berita->judul_berita,
                        'deskripsi' => $berita->judul_berita,
                        'keywords'  => $berita->judul_berita,
                        'slider'    => $slider,
                        'site'      => $site,
                        'aktif'     => 'read',
                        'berita'    => $berita,
                        'content'   => 'berita/read'
                    );
        return view('layout/wrapper',$data);
    }
}