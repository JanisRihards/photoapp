<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function main(){
        return view('pages/main');
    }
    public function about(){
        return view('pages/about');
    }
    public function blog(){
        $data = array (
            'services' => ['Web Design' , 'Programming' , 'Databae']
        );
        return view('pages/blog')->with($data);
    }
}
