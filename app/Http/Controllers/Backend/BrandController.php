<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function list(){
        $brands =Brand:: all();
        return view('admin.pages.Brand.list',compact('brands'));
    }

    public function create(){
        return view('admin.pages.Brand.create');
    }

    public function store(Request $request){

        //dd('ok');  
         //Brand validation

         $request->validate([
            'name'=>'required',
            'description'=>'required',
         ]);

         //dd($request->all());
         Brand::create([
            'name'=>$request->name,
            'description'=>$request->description,
        ]);
        return redirect()->back()->with('success','Brand Add successfully..');
    } 
}