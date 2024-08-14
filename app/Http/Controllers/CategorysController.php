<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategorysController extends Controller
{
    public function create(Request $request){
        dd($request);
    }
    public function add(){
        return view('categorys.add');
    }
}
