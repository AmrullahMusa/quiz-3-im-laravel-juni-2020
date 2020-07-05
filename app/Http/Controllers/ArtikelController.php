<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
   public function create(){
    return view('form');
   }

   public function store(Request $request){
    $data = $request->all();
    ArtikelModel::save($data);
    // $artikelpost = ArtikelModel::create(['slug' => Str::slug($request->judul)]);
    return redirect('/artikel');
}

public function index(){
    $artikels = ArtikelModel::get_all();
    return view('artikel', compact ('artikels'));
}

public function show($id){
    $artikel = ArtikelModel::find_by_id($id);
    return view('detail_artikel', compact('artikel'));
}

public function edit($id){
    $artikel = ArtikelModel::find_by_id($id);
    //$data = $request->all();
    return view ('edit', compact('artikel', 'id'));
   }

   public function update(Request $request){
    $data = $request->all();
    unset($data["_token"]);
    unset($data["_method"]);
    //dd($data);
    ArtikelModel::update($data);
    return redirect('/artikel');
   }

   public function delete($id){
    ArtikelModel::delete($id);
    return redirect('/artikel');
   }
}
