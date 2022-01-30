<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(){
        return view('admin.pages.Product.list');
    }

    public function create(){
        return view('admin.pages.Product.create');
    }
}