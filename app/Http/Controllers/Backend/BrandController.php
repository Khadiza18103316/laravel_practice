<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function list(){
        return view('admin.pages.Brand.list');
    }

    public function create(){
        return view('admin.pages.Brand.create');
    }
}
