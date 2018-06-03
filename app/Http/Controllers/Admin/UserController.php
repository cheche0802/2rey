<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;


class UserController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('permission:admin.users.index',['only'=>['index']]);
      $this->middleware('permission:admin.users.create',['only'=>['create','store']]);
       $this->middleware('permission:admin.users.edit',['only'=>['edit','update']]);
       $this->middleware('permission:admin.users.destroy',['only'=>['destroy']]);
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {


      $users = User::orderBy('id', 'DESC')->paginate(5);

      return view('admin.users.index', compact('users'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('admin.users.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(UserStoreRequest $request)
  {
      $user = User::create($request->all());

      return redirect()->route('users.edit', $user->id)->with('info', 'Usuario creado con éxito');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      $user = User::find($id);

      return view('admin.users.show', compact('user'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {

      $user = User::find($id);

      return view('admin.users.edit', compact('user'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(UserUpdateRequest $request, $id)
  {
      $user = User::find($id);

      $user->fill($request->all())->save();

      return redirect()->route('users.edit', $user->id)->with('info', 'Usuario actualizado con éxito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $user = User::find($id)->delete();

      return back()->with('info', 'Eliminado correctamente');
  }
}
