<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index')->with('products', Product::paginate(9))->with('categories', Category::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create')->with('categories', Category::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rule = [
            'name' => 'required',
            'description' => 'required',
            'location' => 'required',
            'category_id' => 'required',
            'photopath' => 'nullable',
            'price' => 'required'
        ];

        
        $messages = [
            'required' => ':attribute es obligatorio'
        ];

        $this->validate($request, $rule, $messages);

        $product = new Product($request->all());
        
        if($request->file('photopath') !== null) {
            $file = $request->file('photopath')->store('uploads', 'public');
            $product->photopath = $file;
        }
        
        $product->save();

        return redirect('/products/' . $product->id);

    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('products.show')->with('product', Product::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       return view('products.edit')
       ->with('product', Product::find($id))
       ->with('category', Product::find($id)->category)
       ->with('categories', Category::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        
        $product->name = $request->input("name");
        $product->description = $request->input("description");
        $product->location = $request->input("location");
        $product->price = $request->input("price");
        $product->category_id = $request->input("category_id");

        $product->save();

        
        return redirect("/products/$product->name");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('/products');
    }
}
