<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User_model;
use App\Rules\Captcha;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class Login extends Controller
{
    // Homepage
    public function index()
    {
        $site     = DB::table('konfigurasi')->first();
        $data = array(  'title'     => 'Login'.' - '.$site->namaweb);
        return view('login/index',$data);
    }

    // Cek
    public function cek(Request $request)
    {
        // $request->validate([
        //     'g-recaptcha-response' => new Captcha(),
        // ]);
        $username   = $request->username;
        $password   = $request->password;
        $model      = new User_model();
        $user       = $model->login($username,$password);
        if($user) {
            $request->session()->put('id_user', $user->id_user);
            $request->session()->put('nama', $user->nama);
            $request->session()->put('username', $user->username);
            $request->session()->put('akses_level', $user->akses_level);
            return redirect('admin/dasbor')->with(['sukses' => 'Anda berhasil login']);
        }else{
            return redirect('login')->with(['warning' => 'Mohon maaf, Username atau password salah']);
        }
    }

    // Homepage
    public function logout()
    {
        Session()->forget('id_user');
        Session()->forget('nama');
        Session()->forget('username');
        Session()->forget('akses_level');
        return redirect('login')->with(['sukses' => 'Anda berhasil logout']);
    }

    // Homepage
    public function lupa()
    {
        $data = array(  'title'     => 'Login - Java Web Media');
        return view('login/lupa',$data);
    }

    public function make_hash()
    {
        $password = Hash::make('12345678');
        echo $password;
        exit();
    }
}