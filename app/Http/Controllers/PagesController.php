<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function index(){
        $name= 'index';
        return view('pages.index')->with('name',$name );
    }

}
