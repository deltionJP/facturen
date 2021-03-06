<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
use App\Customer;
use App\Product;
use Carbon\Carbon;
use PDF;

class InvoiceController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
         $factuur = Invoice::all();
         $customer = Customer::all();
        return view('factuur.overzicht', ['facturen' => $factuur, 'customers' => $customer]);
    }

     public function createInvoice(Request $request){
          $invoice = new Invoice;
          $invoice->customer_id = $request->get('customer_id');
          $invoice->factuurdatum = Carbon::now()->format('Y-m-d H:i:s');
          $invoice->factuurtijd = Carbon::now()->format('H:i:s');
          $invoice->timestamp = Carbon::now();
          $invoice->save();

          return redirect('/facturen')->with('status', 'Rekening is toegevoegd');
     }
     public function edit($factuurnummer){
          $invoice = Invoice::find($factuurnummer);
          // $producten = Product::all();
          // $producten = Product::find($factuurnummer);

          // dd($invoice);
          return view('factuur.edit', compact('invoice'));
     }

     public function downloadPDF($factuurnummer){
        $factuur = Invoice::where('factuurnummer', $factuurnummer)->get()->first();
        $orders = Product::where('factuurnummer', $factuurnummer)->get();
        $customer = Customer::where('klantnummer');
        
        $pdf = PDF::loadView('pdf', ['factuur'=> $factuur, 'orders' => $orders]);
        return $pdf->download('invoice.pdf');
    }
}
