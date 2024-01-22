<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function learning(){
        return view('learning');
    }

    public function plans(){

        return view('plans');
    }

    public function tutor(){
        return view('tutor');
    }

    public function about(){
        return view('about');
    }
}
