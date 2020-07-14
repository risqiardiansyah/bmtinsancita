<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Produk_model;
use App\Testimoni_model;
use Ramsey\Uuid\Uuid;
use PDF;

class Produk extends Controller
{
    // Produkpage
    public function index()
    {
    	$site 	= DB::table('konfigurasi')->first();
        $slider = DB::table('galeri')->where('jenis_galeri', 'Homepage')->limit(5)->orderBy('id_galeri', 'DESC')->get();
    	$model 	= new Produk_model();
		$produk = $model->listing();

        $data = array(  'title'     => $site->namaweb.' - '.$site->tagline,
                        'deskripsi' => $site->namaweb.' - '.$site->tagline,
                        'keywords'  => $site->namaweb.' - '.$site->tagline,
                        'slider'    => $slider,
                        'site'		=> $site->namaweb,'-'.'Semua Produk',
                        'aktif'     => 'produk',
                        'produk'	=> $produk,
                        'content'   => 'produk/index'
                    );
        return view('layout/wrapper',$data);
    }

    // Produkpage
    public function kategori($slug_kategori_produk)
    {
        $site       = DB::table('konfigurasi')->first();
        $slider = DB::table('galeri')->where('jenis_galeri', 'Homepage')->limit(5)->orderBy('id_galeri', 'DESC')->get();
        $model      = new Produk_model();
        $produk     = $model->slug_kategori_produk($slug_kategori_produk);
        $kategori   = $model->detail_slug_kategori_produk($slug_kategori_produk);

        $data = array(  'title'     => $kategori->nama_kategori_produk,
                        'deskripsi' => $kategori->nama_kategori_produk,
                        'keywords'  => $kategori->nama_kategori_produk,
                        'slider'    => $slider,
                        'site'      => $site,
                        'aktif'     => 'produk',
                        'produk'    => $produk,
                        'content'   => 'produk/index'
                    );
        return view('layout/wrapper',$data);
    }

    // detail
    public function detail($slug_produk)
    {
        $site               = DB::table('konfigurasi')->first();
        $model              = new Produk_model();
        $produk             = $model->read($slug_produk);
        $gambar             = $model->gambar($produk->id_produk);
        $produk_all         = $model->kategori_produk($produk->id_kategori_produk);
        $kategori_produk    = $model->detail_kategori_produk($produk->id_kategori_produk);
        $slider = DB::table('galeri')->where('jenis_galeri', 'Homepage')->limit(5)->orderBy('id_galeri', 'DESC')->get();


        $data = array(  'title'             => $produk->nama_produk,
                        'deskripsi'         => $produk->nama_produk,
                        'keywords'          => $produk->nama_produk,
                        'site'              => $site,
                        'produk'            => $produk,
                        'gambar'            => $gambar,
                        'gambar2'           => $gambar,
                        'aktif'             => 'aktif',
                        'slider'            => $slider,
                        'produk_all'        => $produk_all,
                        'kategori_produk'   => $kategori_produk,
                        'content'           => 'produk/detail'
                    );
        return view('layout/wrapper',$data);
    }

    public function proses_testimoni(Request $request)
    {
        $request->validate([
            "nama_lengkap" => "required|max:225|unique:testimoni",
            "email" => "required|max:225|unique:testimoni",
        ]);
        try {
            $message = new Testimoni_model();
            $message->id =  Uuid::uuid4();
            $message->nama_produk = $request->nama_produk;
            $message->nama_lengkap = $request->nama_lengkap;
            $message->email = $request->email;
            $message->pekerjaan = $request->pekerjaan;
            $message->message = $request->message;
            $message->save();
            $msg = array("success" => "Testimoni Anda telah terkirim, <br><br>Terimakasih telah mengirim testimoni Produk kami.");
            return back()->with($msg);
        } catch (\Exception $exception) {
            $msg = array("error" => "Pesan Anda Gagal dikirim, Harap isi pesan dengan baik dan benar. <br><br>Terimakasih.");
            return back()->with($msg)->withInput($request->all());
        }

    }

    // cetak
    public function cetak($slug_produk)
    {
        $site               = DB::table('konfigurasi')->first();
        $model              = new Produk_model();
        $produk             = $model->read($slug_produk);
        $gambar             = $model->gambar($produk->id_produk);
        $produk_all         = $model->kategori_produk($produk->id_kategori_produk);
        $kategori_produk    = $model->detail_kategori_produk($produk->id_kategori_produk);

        $data = array(  'title'             => $produk->nama_produk,
                        'deskripsi'         => $produk->nama_produk,
                        'keywords'          => $produk->nama_produk,
                        'site'              => $site,
                        'produk'            => $produk,
                        'gambar'            => $gambar,
                        'gambar2'           => $gambar,
                        'produk_all'        => $produk_all,
                        'kategori_produk'   => $kategori_produk,
                    );
        $config = [ 'format' => 'A4-P', // Landscape
                    // 'margin_top' => 0
                  ];
        $pdf = PDF::loadview('produk/cetak',$data,[],$config);
        // OR :: $pdf = PDF::loadview('pdf_data_member',$data,[],['format' => 'A4-L']);
        $nama_file = $produk->nama_produk.'.pdf';
        return $pdf->stream($nama_file, 'I');
    }
}