<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FakturPajakController extends Controller
{
    public function index()
    {
    	return view('layout.main.FakturPajak.index');
    }
}
