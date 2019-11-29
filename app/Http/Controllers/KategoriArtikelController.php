<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;

class KategoriArtikelController extends Controller
{
    public function index(){
    	//Eloquent => ORM (Object Relation Mapping)
    	$ListKategoriArtikel=KategoriArtikel::all(); //select * from kategori_artikel

    	//blade
    	return view('kategori_artikel.index',compact('ListKategoriArtikel'));
    	//return view( view: 'kategori_artikel.index')->with('data',$ListKategoriArtikel);
    }
}
