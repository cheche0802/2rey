<?php
namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DetailStoreRequest;
use App\Http\Requests\DetailUpdateRequest;
use App\Detail;
use App\Category;


class DetailController extends Controller
{
      public function __construct()
      {
          $this->middleware('auth');
          $this->middleware('permission:user.details.index',['only'=>['index']]);
          $this->middleware('permission:user.details.create',['only'=>['create','store']]);
           $this->middleware('permission:user.details.edit',['only'=>['edit','update']]);
           $this->middleware('permission:user.details.destroy',['only'=>['destroy']]);
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $category_id= $request->get('category_id');
      $delivery = $request->get('delivery');
      $description = $request->get('description');

      $details = Detail::orderBy('id', 'DESC')->category_id($category_id)
      ->delivery($delivery)->description($description)->paginate(5);

      return view('user.details.index', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');

        return view('user.details.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DetailStoreRequest $request)
    {
      $detail = Detail::create($request->all());

      return redirect()->route('details.edit', $detail->id)->with('info', 'Detalle creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $cate = Category::find ($id);
      $detail = Detail::find($id);

      return view('user.details.show', compact('detail', 'cate'));
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
      $detail = Detail::find($id);

      return view('user.details.edit', compact('detail', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DetailUpdateRequest $request, $id)
    {
      $detail = Detail::find($id);

      $detail->fill($request->all())->save();

      return redirect()->route('details.edit', $detail->id)->with('info', 'Detalle actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $detail = Detail::find($id)->delete();

      return back()->with('info', 'Eliminado correctamente');
    }
}
