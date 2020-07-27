<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Testimoni_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;
use Image;

class Testimoni extends Controller
{
    public function index()
    {
        if(Session()->get('username')=="") 
        { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }elseif(Session()->get('akses_level')=="User") 
        { return redirect('admin\dasbor')->with(['warning' => 'Mohon maaf, Anda Bukan Admin']);
        }else
        $mytesti  = new Testimoni_model();
        $testi    = $mytesti->semua();
        $testimoni 	= DB::table('testimoni')->orderBy('id','ASC')->get();


        $data = array(
            'title'        => 'Our Testimoni Member',
            'testi'        => $testi,
            'testimoni'    => $testimoni,
            'aktif'        => 'testimoni',
            'content'      => 'admin/konfigurasi/testimoni'
        );
        return view('admin/layout/wrapper', $data);
    }

    public function addtestimoni(Request $request)
    {
        if(Session()->get('username')=="") 
        { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }elseif(Session()->get('akses_level')=="User") 
        { return redirect('admin\dasbor')->with(['warning' => 'Mohon maaf, Anda Bukan Admin']);
        }else
    	request()->validate([
					        'pekerjaan'       => 'required|',
					        'message'       => 'required',
                            'foto'          => 'file|image|mimes:jpeg,png,jpg|max:2048',
					        ]);
        // UPLOAD START
        $image                  = $request->file('foto');
        if(!empty($image)) {
            $filenamewithextension  = $request->file('foto')->getClientOriginalName();
            $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $input['nama_file']     = str_slug($filename, '-').'-'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath        = public_path('upload/image/galeri/');
            $img = Image::make($image->getRealPath(),array(
                'width'     => 150,
                'height'    => 150,
                'grayscale' => false
            ));
            $img->save($destinationPath.'/'.$input['nama_file']);
            $destinationPath = public_path('upload/image/galeri/');
            $image->move($destinationPath, $input['nama_file']);
            // END UPLOAD
            DB::table('testimoni')->insert([
                'id'                => Uuid::uuid4(),
                'pekerjaan'           => $request->pekerjaan,
                'message'              => $request->message,
                'foto'              => $input['nama_file']
            ]);
        }else{
            DB::table('testimoni')->insert([
                'id'                => Uuid::uuid4(),
                'pekerjaan'           => $request->pekerjaan,
                'message'              => $request->message,
            ]);
        }
        return redirect('admin/testimoni')->with(['sukses' => 'Data telah ditambah']);
    }

    public function prosesedit(Request $request)
    {
        if(Session()->get('username')=="") 
        { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }elseif(Session()->get('akses_level')=="User") 
        { return redirect('admin\dasbor')->with(['warning' => 'Mohon maaf, Anda Bukan Admin']);
        }else
        // UPLOAD START
        $image                  = $request->file('foto');
        if(!empty($image)) {
            // UPLOAD START
            $filenamewithextension  = $request->file('foto')->getClientOriginalName();
            $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $input['nama_file']     = str_slug($filename, '-').'-'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath        = public_path('upload/image/galeri/');
            $img = Image::make($image->getRealPath(),array(
                'width'     => 150,
                'height'    => 150,
                'grayscale' => false
            ));
            $img->save($destinationPath.'/'.$input['nama_file']);
            $destinationPath = public_path('upload/image/galeri/');
            $image->move($destinationPath, $input['nama_file']);
            // END UPLOAD
            DB::table('testimoni')->where('id',$request->id)->update([
                'pekerjaan'           => $request->pekerjaan,
                'message'              => $request->message,
                'foto'              => $input['nama_file']
            ]);
        }else{
            DB::table('testimoni')->where('id',$request->id)->update([
                'pekerjaan'           => $request->pekerjaan,
                'message'              => $request->message,
            ]);
        }
        return redirect('admin/testimoni')->with(['sukses' => 'Data telah diupdate']);

    }

    public function delete($id)
    {
        if(Session()->get('username')=="") 
        { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }elseif(Session()->get('akses_level')=="User") 
        { return redirect('admin\dasbor')->with(['warning' => 'Mohon maaf, Anda Bukan Admin']);
        }else
    	DB::table('testimoni')->where('id',$id)->delete();
    	return redirect('admin/testimoni')->with(['sukses' => 'Data telah dihapus']);

    }
    // proses_multi
    public function proses_multi(Request $request)
    {
        $site   = DB::table('konfigurasi')->first();
        // PROSES HAPUS MULTIPLE
        if(isset($_POST['hapus'])) {
            $id_testimoni       = $request->id;
            for($i=0; $i < sizeof($id_testimoni);$i++) {
                DB::table('testimoni')->where('id',$id_testimoni[$i])->delete();
            }
            return redirect('admin/testimoni')->with(['sukses' => 'Data telah dihapus']);
        // PROSES SETTING DRAFT
        }
        return redirect('admin/testimoni')->with(['sukses' => 'Data telah diubah']);
    }
}
