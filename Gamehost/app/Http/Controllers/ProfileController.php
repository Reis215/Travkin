<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller

    {
    public function index(){ 
        $userId = request()->user()->id; 
        $profile = User::find($userId);
        
        return view('profile',['profile'=>$profile]);
    }
    
    public function del(Request $data){
        DB::table('users')->where('title','=', $data->title)->delete();
        return redirect('admin');
    }
    public function red(Request $data){
        DB::table('users')
        ->where('id', '=', $data-> id)
        ->update(['name' => $data -> name]);
        DB::table('users')
        ->where('id', '=', $data-> id)
        ->update(['surname' => $data -> surname]);
        DB::table('users')
        ->where('id', '=', $data-> id)
        ->update(['patronymic' => $data -> patronymic]);
        DB::table('users')
        ->where('id', '=', $data-> id)
        ->update(['login' => $data -> login]);
        DB::table('users')
        ->where('id', '=', $data-> id)
        ->update(['email' => $data -> email]);
        return redirect('profile');
    }
   
}
