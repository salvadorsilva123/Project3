<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        return view("clients.index");
    }
    public function create(){
        return view('clients.create');
    }
}

/*
use IlluminateHttpRequest;
use AppModelsClient;
*/