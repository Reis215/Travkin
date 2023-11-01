<?php

namespace App\Http\Controllers;


use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateController extends Controller
{
    
    public function create(){
        return view('create');
    }
    public function add(Request $data){
        $catalog = new Catalog();
        $catalog->title = $data->title;
        $catalog->img = $data->img;
        $catalog->price = $data->price;
        $catalog->Sostav = $data->Sostav;
        $catalog->Bec = $data->Bec;
        $catalog->category = $data->category;
        $catalog->cart = 0;
        $catalog->save();
        return redirect('create');
    }

}
