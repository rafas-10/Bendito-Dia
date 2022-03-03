<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlatilloController extends Controller
{
    public function index(){
        return view('platillos.index');
    }

    public function create(){
        return view('platillos.create');
    }

    public function show(){
        return "";
    }

}
