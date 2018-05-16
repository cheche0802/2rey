<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use App\Category;
use App\Detail;
use App\Store;
use App\History;
use App\Moviment;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function pdfp()
    {
        $products = Product::all();
        $view     = \View::make('user.products.pdf', compact('products'))->render();
        $pdf      = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('Productolistado.pdf');
    }

    public function productPrint(Product $product)
    {
        $view = \View::make('user.products.pdfs.show', compact('product'))->render();
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream($product->name.'.pdf');
    }

    public function pdfc()
    {
        $categories = Category::all();
        $view     = \View::make('user.categories.pdf', compact('categories'))->render();
        $pdf      = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('Categoriaslistado.pdf');
    }

    public function pdfd()
    {
        $details = Detail::all();
        $view     = \View::make('user.details.pdf', compact('details'))->render();
        $pdf      = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('Detalleslistado.pdf');
    }


    public function pdfs()
    {
        $stores = Store::all();
        $view     = \View::make('user.stores.pdf', compact('stores'))->render();
        $pdf      = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('Almaceneslistado.pdf');
    }
    public function pdfm()
    {
        $moviments = Moviment::all();
        $view     = \View::make('user.moviments.pdf', compact('moviments'))->render();
        $pdf      = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('Movimientoslistado.pdf');
    }

    public function movimentPrint(Moviment $moviment)
    {
        $view = \View::make('user.moviments.pdfs.show', compact('moviments'))->render();
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream($moviment->name.'.pdf');
    }
    public function pdfu()
    {
        $users = User::all();
        $view     = \View::make('admin.users.pdf', compact('users'))->render();
        $pdf      = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('Usuarioslistado.pdf');
    }


}
