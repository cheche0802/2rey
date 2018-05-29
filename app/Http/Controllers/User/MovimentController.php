<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Moviment;
use App\Product;
use App\History;



class MovimentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:user.moviments.index',['only'=>['index']]);
        $this->middleware('permission:user.moviments.create',['only'=>['create','store']]);
        $this->middleware('permission:user.moviments.edit',['only'=>['edit','update']]);
        $this->middleware('permission:user.moviments.destroy',['only'=>['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $moviments = Moviment::orderBy('id', 'DESC')->paginate(5);

      return view('user.moviments.index', compact('moviments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::orderBy('name', 'ASC')->pluck('name', 'id');


        return view('user.moviments.create',compact('product'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

<<<<<<< HEAD
<<<<<<< HEAD
    	//dd($request->all());
      	$moviment = Moviment::create($request->all());
      	
      	if($request->status == "Entrada"){
      		$product = Product::whereId($request->product_id)->firstOrFail();

      		$product->amount = $product->amount + $request->amount;
      		$product->save();
      	}

      	if($request->status == "Salida"){
      		$product = Product::whereId($request->product_id)->firstOrFail();

      		$product->amount = $product->amount - $request->amount;
      		$product->save();
      	}

        


        $history = new History;
        $history->type = $request->status;
        $history->price = $request->price;
        $history->product_id = $request->product_id;
        $history->save();



      //return redirect()->route('moviments.edit', $moviment->id)->with('info', 'Moviemiento creada con éxito');
=======
      $moviment = Moviment::create($request->all());

=======
      $moviment = Moviment::create($request->all());

>>>>>>> 8a81a8df7e9d2f01845f27b5e461d6982917b123

       if ($moviment->status == "Entrada") {
        $history = new History;
        $history->product_id = $request->product_id;
        $history->date = $request->date;
        $history->cost = $request->cost;
        $history->sell = null;
        $history->moviment_id = $moviment->id;
        $history->save();

          $product  = new Product;
          $product = $request->product_id;
         $product->amount = $product->amount + $moviment->amount;
          $product->save();
        } else if ($moviment->status == "Salida") {
            $history= new History;
            $history->sell =  $request->sell;
            $history->save();

          $product = new Product;
          $product->amount = $product->amount - $moviment->amount;
          $product->save();
        }


      return redirect()->route('moviments.edit', $moviment->id)->with('info', 'Moviemiento creada con éxito');
>>>>>>> 8a81a8df7e9d2f01845f27b5e461d6982917b123
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $moviment = Moviment::find($id);
      $product = Product::find($id);

      return view('user.moviments.show', compact('moviment', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $product = Product::orderBy('name', 'ASC')->pluck('name', 'id');
      $moviment = Moviment::find($id);

      return view('user.moviments.edit', compact('moviment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $moviment = Moviment::find($id);

      $moviment->fill($request->all())->save();

      return redirect()->route('moviments.edit', $moviment->id)->with('info', 'Movimiento actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $moviment = Moviment::find($id)->delete();

      return back()->with('info', 'Eliminado correctamente');
    }
}
