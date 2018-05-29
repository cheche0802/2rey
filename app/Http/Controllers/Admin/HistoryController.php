<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\HistoryStoreRequest;
use App\Http\Requests\HistoryUpdateRequest;
use App\History;
use App\Product;
use App\Moviment;

class HistoryController extends Controller
{
            public function __construct()
            {
                $this->middleware('auth');
                $this->middleware('permission:admin.histories.index',['only'=>['index']]);
                $this->middleware('permission:admin.histories.create',['only'=>['create','store']]);
                $this->middleware('permission:admin.histories.edit',['only'=>['edit','update']]);
                $this->middleware('permission:admin.histories.destroy',['only'=>['destroy']]);
            }
          /**
           * Display a listing of the resource.
           *
           * @return \Illuminate\Http\Response
           */
          public function index(Request $request)
          {

            $histories = History::orderBy('id', 'DESC')->paginate(5);

            return view('admin.histories.index', compact('histories'));
          }

          /**
           * Show the form for creating a new resource.
           *
           * @return \Illuminate\Http\Response
           */
          public function create()
          {
              $products = Product::orderBy('name', 'ASC')->pluck('name', 'id');
              $moviments = Moviment::orderBy('code', 'ASC')->pluck('code', 'id');

              return view('admin.histories.create', compact('products', 'moviments'));
          }

          /**
           * Store a newly created resource in storage.
           *
           * @param  \Illuminate\Http\Request  $request
           * @return \Illuminate\Http\Response
           */
          public function store(HistoryStoreRequest $request)
          {
            $history = History::create($request->all());


            return redirect()->route('histories.edit', $history->id)->with('info', 'historia creado con éxito');
          }

          /**
           * Display the specified resource.
           *
           * @param  int  $id
           * @return \Illuminate\Http\Response
           */
          public function show($id)
          {
            $history = History::find($id);

            return view('admin.histories.show', compact('history'));
          }

          /**
           * Show the form for editing the specified resource.
           *
           * @param  int  $id
           * @return \Illuminate\Http\Response
           */
          public function edit($id)
          {
            $products = Product::orderBy('name', 'ASC')->pluck('name', 'id');
            $history = History::find($id);

            return view('admin.histories.edit', compact('history', 'products'));
          }

          /**
           * Update the specified resource in storage.
           *
           * @param  \Illuminate\Http\Request  $request
           * @param  int  $id
           * @return \Illuminate\Http\Response
           */
          public function update(HistoryUpdateRequest $request, $id)
          {
            $history = History::find($id);

            $history->fill($request->all())->save();

            return redirect()->route('histories.edit', $history->id)->with('info', 'la historia ha  actualizada con éxito');
          }

          /**
           * Remove the specified resource from storage.
           *
           * @param  int  $id
           * @return \Illuminate\Http\Response
           */
          public function destroy($id)
          {
            $history = History::find($id)->delete();

            return back()->with('info', 'Eliminado correctamente');
          }
}
