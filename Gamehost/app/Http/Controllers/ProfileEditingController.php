<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileEditingController extends Controller
{ 
    public function editingprofile(Request $data){
        $editingprofile = User::query()->where('id','=',$data->id)->get();
        return view('editingprofile',['editingprofile'=>$editingprofile]);
        
}
    public function red(Request $data){
        DB::table('users')
        ->where('id', '=', $data -> id)
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
