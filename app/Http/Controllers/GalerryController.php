<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalerryController extends Controller
{
    public function index(){
        return view('main.layouts.main');
    }
    public function photos(){
        return view('main.layouts.category');
    }
}
