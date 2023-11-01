<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin', compact('users'));
    }
    
    public function del(Request $data){
        DB::table('users')->where('title','=', $data->title)->delete();
        return redirect('admin');
    }
 

    public function red(Request $data){
        // DB::table('catalogs')
        // ->where('id', '=', $data-> id)
        // ->update(['title' => $data -> title]);
        // DB::table('catalogs')
        // ->where('id', '=', $data-> id)
        // ->update(['img' => $data -> img]);
        // DB::table('catalogs')
        // ->where('id', '=', $data-> id)
        // ->update(['price' => $data -> price]);
        // DB::table('catalogs')
        // ->where('id', '=', $data-> id)
        // ->update(['Sostav' => $data -> Sostav]);
        // DB::table('catalogs')
        // ->where('id', '=', $data-> id)
        // ->update(['Bec' => $data -> Bec]);
        // DB::table('catalogs')
        // ->where('id', '=', $data-> id)
        // ->update(['category' => $data -> category]);
        return redirect('admin');
    }
}
