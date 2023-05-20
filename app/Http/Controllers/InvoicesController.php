<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    public function index() {
        $invoices = Invoice::with('customer')->get(); //powiazania z customere
        return view('invoices.index', ['invoices' => $invoices]);
    }

    public function create() {
        $customers = Customer::all();
        return view('invoices.create',  ['customers' => $customers]);
    }

    public function store(Request $request) {
        $invoice = new Invoice();  //tworzy nowa fakture w bazie

        $invoice->number = $request->number;
        $invoice->date = $request->date;
        $invoice->total = $request->total;
        $invoice->customer_id = $request->customer; 

        $invoice->save();

        return redirect()->route('invoices.index');
    }

    public function edit($id) {
        $invoice = Invoice::find($id); //znajduje fakture w bazie

        return view('invoices.edit', ['invoice' => $invoice]);
    }

    public function update($id, Request $request){
        $invoice = Invoice::find($id);

        $invoice->number = $request->number;
        $invoice->date = $request->date;
        $invoice->total = $request->total;

        $invoice->save();

        return redirect()->route('invoices.index');
    }

    public function delete($id){
        Invoice::destroy($id);

        return redirect()->route('invoices.index');
    }
}
