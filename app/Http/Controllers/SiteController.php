<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personel;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Storage;
use View;
use Illuminate\Support\Facades\Validator;
class SiteController extends Controller
{    
    function __construct(){
    $this->middleware('auth');
    $kategoriListe=Kategori::get();
    View::share(['kategoriListe'=>$kategoriListe]);
    $menuListe=Personel::get();
    View::share(['menuListe'=>$menuListe]);

    }


    public function denemeMetod(){
        return view('menusablon');
    }
    
    public function menulerMetodu(){
        $menuEkle = Personel::get();
        return view('Admin.personel',compact("menuEkle"));
    }
    

    public function menuDuzenle($id = false){
        $personel = null;
        if($id)
            $personel = Personel::where('id',$id)->firstOrFail();
        return view('Admin/personel-düzenle',compact("personel"));
    }
    

        public function menuKaydet(Request $request,$id = false){
        $validator = Validator::make($request->all(), [
            'fotograf' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
          
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $personel = '';
        $dosyaYolu = '';

        if($id){
            $personel = Personel::where('id',$id)->firstOrFail();
        }
        else{
            $personel = new Personel;
        }
        
        if ( $request->hasFile('fotograf') ) {  
            $file_name = time().'.'.$request->fotograf->extension(); 
            $request->fotograf->move(public_path('uploads'), $file_name);
            $dosyaYolu = '/uploads/'.$file_name;
        }
     
       // $personel->personel_adi = $request->personel_adi;
       // $personel->personel_soyadi = $request->personel_soyadi;
       // $personel->birimi = $request->birimi;
       // $personel->kimlik = $request->kimlik;
         
     
         
        $personel->fill($request->all());
        $personel->fotograf = $dosyaYolu;
        $personel->save();
        return redirect()->to('/menu');
       

    }
    
    public function menuSil(Request $request,$id = false)
    {
        $personel = Personel::find($id);
        if (!$personel) {
            return redirect()->back()->with('error', 'Personel bulunamadı.');
        }
       
        $personel->delete();
        return redirect()->route('menuEkle')->with('success', 'Personel başarıyla silindi.');
    }


    public function kategoriMetod(){
        return view('sablon');
    }
     
    public function kategoriMethodu ()
    {
        $kategoriEkle= Kategori::get();
        return view('kategori', compact('kategoriEkle'));
    }
    
    public function kategoriDuzenle($id = false)
    {
        $kategori = null;
        if ($id) {
            $kategori = Kategori::where('id', $id)->firstOrFail();
        }
        return view('Admin/kategori-duzenle', compact('kategori'));
    }
   
    public function kategoriKaydet(Request $request, $id = false)
    {   
    
        $kategori = '';
        if ($id) {
            $kategori = Kategori::where('id', $id)->firstOrFail();
        } else {
            $kategori = new Kategori;
        }
    
        $kategori->fill($request->all());
        $kategori->save();
        return redirect()->route('kategoriListe')->with('success', 'Kategori başarıyla kaydedildi.');
    }
    
    public function kategoriSil(Request $request, $id = false)
    {
        $kategori = Kategori::find($id);
        if (!$kategori) {
            return redirect()->back()->with('error', 'Kategori bulunamadı.');
        }
        $kategori->delete();
        return redirect()->route('kategoriListe')->with('success', 'Kategori başarıyla silindi.');
    }
    
    public function kategoriMetodu()
    {
       $kategoriEkle = Kategori::all();
          return view('kategori', compact('kategoriEkle'));
    }

    public function kategoriListesi($id = false)
    {
        $kategoriListe = "";
        if ($id) {
            $kategoriListe = Kategori::where('id', $id)->firstOrFail();
        }
        $kategoriListe = Kategori::get();
        return view('Admin/liste', compact("kategoriListe"));
   }



   public function menuMetodu()
   {
      $menuEkle = Personel::all();
         return view('personel', compact('menuEkle'));
   }

   public function menuListesi($id = false)
   {
       $menuListe = "";
       if ($id) {
           $menuListe = Personel::where('id', $id)->firstOrFail();
       }
       $menuListe = Personel::get();
       return view('Admin/menu', compact("menuListe"));
  }


}
   



