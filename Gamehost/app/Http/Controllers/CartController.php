<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index(){
        $cart = Catalog::query()->where('cart','!=', 0)->get();

        return view('cart',['cart'=>$cart]);
    }
    public function add(Request $data){
        $cartt = Catalog::query()->where('id','=',$data->id)->get();
        $carttt = $cartt[0]->cart + 1;

        DB::table('catalogs')->where('id','=',$data->id)->update(['cart'=>$carttt]);
        return redirect('cart');
    }
    public function del(Request $data){
        $cartt = Catalog::query()->where('id','=',$data->id)->get();
        $carttt = $cartt[0]->cart - 1;

        DB::table('catalogs')->where('id','=',$data->id)->update(['cart'=>$carttt]);
        return redirect('cart');
    }
    public function fulldel(){
        DB::table('catalogs')->where('id','!=',0)-> update(['cart'=>null]);
        return redirect('cart');
    }
}
