<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ArtikelModel;
class ArtikelController extends Controller
{
    //
    public function create(){
        return view('artikel.form');
    }

    public function store(Request $request){
        $data = $request->all();
        // dd($data);
        unset($data["_token"]);
        ArtikelModel::save($data);
        return redirect('/artikel');
    }

    public function index(){
        $artikels = ArtikelModel::get_all();
        // dd($artikel);
        // dd($artikel);
        return view('artikel.index', compact('artikels'));
    }

    public function show($id){
        $artikel = ArtikelModel::show($id);
        // dd($artikel);
        return view('artikel.show', compact('artikel'));
    }

    public function edit($id){
        $artikel = ArtikelModel::edit($id);
        // dd($artikel);
        return view('artikel.edit', compact('artikel'));
    }

    public function update($id, Request $request){
        $artikel = ArtikelModel::update($id, $request);
        // dd($request);
        return redirect('/artikel');
    }

    public function destroy($id){
        $artikel = ArtikelModel::destroy($id);
        return redirect('/artikel');
    }
}
