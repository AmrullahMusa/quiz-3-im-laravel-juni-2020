<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArtikelModel {

    // public static function find_by_slug($slug){
    //     $artislug = DB::table('artikel')->where('slug',$slug)->get();
    //     return $artislug;
    //     }
    // protected $artikelers=['slug'];

    public static function get_all(){
        $artikels = DB::table('artikel')->get();
        return $artikels;
    }
    
    public static function save($data){
        unset($data["_token"]);
        $new_artikel = DB::table('artikel')->insert($data); 
        return $new_artikel;
    }
    
    public static function find_by_id($id){
        $artikel = DB::table('artikel')->where('id',$id)->first();
        return $artikel;
        }

    public static function update($data){
        $update = DB::table('artikel')->where('id',$data['id'])->update($data);
        return $update;
        }
        
    public static function delete($id){
        $artikel = DB::table('artikel')->where('id',$id)->delete();
        return 'delete';
            }
        

}