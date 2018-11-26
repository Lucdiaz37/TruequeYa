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
        $limit = 9;

        $products = Product::paginate($limit);
        return view('products.index')->with('products', $products);
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
        $product->active = 1;
        
        if($request->file('photopath') !== null) {
            $file = $request->file('photopath')->store('uploads');
            $product->photopath = $file;
        }
        
        $product->save();

        return redirect('/products/' . $product->name);

    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $product = Product::where('name', $name)->first();
        return view('products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();

        $product = Product::find($id);
        


       return view('products.edit')
       ->with('product', $product)
       ->with('category', $product->category)
       ->with('categories', $categories);

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

        // Luego  vamos campo por campo asignando el nuevo dato o el que haya quedado en el value
        $product->name = $request->input("name");
        $product->description = $request->input("description");
        $product->location = $request->input("location");
        $product->price = $request->input("price");
        $product->category_id = $request->input("category_id");
        // Y aca, tambien usamos save(), porque es la misma operacion pero sobre algo que ya existe
        $product->save();

        //en este caso, redirigimos al perfil de la pelicula que editamos para observar los cambios
        return redirect("/products/$product->name");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
