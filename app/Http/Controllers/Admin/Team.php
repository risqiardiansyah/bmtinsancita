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
        }
        $myteam  = new Team_model();
        $team    = $myteam->semua();
        $teams 	= DB::table('tim')->orderBy('id','ASC')->get();


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
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
    	request()->validate([
					        'nama_lengkap'  => 'required|unique:tim',
					        'jabatan'       => 'required|',
                            "telp"          => "required|unique:tim|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:13",
					        'facebook'      => 'required|unique:tim',
                            'foto'          => 'file|image|mimes:jpeg,png,jpg|max:2048',
					        ]);
        // UPLOAD START
        $image                  = $request->file('foto');
        if(!empty($image)) {
            $filenamewithextension  = $request->file('foto')->getClientOriginalName();
            $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $input['nama_file']     = str_slug($filename, '-').'-'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath        = public_path('upload/image/thumbs/');
            $img = Image::make($image->getRealPath(),array(
                'width'     => 150,
                'height'    => 150,
                'grayscale' => false
            ));
            $img->save($destinationPath.'/'.$input['nama_file']);
            $destinationPath = public_path('upload/image/');
            $image->move($destinationPath, $input['nama_file']);
            // END UPLOAD
            DB::table('tim')->insert([
                'id'                => Uuid::uuid4(),
                'nama_lengkap'      => $request->nama_lengkap,
                'jabatan'           => $request->jabatan,
                'telp'              => $request->telp,
                'facebook'          => $request->facebook,
                'foto'              => $input['nama_file']
            ]);
        }else{
            DB::table('tim')->insert([
                'id'                => Uuid::uuid4(),
                'nama_lengkap'      => $request->nama_lengkap,
                'jabatan'           => $request->jabatan,
                'telp'              => $request->telp,
                'facebook'          => $request->facebook,
            ]);
        }
        return redirect('admin/team')->with(['sukses' => 'Data telah ditambah']);
    }

    // Delete
    public function delete($id)
    {
    	if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
    	DB::table('tim')->where('id',$id)->delete();
    	return redirect('admin/team')->with(['sukses' => 'Data telah dihapus']);
    }

    //edit

    public function proses(Request $request)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        // UPLOAD START
        $image                  = $request->file('foto');
        if(!empty($image)) {
            // UPLOAD START
            $filenamewithextension  = $request->file('foto')->getClientOriginalName();
            $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $input['nama_file']     = str_slug($filename, '-').'-'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath        = public_path('upload/image/thumbs/');
            $img = Image::make($image->getRealPath(),array(
                'width'     => 150,
                'height'    => 150,
                'grayscale' => false
            ));
            $img->save($destinationPath.'/'.$input['nama_file']);
            $destinationPath = public_path('upload/image/');
            $image->move($destinationPath, $input['nama_file']);
            // END UPLOAD
            DB::table('tim')->where('id',$request->id)->update([
                'nama_lengkap'      => $request->nama_lengkap,
                'jabatan'           => $request->jabatan,
                'telp'              => $request->telp,
                'facebook'          => $request->facebook,
                'foto'              => $input['nama_file']
            ]);
        }else{
            DB::table('tim')->where('id',$request->id)->update([
                'nama_lengkap'      => $request->nama_lengkap,
                'jabatan'           => $request->jabatan,
                'telp'              => $request->telp,
                'facebook'          => $request->facebook,
            ]);
        }
        return redirect('admin/team')->with(['sukses' => 'Data telah diupdate']);


    }

      // Proses
      public function deletemultiple(Request $request)
      {
          // PROSES HAPUS MULTIPLE
          if(isset($_POST['hapus'])) {
              $id       = $request->id;
              for($i=0; $i < sizeof($id);$i++) {
                  DB::table('tim')->where('id',$id[$i])->delete();
              }
              return redirect('admin/team')->with(['sukses' => 'Data telah dihapus']);
          }
      }
     
}
