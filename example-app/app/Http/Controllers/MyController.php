<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private $myvar = "Hello World!";
    function __construct()
    {

    }
    public function index()
    {
        return view('form');
    }
    public function store(Request $req)
    {
        $data['myinput'] = $req->input('myinput');
        return view('myroute',$data);
    }
}
