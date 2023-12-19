<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StorekeeperController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
