<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Testimoni_model extends Model
{
    protected $table 		= "testimoni";
	protected $primaryKey 	= 'id';

    // semua
    public function semua()
    {
        $query = DB::table('testimoni')
            ->select('*')
            ->orderBy('id','DESC')
            ->get();
        return $query;
    }


}

