<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Service extends Controller
{
    // Index
    public function index()
    {
        if (Session()->get('username') == "") {
            return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }
        $service     = DB::table('service')->orderBy('id', 'DESC')->get();

        $data = array(
            'title'     => 'Our Service',
            'service'      => $service,
            'content'   => 'admin/service/index'
        );
        return view('admin/layout/wrapper', $data);
    }

}
