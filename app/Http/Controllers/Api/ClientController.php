<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function index()
    {
        $clients = Client::all();
        return $clients;
    }

    public function store(Request $request)
    {
        $client = new Client();
        $client->Id = $request->Id;
        $client->Names = $request->Names;
        $client->Lastnames = $request->Lastnames;
        $client->Address = $request->Address;
        $client->Phone = $request->Phone;
        $client->Credit_experience = $request->Credit_experience;

        $client->save();
    }

    public function show($id)
    {
        $client = Client::find($id);
        return $client;
    }

    public function update(Request $request)
    {
        $client = Client::findOrFail($request->id);

        $client->Id = $request->Id;
        $client->Names = $request->Names;
        $client->Lastnames = $request->Lastnames;
        $client->Address = $request->Address;
        $client->Phone = $request->Phone;
        $client->Credit_experience = $request->Credit_experience;

        $client->save();

        return $client;
    }

    public function destroy($id)
    {
        $client = Client::destroy($id);
        return $client;
    }
}
