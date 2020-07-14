<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Pesan extends Controller
{
    public function index()
    {
    	if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
		$pesan 	= DB::table('pesan')->orderBy('id','DESC')->get();

		$data = array(  'title'     => 'Pesan',
                        'pesan'      => $pesan,
                        'aktif'        => 'pesan',
                        'content'   => 'admin/pesan/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

     // Delete
     public function delete($id)
     {
         if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
         DB::table('pesan')->where('id',$id)->delete();
         return redirect('admin/pesan')->with(['sukses' => 'Data telah dihapus']);
     }

     public function proses(Request $request)
     {
         // PROSES HAPUS MULTIPLE
         if(isset($_POST['hapus'])) {
             $id       = $request->id;
             for($i=0; $i < sizeof($id);$i++) {
                 DB::table('pesan')->where('id',$id[$i])->delete();
             }
             return redirect('admin/pesan')->with(['sukses' => 'Data telah dihapus']);
         }
     }
}
