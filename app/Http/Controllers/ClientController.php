<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index(){
        return view("clients.index");
    }
    public function create(){
        return view('clients.create');
    }

    public function store(Request $request){
        request()->validate(Client::$rules) ;
        $Client=Client::create($request->all());
        //
        $Client->save();
        return redirect()->route('clients.index')
            ->with('success','Client created successfully');
    }

    public function show($id){
        $Client = Client::find($id);
        //
        return view('clients.show', compact('Client'));
    }

    public function edit($id){
        $Client=Client::find($id);
        //
        return view('Client.edit', compact('Client'));
    }

    public function update(Request $request, $id){
        $Client = Client::find($id);
        $Client->update($request->all());
        //
        return redirect()->route('clients.index')
            ->with('success', 'client updated');
    }

    public function destroy($id){
        $Client = Client::find($id)->delete();
        //
        return redirect()->route('clients.index')
            ->with('success','Client deleted');
    }
}
