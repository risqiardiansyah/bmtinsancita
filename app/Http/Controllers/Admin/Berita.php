<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
use App\Berita_model;
use Ramsey\Uuid\Uuid;

class Berita extends Controller
{
    // Main page
    public function index()
    {
        if(Session()->get('username')=="") 
        { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }elseif(Session()->get('akses_level')=="User") 
        { return redirect('admin\dasbor')->with(['warning' => 'Mohon maaf, Anda Bukan Admin']);
        }else
        $myberita             = new Berita_model();
        $berita             = $myberita->semua();
        $kategori     = DB::table('kategori')->orderBy('urutan', 'ASC')->get();

        $data = array(
            'title'       => 'Data Berita',
            'aktif'       => 'berita',
            'berita'      => $berita,
            'kategori'    => $kategori,
            'content'     => 'admin/berita/index'
        );
        return view('admin/layout/wrapper', $data);
    }

    // Cari
    public function cari(Request $request)
    {
        if(Session()->get('username')=="") 
        { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }elseif(Session()->get('akses_level')=="User") 
        { return redirect('admin\dasbor')->with(['warning' => 'Mohon maaf, Anda Bukan Admin']);
        }else
        $myberita           = new Berita_model();
        $keywords           = $request->keywords;
        $berita             = $myberita->cari($keywords);
        $kategori    = DB::table('kategori')->orderBy('urutan', 'ASC')->get();

        $data = array(
            'title'             => 'Data Berita',
            'berita'            => $berita,
            'kategori'   => $kategori,
            'content'           => 'admin/berita/index'
        );
        return view('admin/layout/wrapper', $data);
    }

    // Proses
    public function proses(Request $request)
    {
        if(Session()->get('username')=="") 
        { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }elseif(Session()->get('akses_level')=="User") 
        { return redirect('admin\dasbor')->with(['warning' => 'Mohon maaf, Anda Bukan Admin']);
        }else
        $site   = DB::table('konfigurasi')->first();
        // PROSES HAPUS MULTIPLE
        if (isset($_POST['hapus'])) {
            $id_beritanya       = $request->id_berita;
            for ($i = 0; $i < sizeof($id_beritanya); $i++) {
                DB::table('berita')->where('id_berita', $id_beritanya[$i])->delete();
            }
            return redirect('admin/berita')->with(['sukses' => 'Data telah dihapus']);
            // PROSES SETTING DRAFT
        } elseif (isset($_POST['draft'])) {
            $id_beritanya       = $request->id_berita;
            for ($i = 0; $i < sizeof($id_beritanya); $i++) {
                DB::table('berita')->where('id_berita', $id_beritanya[$i])->update([
                    'id_user'       => Session()->get('id_user'),
                    'status_berita' => 'Draft'
                ]);
            }
            return redirect('admin/berita')->with(['sukses' => 'Data telah diubah menjadi Draft']);
            // PROSES SETTING PUBLISH
        } elseif (isset($_POST['publish'])) {
            $id_beritanya       = $request->id_berita;
            for ($i = 0; $i < sizeof($id_beritanya); $i++) {
                DB::table('berita')->where('id_berita', $id_beritanya[$i])->update([
                    'id_user'       => Session()->get('id_user'),
                    'status_berita' => 'Publish'
                ]);
            }
            return redirect('admin/berita')->with(['sukses' => 'Data telah diubah menjadi Publish']);
        } elseif (isset($_POST['update'])) {
            $id_beritanya       = $request->id_berita;
            for ($i = 0; $i < sizeof($id_beritanya); $i++) {
                DB::table('berita')->where('id_berita', $id_beritanya[$i])->update([
                    'id_user'               => Session()->get('id_user'),
                    'id_kategori'    => $request->id_kategori
                ]);
            }
            return redirect('admin/berita')->with(['sukses' => 'Data kategori telah diubah']);
        }
    }

    //Status
    public function status_berita($status_berita)
    {
        if(Session()->get('username')=="") 
        { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }elseif(Session()->get('akses_level')=="User") 
        { return redirect('admin\dasbor')->with(['warning' => 'Mohon maaf, Anda Bukan Admin']);
        }else
        $myberita           = new Berita_model();
        $berita             = $myberita->status_berita($status_berita);
        $kategori    = DB::table('kategori')->orderBy('urutan', 'ASC')->get();

        $data = array(
            'title'             => 'Status Berita: ' . $status_berita,
            'aktif'             => 'aktif',
            'berita'            => $berita,
            'kategori'   => $kategori,
            'content'           => 'admin/berita/index'
        );
        return view('admin/layout/wrapper', $data);
    }

    //Status
    public function jenis_berita($jenis_berita)
    {
        if (Session()->get('username') == "") {
            return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }
        $myberita           = new Berita_model();
        $berita             = $myberita->jenis_berita($jenis_berita);
        $kategori    = DB::table('kategori')->orderBy('urutan', 'ASC')->get();

        $data = array(
            'title'             => 'Jenis Berita: ' . $jenis_berita,
            'aktif'             => 'aktif',
            'berita'            => $berita,
            'kategori'   => $kategori,
            'content'           => 'admin/berita/index'
        );
        return view('admin/layout/wrapper', $data);
    }

    //Status
    public function author($id_user)
    {
        if(Session()->get('username')=="") 
        { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }elseif(Session()->get('akses_level')=="User") 
        { return redirect('admin\dasbor')->with(['warning' => 'Mohon maaf, Anda Bukan Admin']);
        }else
        $myberita           = new Berita_model();
        $berita             = $myberita->author($id_user);
        $kategori    = DB::table('kategori')->orderBy('urutan', 'ASC')->get();
        $author    = DB::table('users')->where('id_user', $id_user)->orderBy('id_user', 'ASC')->first();

        $data = array(
            'title'             => 'Data Berita dengan Penulis: ' . $author->nama,
            'aktif'             => 'aktif',
            'berita'            => $berita,
            'kategori'   => $kategori,
            'content'           => 'admin/berita/index'
        );
        return view('admin/layout/wrapper', $data);
    }

    //Kategori
    public function kategori($id_kategori)
    {
        if(Session()->get('username')=="") 
        { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }elseif(Session()->get('akses_level')=="User") 
        { return redirect('admin\dasbor')->with(['warning' => 'Mohon maaf, Anda Bukan Admin']);
        }else
        $myberita           = new Berita_model();
        $berita             = $myberita->all_kategori($id_kategori);
        $kategori    = DB::table('kategori')->orderBy('urutan', 'ASC')->get();
        $detail      = DB::table('kategori')->where('id_kategori', $id_kategori)->first();
        $data = array(
            'title'             => 'Kategori: ' . $detail->nama_kategori,
            'aktif'             => 'aktif',
            'berita'            => $berita,
            'kategori'   => $kategori,
            'content'           => 'admin/berita/index'
        );
        return view('admin/layout/wrapper', $data);
    }

    // Tambah
    public function tambah()
    {
        if(Session()->get('username')=="") 
        { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }elseif(Session()->get('akses_level')=="User") 
        { return redirect('admin\dasbor')->with(['warning' => 'Mohon maaf, Anda Bukan Admin']);
        }else
        $kategori    = DB::table('kategori')->orderBy('urutan', 'ASC')->get();

        $data = array(
            'title'             => 'Tambah Berita',
            'kategori'          => $kategori,
            'aktif'             => 'tambah-berita',
            'content'           => 'admin/berita/tambah'
        );
        return view('admin/layout/wrapper', $data);
    }

    // edit
    public function edit($id_berita)
    {
        if(Session()->get('username')=="") 
        { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }elseif(Session()->get('akses_level')=="User") 
        { return redirect('admin\dasbor')->with(['warning' => 'Mohon maaf, Anda Bukan Admin']);
        }else
        $myberita           = new Berita_model();
        $berita             = $myberita->detail($id_berita);
        $kategori    = DB::table('kategori')->orderBy('urutan', 'ASC')->get();

        $data = array(
            'title'             => 'Edit Berita',
            'aktif'             => 'edit',
            'berita'            => $berita,
            'kategori'          => $kategori,
            'content'           => 'admin/berita/edit'
        );
        return view('admin/layout/wrapper', $data);
    }

    // tambah
    public function tambah_proses(Request $request)
    {
        if(Session()->get('username')=="") 
        { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }elseif(Session()->get('akses_level')=="User") 
        { return redirect('admin\dasbor')->with(['warning' => 'Mohon maaf, Anda Bukan Admin']);
        }else
        request()->validate([
            'judul_berita'  => 'required|unique:berita',
            'isi'           => 'required',
            'gambar'        => 'file|image|dimensions:max_width=570,max_height=400|mimes:jpeg,png,jpg|max:2048',
        ]);
        // UPLOAD START
        $image                  = $request->file('gambar');
        if (!empty($image)) {
            $filenamewithextension  = $request->file('gambar')->getClientOriginalName();
            $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $input['nama_file']     = str_slug($filename, '-') . '-' . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath        = public_path('upload/image/berita/');
            $img = Image::make($image->getRealPath(), array(
                'width'     => 150,
                'height'    => 150,
                'grayscale' => false
            ));
            $img->save($destinationPath . '/' . $input['nama_file']);
            $destinationPath = public_path('upload/image/berita/');
            $image->move($destinationPath, $input['nama_file']);
            // END UPLOAD
            $slug_berita = str_slug($request->judul_berita, '-');
            DB::table('berita')->insert([
                'id_berita'         => Uuid::uuid4(),        
                'id_kategori'       => $request->id_kategori,
                'id_user'           => Session()->get('id_user'),
                'slug_berita'       => $slug_berita,
                'judul_berita'      => $request->judul_berita,
                'isi'               => $request->isi,
                'jenis_berita'      => $request->jenis_berita,
                'status_berita'     => $request->status_berita,
                'gambar'            => $input['nama_file'],
                'icon'              => $request->icon,
                'keywords'          => $request->keywords,
                'tanggal_publish'   => date('Y-m-d'),
                'urutan'            => $request->urutan,
                'tanggal_post'      => date('Y-m-d H:i:s')
            ]);
        } else {
            $slug_berita = str_slug($request->judul_berita, '-');
            DB::table('berita')->insert([
                'id_berita'         => Uuid::uuid4(),        
                'id_kategori'       => $request->id_kategori,
                'id_user'           => Session()->get('id_user'),
                'slug_berita'       => $slug_berita,
                'judul_berita'      => $request->judul_berita,
                'isi'               => $request->isi,
                'jenis_berita'      => $request->jenis_berita,
                'status_berita'     => $request->status_berita,
                'icon'              => $request->icon,
                'keywords'          => $request->keywords,
                'tanggal_publish'   => date('Y-m-d'),
                'urutan'            => $request->urutan,
                'tanggal_post'      => date('Y-m-d H:i:s')
            ]);
        }
        return redirect('admin/berita')->with(['sukses' => 'Data telah ditambah']);
    }

    // edit
    public function edit_proses(Request $request)
    {
        if(Session()->get('username')=="") 
        { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }elseif(Session()->get('akses_level')=="User") 
        { return redirect('admin\dasbor')->with(['warning' => 'Mohon maaf, Anda Bukan Admin']);
        }else
        request()->validate([
            'judul_berita'   => 'required',
            'isi'           => 'required',
            'gambar'        => 'file|image|dimensions:max_width=570,max_height=400|mimes:jpeg,png,jpg|max:2048',
        ]);
        // UPLOAD START
        $image                  = $request->file('gambar');
        if (!empty($image)) {
            $filenamewithextension  = $request->file('gambar')->getClientOriginalName();
            $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $input['nama_file']     = str_slug($filename, '-') . '-' . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath        = public_path('upload/image/berita/');
            $img = Image::make($image->getRealPath(), array(
                'width'     => 150,
                'height'    => 150,
                'grayscale' => false
            ));
            $img->save($destinationPath . '/' . $input['nama_file']);
            $destinationPath = public_path('upload/image/berita/');
            $image->move($destinationPath, $input['nama_file']);
            // END UPLOAD
            $slug_berita = str_slug($request->judul_berita, '-');
            DB::table('berita')->where('id_berita', $request->id_berita)->update([
                'id_kategori'       => $request->id_kategori,
                'id_user'           => Session()->get('id_user'),
                'slug_berita'       => $slug_berita,
                'judul_berita'      => $request->judul_berita,
                'isi'               => $request->isi,
                'jenis_berita'      => $request->jenis_berita,
                'status_berita'     => $request->status_berita,
                'gambar'            => $input['nama_file'],
                'icon'              => $request->icon,
                'keywords'          => $request->keywords,
                'tanggal_publish'   => date('Y-m-d'),
                'urutan'            => $request->urutan
            ]);
        } else {
            $slug_berita = str_slug($request->judul_berita, '-');
            DB::table('berita')->where('id_berita', $request->id_berita)->update([
                'id_kategori'       => $request->id_kategori,
                'id_user'           => Session()->get('id_user'),
                'slug_berita'       => $slug_berita,
                'judul_berita'      => $request->judul_berita,
                'isi'               => $request->isi,
                'jenis_berita'      => $request->jenis_berita,
                'status_berita'     => $request->status_berita,
                'icon'              => $request->icon,
                'keywords'          => $request->keywords,
                'tanggal_publish'   => date('Y-m-d'),
                'urutan'            => $request->urutan
            ]);
        }
        return redirect('admin/berita')->with(['sukses' => 'Data telah ditambah']);
    }

    // Delete
    public function delete($id_berita)
    {
        if(Session()->get('username')=="") 
        { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }elseif(Session()->get('akses_level')=="User") 
        { return redirect('admin\dasbor')->with(['warning' => 'Mohon maaf, Anda Bukan Admin']);
        }else
        DB::table('berita')->where('id_berita', $id_berita)->delete();
        return redirect('admin/berita')->with(['sukses' => 'Data telah dihapus']);
    }
}
