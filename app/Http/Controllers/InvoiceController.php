<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
use App\Customer;
use App\Product;
use App\InvoiceOrder;

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
        return view('factuur.edit', compact('invoice'));
    }

    public function addInvoiceProduct($factuurnummer) {
        $invoice = Invoice::find($factuurnummer);
        $orders = InvoiceOrder::where('factuurnummer',$factuurnummer)->get();
        return view('factuur.product', compact('invoice', 'orders'));
    }

    public function downloadPDF($factuurnummer){
        $factuur = Invoice::where('factuurnummer', $factuurnummer)->get()->first();
        $orders = InvoiceOrder::where('factuurnummer', $factuurnummer)->get();
        $products = Product::all();
        // dd($factuur);
        // $orders = Product::where('factuurnummer', $factuurnummer)->get();
        // $customer = Customer::where('klantnummer');
        
        $pdf = PDF::loadView('pdf', ['factuur'=> $factuur, 'orders' => $orders, 'products' => $products]);
        return $pdf->download('invoice.pdf');
    }
}
