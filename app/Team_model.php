<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Team_model extends Model
{
    protected $table 		= "tim";
	protected $primaryKey 	= 'id';

    // semua
    public function semua()
    {
        $query = DB::table('tim')
            ->select('*')
            ->orderBy('id','DESC')
            ->get();
        return $query;
    }

    public function read($slug_name)
    {
        $query = DB::table('tim')
            ->select('*')
            ->where('tim.slug_name',$slug_name)
            ->orderBy('id','DESC')
            ->first();
        return $query;
    }
}
