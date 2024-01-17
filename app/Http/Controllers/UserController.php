<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserPolice;
use \Illuminate\Support\Facades\Hash;
use \Illuminate\Support\Facades\Session;
class UserController extends Controller
{
    function login(){
        return view("login");
    }

    function reallogin(Request $request){
        $request->validate([
            'name'=>'required',
            'password'=> 'required',
            
            ]);
$user = User::where('name','=',$request->name)->first();
if($user){
    if(Hash::check($request->password,$user->password)){
        $request->session()->put('id', $user->id);
        return redirect('dashboard');

    }
    else{
        return back()->with('error','fk off inforimtion not right');
    }
}
    }
    function create(UserPolice $request){
$user = New User();
$user->name = $request->name;
$user->email = $request->email;
$user->password = Hash::make($request->password);
$res = $user->save();
if($res){
return back()->with('success','Nice U did it');
}
else{
return back()->with('error','fk u');
}
    }
    function signup(){
        return view('signup');
    }
    function dashboard(){
        $data = array();
        if(Session::has('id')){
            $data = User::where('id','=',Session::has('id'))->first();
        }
        return view('dashboard',compact('data'));

    }
    function logout(){
        if(Session::has('id')){
Session::pull('id');
return redirect('Home');
        }
    }
}
