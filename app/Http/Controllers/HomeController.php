<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
//     public function index($user){
//         $user = User::find($user);
//         return view('home',
//             ['user'=> $user,]);
// }

public function index(){
    $user = User::all();
    return view('home',
        ['user'=> $user,]);
}
    public function welcome(){
        return view('welcome');
    } 

    public function about(){
        return view('about') ;
    }

    public function contact(){
        return view('contact');
    }
}
