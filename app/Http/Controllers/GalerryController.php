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
    public function admin(){
        return view('admin.layouts.dashboard.index');
    }
    public function foto(){
        return view('admin.layouts.foto.index');
    }
}
