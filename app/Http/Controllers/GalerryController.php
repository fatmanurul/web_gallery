<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalerryController extends Controller
{
    public function index(){
        return view('main.photos.index');
    }
    public function photos(){
        return view('main.land.photos');
    }
    public function admin(){
        return view('admin.layouts.dashboard.index');
    }
    public function foto(){
        return view('admin.layouts.foto.index');
    }
}
