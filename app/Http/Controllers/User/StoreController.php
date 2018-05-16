<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreStoreRequest;
use App\Http\Requests\StoreUpdateRequest;
use App\Store;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('auth');
         $this->middleware('permission:user.stores.index',['only'=>['index']]);
         $this->middleware('permission:user.stores.create',['only'=>['create','store']]);
          $this->middleware('permission:user.stores.edit',['only'=>['edit','update']]);
          $this->middleware('permission:user.stores.destroy',['only'=>['destroy']]);
     }

     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index()
     {
         $stores = Store::orderBy('id', 'DESC')->paginate(5);

         return view('user.stores.index', compact('stores'));
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         return view('user.stores.create');
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(StoreStoreRequest $request)
     {
         $store = Store::create($request->all());

         return redirect()->route('stores.edit', $store->id)->with('info', 'Almacen creado con éxito');
     }

     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         $store = Store::find($id);

         return view('user.stores.show', compact('store'));
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         $store = Store::find($id);

         return view('user.stores.edit', compact('store'));
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update(StoreUpdateRequest $request, $id)
     {
         $store = Store::find($id);

         $store->fill($request->all())->save();

         return redirect()->route('stores.edit', $store->id)->with('info', 'Almacen actualizada con éxito');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         $store = Store::find($id)->delete();

         return back()->with('info', 'Eliminado correctamente');
     }
   }
