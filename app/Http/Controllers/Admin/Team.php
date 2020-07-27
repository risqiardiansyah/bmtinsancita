<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Team_model;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;
use Image;

class Team extends Controller
{
    // our team
    public function index()
    {
        if (Session()->get('username') == "") {
            return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        } elseif (Session()->get('akses_level') == "User") {
            return redirect('admin\dasbor')->with(['warning' => 'Mohon maaf, Anda Bukan Admin']);
        } else
            $myteam  = new Team_model();
        $team    = $myteam->semua();
        $teams     = DB::table('tim')->orderBy('id', 'ASC')->get();


        $data = array(
            'title'        => 'Our Team',
            'team'         => $team,
            'teams'         => $teams,
            'aktif'        => 'team',
            'content'      => 'admin/konfigurasi/team'
        );
        return view('admin/layout/wrapper', $data);
    }

    //tambah
    public function tambahteam(Request $request)
    {
        if (Session()->get('username') == "") {
            return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        } elseif (Session()->get('akses_level') == "User") {
            return redirect('admin\dasbor')->with(['warning' => 'Mohon maaf, Anda Bukan Admin']);
        } else
            request()->validate([
                'nama_lengkap'  => 'required|unique:tim',
                'jabatan'       => 'required|',
                'deskripsi'     => 'required|',
                'foto'          => 'file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
        // UPLOAD START
        $image                  = $request->file('foto');
        if (!empty($image)) {
            $filenamewithextension  = $request->file('foto')->getClientOriginalName();
            $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $input['nama_file']     = str_slug($filename, '-') . '-' . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath        = public_path('upload/image/team/');
            $img = Image::make($image->getRealPath(), array(
                'width'     => 150,
                'height'    => 150,
                'grayscale' => false
            ));
            $img->save($destinationPath . '/' . $input['nama_file']);
            $destinationPath = public_path('upload/image/team/');
            $image->move($destinationPath, $input['nama_file']);
            // END UPLOAD
            $slug_team = str_slug($request->nama_lengkap, '-');
            DB::table('tim')->insert([
                'id'                => Uuid::uuid4(),
                'nama_lengkap'      => $request->nama_lengkap,
                'slug_name'         => $slug_team,
                'jabatan'           => $request->jabatan,
                'created_at'        => date('Y-m-d'),
                'deskripsi'         => $request->deskripsi,
                'foto'              => $input['nama_file']
            ]);
        } else {
            $slug_team = str_slug($request->nama_lengkap, '-');
            DB::table('tim')->insert([
                'id'                => Uuid::uuid4(),
                'nama_lengkap'      => $request->nama_lengkap,
                'slug_name'         => $slug_team,
                'jabatan'           => $request->jabatan,
                'created_at'        => date('Y-m-d'),
                'deskripsi'         => $request->deskripsi,
            ]);
        }
        return redirect('admin/team')->with(['sukses' => 'Data telah ditambah']);
    }

    // Delete
    public function delete($id)
    {
        if (Session()->get('username') == "") {
            return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        } elseif (Session()->get('akses_level') == "User") {
            return redirect('admin\dasbor')->with(['warning' => 'Mohon maaf, Anda Bukan Admin']);
        } else
            DB::table('tim')->where('id', $id)->delete();
        return redirect('admin/team')->with(['sukses' => 'Data telah dihapus']);
    }

    //edit
    public function proses(Request $request)
    {
        if (Session()->get('username') == "") {
            return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        } elseif (Session()->get('akses_level') == "User") {
            return redirect('admin\dasbor')->with(['warning' => 'Mohon maaf, Anda Bukan Admin']);
        } else
            // UPLOAD START
            $image                  = $request->file('foto');
        if (!empty($image)) {
            // UPLOAD START
            $filenamewithextension  = $request->file('foto')->getClientOriginalName();
            $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $input['nama_file']     = str_slug($filename, '-') . '-' . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath        = public_path('upload/image/team/');
            $img = Image::make($image->getRealPath(), array(
                'width'     => 150,
                'height'    => 150,
                'grayscale' => false
            ));
            $img->save($destinationPath . '/' . $input['nama_file']);
            $destinationPath = public_path('upload/image/team/');
            $image->move($destinationPath, $input['nama_file']);
            // END UPLOAD
            $slug_team = str_slug($request->nama_lengkap, '-');
            DB::table('tim')->where('id', $request->id)->update([
                'nama_lengkap'      => $request->nama_lengkap,
                'slug_name'         => $slug_team,
                'jabatan'           => $request->jabatan,
                'deskripsi'         => $request->deskripsi,
                'updated_at'        => date('Y-m-d'),

                'foto'              => $input['nama_file']
            ]);
        } else {
            $slug_team = str_slug($request->nama_lengkap, '-');
            DB::table('tim')->where('id', $request->id)->update([
                'nama_lengkap'      => $request->nama_lengkap,
                'slug_name'         => $slug_team,
                'jabatan'           => $request->jabatan,
                'updated_at'        => date('Y-m-d'),
                'deskripsi'         => $request->deskripsi
            ]);
        }
        return redirect('admin/team')->with(['sukses' => 'Data telah diupdate']);
    }
    // Proses
    public function proses_multi(Request $request)
    {
        $site   = DB::table('konfigurasi')->first();
        // PROSES HAPUS MULTIPLE
        if (isset($_POST['hapus'])) {
            $id_team       = $request->id;
            for ($i = 0; $i < sizeof($id_team); $i++) {
                DB::table('tim')->where('id', $id_team[$i])->delete();
            }
            return redirect('admin/team')->with(['sukses' => 'Data telah dihapus']);
            // PROSES SETTING DRAFT
        } elseif (isset($_POST['update'])) {
            $id_team       = $request->id;
            for ($i = 0; $i < sizeof($id_team); $i++) {
                DB::table('tim')->where('id', $id_team[$i])->update([
                    'id_user'               => Session()->get('id_user'),
                    'id'    => $request->id
                ]);
            }
            return redirect('admin/team')->with(['sukses' => 'Data telah diubah']);
        }
    }
}
