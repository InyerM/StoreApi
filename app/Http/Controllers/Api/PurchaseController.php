<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{

    public function index()
    {
        $purchases = Purchase::all();
        return $purchases;
    }

    public function store(Request $request)
    {
        $purchase = new Purchase();
        $purchase->Product_id = $request->Product_id;
        $purchase->Person_id = $request->Person_id;
        $purchase->Purchase_date = $request->Purchase_date;
        $purchase->Discount = $request->Discount;

        $purchase->save();
    }

    public function show($id)
    {
        $purchase = Purchase::find($id);
        return $purchase;
    }

    public function update(Request $request)
    {
        $purchase = Purchase::findOrFail($request->id);

        $purchase->Product_id = $request->Product_id;
        $purchase->Person_id = $request->Person_id;
        $purchase->Purchase_date = $request->Purchase_date;
        $purchase->Discount = $request->Discount;

        $purchase->save();

        return $purchase;
    }

    public function destroy($id)
    {
        $purchase = Purchase::destroy($id);
        return $purchase;
    }
}
