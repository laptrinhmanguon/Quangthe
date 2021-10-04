<?php

namespace App\Http\Controllers\Modal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class qlsController extends Controller
{
    public function index(Request $request){
        return view('modal/qls/index');

    }
    public function viewAdd(Request $request){

    }
}
