<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class MainController extends Controller
{
//    Главный контроллер
    public function about(){
        $catalog = Catalog::query()->orderBy('id','DESC')->get();
        return view('about',['catalog'=>$catalog]);
    }
    public function catalog(Request $data){
       
        $catalog = Catalog::query()->orderBy('id','DESC')->get(); 
        
        if($data->category != 0){
            if($data->price ==0) {
                $catalog = Catalog::query()->where('category', '=', $data->category)->orderBy('price', 'asc')->get();
            }
            if($data->price ==1) {
                $catalog = Catalog::query()->where('category', '=', $data->category)->orderBy('price', 'asc')->get();
            }
            if($data->price ==2) {
                $catalog = Catalog::query()->where('category', '=', $data->category)->orderBy('price', 'DESC')->get();
            }
        }
        elseif($data->price !=0){
            if($data->price ==0){
                $catalog = Catalog::query()->orderBy('price', 'asc')->get();
            }
            if($data->price ==1){
                $catalog = Catalog::query()->orderBy('price', 'asc')->get();
            }
            if($data->price ==2){
                $catalog = Catalog::query()->orderBy('price', 'DESC')->get();
            }
        }
        return view('catalog',['catalog'=>$catalog ]);
    }
    public function product(Request $data){
        $product = Catalog::query()->where('id','=',$data->id)->get();
        return view('product',['product'=>$product]);
    }
    public function contacts(){
        return view('contacts');
    }
    public function create(){
        return view('create');
    }
  
    
}
