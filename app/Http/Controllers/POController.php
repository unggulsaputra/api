<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class POController extends Controller
{
    public function index()
    {
    	return view('layout.main.po.index');
    }

    public function create()
    {
    	return view('layout.main.po.create');
    }

    public function post(Request $req)
    {
    	return response()->json($req->all());
    }

    public function detail(Request $req)
    {
        return response()->json($data);
    }

    public function edit()
    {
        return view('layout.main.po.edit');
    }
}
