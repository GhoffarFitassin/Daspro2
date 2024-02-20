<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Outlet;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = ;
        if (auth()->user()->role == 'Admin') {
            return view('adm.paket.index',[
                "title" => "Data Master | Paket",
                'data' => Paket::all()
            ]);
        }
    }

    public function load()
    {
        $data = Paket::all();
        return view('adm.paket.read')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Outlet::all();
        if (auth()->user()->role == 'Admin') {
            return view('adm.paket.create')->with([
                "title" => "Data Master | Paket | Add",
                'data' => $data
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (auth()->user()->role == 'Admin') {
            $validatedData=$request->validate([
                'outlet_id' => 'required',
                'nama_paket' => 'required|max:255',
                'jenis' => 'required',
                'harga' => 'required',
            ]);
            Paket::create($validatedData);
            return redirect('/admin/paket')->with('success', 'Data has been added!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function edit(Paket $paket)
    {
        $item = Outlet::all();
        if (auth()->user()->role == 'Admin') {
    
            return view('adm.paket.update')->with([
                "title" => "Data Master | Paket | Update",
                'paket' => $paket,
                'item' => $item
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paket $paket)
    {
        // return $request;
        if (auth()->user()->role == 'Admin') {
            $validatedData=$request->validate([
                'outlet_id' => 'required',
                'nama_paket' => 'required|max:255',
                'jenis' => 'required',
                'harga' => 'required',
            ]);
            Paket::where('id', $paket->id)->update($validatedData);
            return redirect('/admin/paket')->with('success', 'Data has been changed!!');
        }
        // $data = Paket::findOrFail($id);
        // $data->id_outlet = $request->id_outlet;
        // $data->jenis = $request->jenis;
        // $data->nama_paket = $request->nama_paket;
        // $data->harga = $request->harga;
        // $data->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paket $paket)
    {
        if (auth()->user()->role == 'Admin') {
            Paket::destroy($paket->id);
            return redirect('/admin/paket')->with('success', 'Data has been deleted!!');
        }
        // $data = Paket::findOrFail($id);
        // $data->delete();
    }
}
