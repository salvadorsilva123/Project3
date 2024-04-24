<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        return view("clients.index" );
        
    }
    public function create(){
        return view('clients.create');
    }

    public function edit($id){
        $Client=Clients::findOrFail($id);
        return view('clients.edit');
    }

    public function store(Request $request){
        return $request->all();
    }

}