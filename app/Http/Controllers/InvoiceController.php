<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
	public function index()
    {
    	return view('layout.main.Invoice.index');
    }

    public function detail()
    {
    	return view('layout.main.Invoice.detail');
    }

    public function print()
    {
    	return view('layout.main.Invoice.print');
    }
}
