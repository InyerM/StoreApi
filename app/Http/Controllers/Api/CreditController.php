<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Credit;
use Illuminate\Http\Request;

class CreditController extends Controller
{

    public function index()
    {
        $credits = Credit::all();
        return $credits;
    }

    public function store(Request $request)
    {
        $credit = new Credit();
        $credit->Purchase_id = $request->Purchase_id;
        $credit->Debt = $request->Debt;

        $credit->save();
    }

    public function show($id)
    {
        $credit = Credit::find($id);
        return $credit;
    }

    public function update(Request $request, $id)
    {
        $credit = Credit::findOrFail($request->id);

        $credit->Purchase_id = $request->Purchase_id;
        $credit->Debt = $request->Debt;

        $credit->save();

        return $credit;
    }

    public function destroy($id)
    {
        $credit = Credit::destroy($id);
        return $credit;
    }
}
