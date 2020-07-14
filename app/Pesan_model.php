<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pesan_model extends Model
{

    use SoftDeletes;
    protected $table = "pesan";
    protected $primaryKey = "id";
    protected $fillable = ["name", "phone", "email", "subject", "content"];
    protected $dates = ["deleted_at"];

    public function listing()
    {
    	 $query = DB::table('pesan')
            ->select('*')
            ->orderBy('id','DESC')
            ->first();
        return $query;
    }
}
