<?php

namespace App\Http\Controllers;
use App\Models\Personel;
use App\Models\Kategori;
use Illuminate\Http\Request;

class MenuController extends Controller
{
   
    
        public function menuFilter()
        {    
            $kategoriListe = Kategori::all();
            $menuListe = Personel::all();
            
            return view('menuFilter', compact('kategoriListe', 'menuListe')); 
        }
        
 }

