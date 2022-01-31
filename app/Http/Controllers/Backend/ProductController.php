<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(){
        $products=Product::with('category','brand')->get();
        return view('admin.pages.Product.list',compact('products'));
    }

    public function create(){
        $categories=Category::all();
        $brands=Brand::all();
        return view('admin.pages.Product.create',compact('categories','brands'));
    }

    public function store(Request $request)
        {
            // dd($request->all());
            $filename='';
            if ($request->hasFile('image'))
            {
                
                $file=$request->file('image');
                $filename=date('Ymdhms').'.'.$file->getclientOriginalExtension();
                $file->storeAs('/uploads',$filename);
            }
            //dd('ok');
    
            //product validation
            
            $request->validate([
                'name'=>'required',
                'price'=>'required|numeric',
                'description'=>'required',
                'category'=>'required',
                'brand'=>'required',

            ]);

            Product::create([

                'name'=>$request->name,
                'price'=>$request->price,
                'description'=>$request->description,
                'category_id'=>$request->category,
                'brand_id'=>$request->brand,
                'image'=>$filename,
                
            ]); 
            return redirect()->back()->with('success','Product added successfully..');
        }

        public function edit($id)
    {
         // dd($id);
        $product = Product::find($id);
        //dd(product)
        $categories=Category::all();
        $brands=Brand::all();
        if($product){
            return view('admin.pages.Product.edit',compact('product','categories','brands'));
        }
    }

    public function update(Request $request,$id)
        {
            $filename='';
            if ($request->hasFile('image'))
            {
                $file=$request->file('image');
                $filename=date('Ymdhms').'.'.$file->getclientOriginalExtension();
                $file->storeAs('/uploads',$filename);
            }
            // dd($request->all());
            // dd($id);
            $product = Product::find($id);
            // dd($product);
            if ($product) {
                $product->update([
                'name'=>$request->name,
                'price'=>$request->price,
                'description'=>$request->description,
                'category_id'=>$request->category,
                'brand_id'=>$request->brand,
                'image'=>$filename,
            ]); 
            return redirect()->back()->with('success','Product updated successfully!');
   }
}
        public function delete($id)
        {
            Product::find($id)->delete();
            return redirect()->back()->with('msg','Product deleted successfully!');

        }
}