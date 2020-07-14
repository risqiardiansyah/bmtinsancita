<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Produk_model;
use App\Rekening_model;
use App\Berita_model;
use App\Pemesanan_model;
use App\Pendaftaran_model;
use App\Pesan_model;
use App\Team_model;
use App\Testimoni_model;
use Ramsey\Uuid\Uuid;
use PDF;

class Home extends Controller
{
    // Homepage
    public function index()
    {
        $site     = DB::table('konfigurasi')->first();
        $slider = DB::table('galeri')->where('jenis_galeri', 'Homepage')->limit(5)->orderBy('id_galeri', 'DESC')->get();
        $model     = new Produk_model();
        $produks = $model->listing();
        $model_testimoni = new Testimoni_model();
        $testimoni= $model_testimoni->semua();
        $model_team = new Team_model();
        $team= $model_team->semua();
        $news   = new Berita_model();
        $sliderPerusahaan = DB::table('galeri')->where('jenis_galeri', 'Galeri')->limit(5)->orderBy('id_galeri', 'DESC')->get();

        $berita = $news->home();

        $data = array(
            'title'     => $site->namaweb . ' - ' . $site->tagline,
            'deskripsi' => $site->namaweb . ' - ' . $site->tagline,
            'keywords'  => $site->namaweb . ' - ' . $site->tagline,
            'slider'    => $slider,
            'site'      => $site,
            'aktif'     => 'nameweb',
            'produks'   => $produks,
            'teams'     => $team,
            'testimoni'    => $testimoni,
            'sliderPerusahaan'    => $sliderPerusahaan,
            'berita'    => $berita,
            'content'   => 'home/index'
        );
        return view('layout/wrapper', $data);
    }

    // kontak
    public function kontak()
    {
        $site   = DB::table('konfigurasi')->first();
        $model  = new Produk_model();
        $slider = DB::table('galeri')->where('jenis_galeri', 'Homepage')->limit(5)->orderBy('id_galeri', 'DESC')->get();
        $produk = $model->listing();

        $data = array(
            'title'     => 'Kontak Kami: ' . $site->namaweb . ' - ' . $site->tagline,
            'deskripsi' => 'Kontak ' . $site->namaweb,
            'keywords'  => 'Kontak ' . $site->namaweb,
            'site'      => $site,
            'slider'    => $slider,
            'aktif'     => 'kontak',
            'produk'    => $produk,
            'content'   => 'home/kontak'
        );
        return view('layout/wrapper', $data);
    }

    // pemesanan
    public function pemesanan()
    {
        $site   = DB::table('konfigurasi')->first();
        $model  = new Produk_model();
        $produk = $model->listing();

        $data = array(
            'title'     => 'Formulir Pemesanan',
            'deskripsi' => 'Formulir Pemesanan',
            'keywords'  => 'Formulir Pemesanan',
            'site'      => $site,
            'produk'    => $produk,
            'content'   => 'home/pemesanan'
        );
        return view('layout/wrapper', $data);
    }
    // pendaftaran
    public function pendaftaran()
    {
        $site           = DB::table('konfigurasi')->first();
        $model          = new Pendaftaran_model();
        $pendaftaran    = $model->listing();

        $data = array(
            'title'     => 'Formulir Pendaftaran',
            'deskripsi' => 'Formulir Pendaftaran',
            'keywords'  => 'Formulir Pendaftaran',
            'site'      => $site,
            'produk'    => $pendaftaran,
            'content'   => 'home/pendaftaran'
        );
        return view('layout/wrapper', $data);
    }


    // Proses Pendaftaran
    public function proses_pendaftaran(Request $request)
    {
        $request->validate([
            "nama_lengkap" => "required|max:225|unique:pendaftaran",
            "no_ktp" => "required|unique:pendaftaran|regex:/^([0-9\s\-\+\(\)]*)$/|min:16|max:16",
            "no_kk" => "required|unique:pendaftaran|regex:/^([0-9\s\-\+\(\)]*)$/|min:16|max:16",
            "no_whatsapp" => "required|unique:pendaftaran|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:13",
            "pekerjaan" => "required|max:225",
            'g-recaptcha-response' => 'required|captcha',
        ]);
        $pesan  = new Pendaftaran_model();
        $check  = $pesan->nomor_akhir();
        if ($check) {
            $nomer_induk    = $check->nomer_induk + 1;
        } else {
            $nomer_induk    = 1;
        }

        if ($nomer_induk < 10) {
            $nomer_induk = date('Ymd') . '000' . $nomer_induk;
        } elseif ($nomer_induk < 100) {
            $nomer_induk = date('Ymd') . '00' . $nomer_induk;
        } elseif ($nomer_induk < 1000) {
            $nomer_induk = date('Ymd') . '0' . $nomer_induk;
        } elseif ($nomer_induk < 1000) {
            $nomer_induk = date('Ymd') . $nomer_induk;
        }
        $kd_tansaksi        = $nomer_induk;
        DB::table('pendaftaran')->insert([
            'id'         => Uuid::uuid4(),
            'nomer_induk'    => $kd_tansaksi,
            'nama_lengkap'   => $request->nama_lengkap,
            'no_ktp'      => $request->no_ktp,
            'no_kk'   => $request->no_kk,
            'no_whatsapp'     => $request->no_whatsapp,
            'pekerjaan'            => $request->pekerjaan,
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),
        ]);
        $msg = array("msg" => "Hai.. $request->nama_lengkap,<b></b> Selamat Pendaftaran kamu berhasil di kirim, Admin akan segera meninjau dan hubungi kamu nanti Simpan Jangan Lupa Simpan Kode ini $request->kd_tansaksi .<br><br>Terimakasih.");
        return back()->with($msg);
    }


    public function proses_pesan(Request $request)
    {
        $request->validate([
            "name" => "required|max:225",
            "phone" => "required|unique:pesan|regex:/^([0-9\s\-\+\(\)]*)$/|min:3",
            "email" => "required|unique:pesan",
        ]);
        try {
            $message = new Pesan_model();
            $message->id =  Uuid::uuid4();
            $message->name = $request->name;
            $message->phone = $request->phone;
            $message->email = $request->email;
            $message->subject = $request->subject;
            $message->content = $request->contents;
            $message->save();
            $msg = array("success" => "Pesan Anda telah terkirim ke Admin, <br><br>Terimakasih telah mengirim pesan kepada kami.");
            return back()->with($msg);
        } catch (\Exception $exception) {
            $msg = array("error" => "Pesan Anda Gagal dikirim, Harap isi pesan dengan baik dan benar. <br><br>Terimakasih.");
            return back()->with($msg)->withInput($request->all());
        }
    }

    // Proses
    public function proses_pemesanan(Request $request)
    {
        $model  = new Produk_model();
        // insert data ke table pegawai
        $produk = $model->detail($request->id_produk);
        $pesan  = new Pemesanan_model();
        $check  = $pesan->nomor_akhir();
        if ($check) {
            $nomor_transaksi    = $check->nomor_transaksi + 1;
        } else {
            $nomor_transaksi    = 1;
        }

        if ($nomor_transaksi < 10) {
            $kode_transaksi = date('Ymd') . '000' . $nomor_transaksi;
        } elseif ($nomor_transaksi < 100) {
            $kode_transaksi = date('Ymd') . '00' . $nomor_transaksi;
        } elseif ($nomor_transaksi < 1000) {
            $kode_transaksi = date('Ymd') . '0' . $nomor_transaksi;
        } elseif ($nomor_transaksi < 1000) {
            $kode_transaksi = date('Ymd') . $nomor_transaksi;
        }
        $kd_tansaksi        = 'JWM' . $kode_transaksi;
        $token_transaksi    = Str::random(32);

        DB::table('pemesanan')->insert([
            'id_produk'         => $request->id_produk,
            'kode_transaksi'    => $kd_tansaksi,
            'token_transaksi'   => $token_transaksi,
            'tanggal_order'     => date('Y-m-d'),
            'status_pemesanan'  => 'Menunggu',
            'nomor_transaksi'   => $nomor_transaksi,
            'nama_pemesan'      => $request->nama_pemesan,
            'telepon_pemesan'   => $request->telepon_pemesan,
            'email_pemesan'     => $request->email_pemesan,
            'alamat'            => $request->alamat,
            'jumlah_produk'     => $request->jumlah_produk,
            'harga_produk'      => $produk->harga_jual,
            'total_harga'       => $request->jumlah_produk * $produk->harga_jual,
            'tanggal_pemesanan' => date('Y-m-d H:i:s'),
            'tanggal_post'      => date('Y-m-d H:i:s')
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('berhasil/' . $token_transaksi);
        // End proses
    }

    // konfirmasi
    public function berhasil($token_transaksi)
    {
        $site       = DB::table('konfigurasi')->first();
        $model      = new Pemesanan_model();
        $pemesanan  = $model->token_transaksi($token_transaksi);

        $data = array(
            'title'     => 'Pemesanan Berhasil',
            'deskripsi' => 'Pemesanan Berhasil',
            'keywords'  => 'Pemesanan Berhasil',
            'site'      => $site,
            'pemesanan' => $pemesanan,
            'content'   => 'home/berhasil'
        );
        return view('layout/wrapper', $data);
    }

    // cetak
    public function cetak($token_transaksi)
    {
        $site       = DB::table('konfigurasi')->first();
        $model      = new Pemesanan_model();
        $pemesanan  = $model->token_transaksi($token_transaksi);

        $data = array(
            'title'     => 'Cetak Pemesanan',
            'deskripsi' => 'Cetak Pemesanan Berhasil',
            'keywords'  => 'Cetak Pemesanan Berhasil',
            'site'      => $site,
            'pemesanan' => $pemesanan
        );
        $config = ['format' => 'A4-P', // Landscape
            // 'margin_top' => 0
        ];
        $pdf = PDF::loadview('home/cetak', $data, [], $config);
        // OR :: $pdf = PDF::loadview('pdf_data_member',$data,[],['format' => 'A4-L']);
        $nama_file = $pemesanan->kode_transaksi . '.pdf';
        return $pdf->stream($nama_file, 'I');
    }

    // Testimoni
    public function testimoni()
    {
    }

    // konfirmasi
    public function konfirmasi()
    {
        $site       = DB::table('konfigurasi')->first();
        $model      = new Rekening_model();
        $rekening   = $model->listing();

        if (isset($_GET['token_transaksi'])) {
            $token_transaksi = $_GET['token_transaksi'];
            $model          = new Pemesanan_model();
            $pemesanan      = $model->token_transaksi($token_transaksi);
        } else {
            $pemesanan = '';
        }

        $data = array(
            'title'     => 'Konfirmasi Pembayaran',
            'deskripsi' => 'Konfirmasi Pembayaran',
            'keywords'  => 'Konfirmasi Pembayaran',
            'site'      => $site,
            'rekening'  => $rekening,
            'pemesanan' => $pemesanan,
            'content'   => 'home/konfirmasi'
        );
        return view('layout/wrapper', $data);
    }

    // pembayaran
    public function pembayaran()
    {
        $site       = DB::table('konfigurasi')->first();
        $model      = new Rekening_model();
        $rekening   = $model->listing();

        $data = array(
            'title'     => 'Metode Pembayaran',
            'deskripsi' => 'Metode Pembayaran',
            'keywords'  => 'Metode Pembayaran',
            'site'      => $site,
            'rekening'  => $rekening,
            'content'   => 'home/pembayaran'
        );
        return view('layout/wrapper', $data);
    }
}
