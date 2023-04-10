<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function main(){
        return view('main');
    }
    public function welcome(){
        // return view('welcome',['name'=>"Sher"]);
        return view('welcome',['name'=>"<script>alert('salom')</script>"]);
    }
    public function about(){
        return view('about');
    }
    public function service(){
        return view('service');
    }
    public function project(){
        return view('project');
    }
    public function contact(){
        return view('contact');
    }

}
