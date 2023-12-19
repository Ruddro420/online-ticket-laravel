<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class StorekeeperController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    // view product
    public function view()
    {
        return view('admin.addProduct');
    }
    // store product
    public function store(Request $request)
    {
        $data = new Product;
        $data->name = $request->name;
        $data->price = $request->price;
        $data->unit = $request->unit;
        $data->save();
        return redirect()->route('dashboard')
            ->with('message', 'Product Added Successfully');
        ;
    }
}