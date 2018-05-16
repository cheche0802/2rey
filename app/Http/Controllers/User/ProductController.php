<?php

namespace App\Http\Controllers\User;

use App\Category;
use App\Detail;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Product;
use App\Store;
use App\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:user.products.index',['only'=>['index']]);
        $this->middleware('permission:user.products.create',['only'=>['create','store']]);
         $this->middleware('permission:user.products.edit',['only'=>['edit','update']]);
         $this->middleware('permission:user.products.destroy',['only'=>['destroy']]);
    }
/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->paginate(5);

        return view('user.products.index', compact('products'));
    }

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $details    = Detail::orderBy('delivery', 'ASC')->pluck('delivery', 'id');

        return view('user.products.create', compact('categories', 'details'));
    }

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
    public function store(ProductStoreRequest $request)
    {
        $product = Product::create($request->all());

        return redirect()->route('products.edit', $product->id)->with('info', 'Producto creado con éxito');
    }
/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function show($id)
    {
        $product = Product::find($id);
        $category_id = Category::find($id);
        $detail_id = Detail::find($id);

        return view('user.products.show', compact('product', 'category_id', 'detail_id'));
    }

/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function edit($id)
    {
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $details    = Detail::orderBy('delivery', 'ASC')->pluck('delivery', 'id');
        $product    = Product::find($id);

        return view('user.products.edit', compact('product', 'categories', 'details'));
    }

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function update(ProductUpdateRequest $request, $id)
    {
        $product = Product::find($id);

        $product->fill($request->all())->save();

        return redirect()->route('products.edit', $product->id)->with('info', 'Producto actualizado con éxito');
    }

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function destroy($id)
    {
        $product = Product::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }

}
