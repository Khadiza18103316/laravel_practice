<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list(){
        $categories =Category:: all();
        return view('admin.pages.Category.list',compact('categories'));
    }

    public function create(){
        return view('admin.pages.Category.create');
    }

    public function store(Request $request){

        $filename="";
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $filename=date('Ymdhms').'.'.$file->getclientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }
        //dd('ok');  
         //category validation
            
         $request->validate([
            'name'=>'required',
            'description'=>'required',
         ]);

         //dd($request->all());
         Category::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$filename,

        ]);
        return redirect()->back()->with('success','Category Add successfully..');
    } 
    }