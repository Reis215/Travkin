<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditingController extends Controller
{
    public function editing(Request $data){
        $editing = Catalog::query()->where('id','=',$data->id)->get();
        return view('editing',['editing'=>$editing]);
        
    }
    public function red(Request $data){
        DB::table('catalogs')
        ->where('id', '=', $data-> id)
        ->update(['title' => $data -> title]);
        DB::table('catalogs')
        ->where('id', '=', $data-> id)
        ->update(['img' => $data -> img]);
        DB::table('catalogs')
        ->where('id', '=', $data-> id)
        ->update(['price' => $data -> price]);
        DB::table('catalogs')
        ->where('id', '=', $data-> id)
        ->update(['Sostav' => $data -> Sostav]);
        DB::table('catalogs')
        ->where('id', '=', $data-> id)
        ->update(['Bec' => $data -> Bec]);
        DB::table('catalogs')
        ->where('id', '=', $data-> id)
        ->update(['category' => $data -> category]);
        return redirect('catalog');
    }
}
