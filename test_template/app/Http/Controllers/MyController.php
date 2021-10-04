<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function view2(){
        $tieude = "Hello Word";
        $noidung ="blog tam su";

        return view('home',[
            'tieude'=> $tieude,
            'noidung'=> $noidung
        ]);
    }
}
