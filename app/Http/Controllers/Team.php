<?php

namespace App\Http\Controllers;

use App\Team_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Team extends Controller
{
    //
    public function read($slug_name)
    {
        $site   = DB::table('konfigurasi')->first();
        $slider = DB::table('galeri')->where('jenis_galeri', 'Homepage')->limit(5)->orderBy('id_galeri', 'DESC')->get();
        // $berita = DB::table('berita')->where('status_berita','Publish')->orderBy('id_berita', 'DESC')->get();
        $model  = new Team_model();
        $team = $model->read($slug_name);

        $data = array(  'title'     => $site->namaweb . ' - ' .'Profile ' .$team->slug_name,
                        'deskripsi' => $site->namaweb . ' - ' .$team->slug_name,
                        'keywords'  => $site->namaweb . ' - ' .$team->slug_name,
                        'slider'    => $slider,
                        'site'      => $site,
                        'aktif'     => 'read',
                        'team'      => $team,
                        'content'   => 'team/read'
                    );
        return view('layout/wrapper',$data);
    }
}
