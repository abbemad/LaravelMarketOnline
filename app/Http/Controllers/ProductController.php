<?php

namespace App\Http\Controllers;

use App\Product;
use DB;
use Illuminate\Http\Request;

class ProductController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

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

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
        $product = DB::table('product')->where('id',$id)->first();
        return view('products.edit',compact('product'))->with('id',$id);

            // $products = DB::table('product')->where('id',$id)->first();
            // return view('products.edit')->with('id',$id);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        DB::table('product')->where('id',$request->id)->delete();
        return redirect('admin/products');
    }
}
