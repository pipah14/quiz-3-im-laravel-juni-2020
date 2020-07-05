<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    //
    public static function save($data){
        //hapus data _token 
        unset($data["_token"]);
        $new_artikel = DB::table('artikels')->insert($data);
        return $new_artikel;
    }
    public static function get_all(){
        $artikel = DB::table('artikels')->get(); //get memunculkan semua data
        return $artikel;
    }
}
