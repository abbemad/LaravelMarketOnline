<?php

namespace App\Http\Controllers;

use App\Product;
use DB;
use Illuminate\Http\Request;

class ProductController extends AdminController
{

    public function index()
    {
        //
        $products = DB::table('product')
            ->selectRaw('product.id, 
            product.name, 
            product.description, 
            product.stock, 
            product.price, 
            product.amount, 
            product.user_id, 
            product.created_at,
            product.updated_at')

            ->get();

        return view('products.index', ['products'=> $products]);
    }

    public function create()
    {
        //
        return view('products.create');
    }

    public function store(Request $request)
    {
        //
        $data = [   'name'=>$request->name,
                    'description'=>$request->description,
                    'stock'=>$request->stock,
                    'price'=>$request->price,
                    'amount'=>$request->amount,
                    'user_id' => auth()->user()->id];

        DB::table('product')->insert($data);
        return back();
    }

    public function show(Product $product)
    {
        //

    }

    public function edit(Request $request, $id)
    {
        //
        $product = DB::table('product')->where('id',$id)->first();
        return view('products.edit',compact('product'))->with('id',$id);

            // $products = DB::table('product')->where('id',$id)->first();
            // return view('products.edit')->with('id',$id);
        
    }

    public function update(Request $request)
    {
        //        
        $data = [   'name'=>$request->name,
                    'description'=>$request->description,
                    'stock'=>$request->stock,
                    'price'=>$request->price,
                    'amount'=>$request->amount,
                    'user_id' => auth()->user()->id];

        DB::table('product')->where('id',$request->id)->update($data);
        return redirect('admin/products');
    }

    public function destroy(Request $request)
    {
        DB::table('product')->where('id',$request->id)->delete();
        return redirect('admin/products');
    }
}
