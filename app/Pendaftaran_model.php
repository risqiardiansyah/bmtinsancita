<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pendaftaran_model extends Model
{
    // nomor_akhir
    public function nomor_akhir()
    {
    	$query = DB::table('pendaftaran')
            ->select('*')
            ->orderBy('id','DESC')
            ->first();
        return $query;
    }
}
