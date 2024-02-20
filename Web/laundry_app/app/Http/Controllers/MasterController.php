<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function owner()
    {
        if (auth()->user()->role == 'Owner') {
            return view('own.index',[
                "title" => "Dashboard"
            ]);
        }

        return redirect()->back();
    }

    public function admin()
    {
        if (auth()->user()->role == 'Admin') {
            return view('adm.index',[
                "title" => "Dashboard"
            ]);
        }

        return redirect()->back();
    }

    public function kasir()
    {
        if (auth()->user()->role == 'Kasir') {
            return view('ksr.index',[
                "title" => "Dashboard"
            ]);
        }

        return redirect()->back();
    }
}
