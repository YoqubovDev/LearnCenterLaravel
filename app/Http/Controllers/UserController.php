<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('dashboard');
    }
    public function payment(){
        return view('payment');
    }
    public function group(){
        return view('group');
    }
    public function pointer(){
        return view('pointer');
    }
    public function ranking(){
        return view('ranking');
    }
    public function shop()
    {
        return view('shop');

    }
    public function extraLesson()
    {
        return view('extraLesson');

    }
    public function setting()
    {
        return view('setting');

    }

    }
}
