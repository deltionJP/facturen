<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Invoice;
use Carbon\Carbon;

class ProductController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
         $product = Product::all();
     //     $invoice = Invoice::all();
         return view('product', ['producten' => $product]);
    }
    public function create(Request $request){
         $product = new Product;
         $product->name = $request->get('product_name');
         $product->description = $request->get('product_description');
         $product->timestamp = Carbon::now();
         $product->save();

         return redirect('/product')->with('status', 'Rekening is toegevoegd');
     //   $product = new Product;
     //     $product->factuurnummer = $request->get('customer_id');
     //     $product->omschrijving = $request->get('omschrijving');
     //     $product->aantal = $request->get('aantal');
     //     $product->prijsperstuk = $request->get('prijsperstuk');
     //     $product->timestamp = Carbon::now();
     //     $product->save();

     //     return redirect('/product')->with('status', 'Rekening is toegevoegd');
     }

    public function delete($id){
         dd('de');
         Product::where('id',$id)->delete();
         return redirect('/product')->with('status', 'Product is verwijderd');
    }

}
