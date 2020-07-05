<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

Class ArtikelModel{

    public static function save($data){
        //hapus data _token 
        unset($data["_token"]);
        $new_artikel = DB::table('artikels')->insert($data);
        return $new_artikel;
    }
    public static function get_all(){
        // $artikel = DB::table('artikels')->where('user_id', $id_user)->get();
        $artikels = DB::table('artikels')->get(); //get memunculkan semua data
        return $artikels;
    }

    public static function show($id){
        $artikel = DB::table('artikels')->where('id', $id)->first();
        // ->join('users', 'users.id', '=', 'artikels.user_id')
        // ->select('artikels.*','users.name AS user')
        // ->where('artikels.id', $id)
        // ->first(); //first memunculkan 1 data
        // dd($artikel);
        return $artikel;
    }

    public static function edit($id){
        $artikel = DB::table('artikels')->where('id', $id)->first();
        // dd($artikel);
        return $artikel;
    }

    public static function update($id, $request){
        $artikel = DB::table('artikels')
        ->where('id', $id)
                        ->update([
                            'judul' => $request->judul,
                            'isi' => $request->isi,
                            'slug' => $request->slug,
                            'tag' => $request->tag,
                            'user_id' => $request->user_id,
                        ]);
                                
        return $artikel;
    }

    public static function destroy($id){
        $artikel = DB::table('artikels')
                    ->where('id', $id)
                    ->delete();
        return $artikel;
    }
}
?>