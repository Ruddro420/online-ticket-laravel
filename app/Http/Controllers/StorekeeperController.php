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
    // sell product
    public function sell()
    {
        $data = Product::all();
        return view('admin.sellProduct', compact('data'));
    }
    // update data
    public function update(Request $request, $id)
    {
        $data = Product::find($id);
        if ($data->sell !== 0) {
            $data->sell = $data->sell + $request->sell;
            $data->save();
            return redirect()->route('dashboard')
                ->with('message', 'Product Updated Successfully');
        } else {
            $data->sell = $request->sell;
            $data->save();
            return redirect()->route('dashboard')
                ->with('message', 'Product Updated Successfully');
        }

    }
}