<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller{
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
        $Client=new Client;
        $Client->name=$request->input('name');
        $Client->last_name=$request->input('last_name');
        $Client->address=$request->input('address');
        $Client->email=$request->input('email');
        $Client->phone=$request->input('phone');
        //$Client->id=$request->input('id');
        $Client->save();
        return redirect()->back();
        //
        //return $request->all();
    }
}
