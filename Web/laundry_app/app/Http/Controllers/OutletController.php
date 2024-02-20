<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use Illuminate\Http\Request;

class OutletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Outlet::all();
        if (auth()->user()->role == 'Admin') {
            return view('adm.outlet.index',[
                "title" => "Data Master | Outlet",
                'data' => $data
            ]);
        }
    }

    public function load()
    {
        $data = Outlet::all();
        return view('adm.outlet.read')->with([
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
        $provinces = Province::all();
        if (auth()->user()->role == 'Admin') {
            return view('adm.outlet.create',[
                "title" => "Data Master | Outlet | Add",
                'provinces' => $provinces,
            ]);
        }
    }

    public function getkabupaten(Request $req)
    {
        $id_provinsi = $req->id_provinsi;

        $kabupatens = Regency::where('province_id', $id_provinsi)->get();

        foreach ($kabupatens as $kabupaten) {
            echo "<option value='$kabupaten->id'>$kabupaten->name</option>";
        }
    }

    public function getkecamatan(Request $req)
    {
        $id_kabupaten = $req->id_kabupaten;

        $kecamatans = District::where('regency_id', $id_kabupaten)->get();

        foreach ($kecamatans as $kecamatan) {
            echo "<option value='$kecamatan->id'>$kecamatan->name</option>";
        }
    }

    public function getdesa(Request $req)
    {
        $id_kecamatan = $req->id_kecamatan;

        $desas = Village::where('district_id', $id_kecamatan)->get();

        foreach ($desas as $desa) {
            echo "<option value='$desa->id'>$desa->name</option>";
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
        // return $request;
        if (auth()->user()->role == 'Admin') {
            $validatedData=$request->validate([
                'name' => 'required|max:255',
                'province_id' => 'required|max:255',
                'regency_id' => 'required|max:255',
                'district_id' => 'required|max:255',
                'village_id' => 'required|max:255',
                'alamat' => 'required|max:255',
                'tlp' => 'required',
            ]);
            Outlet::create($validatedData);
            return redirect('/admin/outlet')->with('success', 'Data has been added!!');
        }
        // $validatedData=$request->validate([
        //     'name' => 'required|max:255',
        //     'alamat' => 'required|max:255',
        //     'tlp' => 'required',
        // ]);
        // Outlet::insert($validatedData);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function show(Outlet $outlet)
    {
        // $outlet = Outlet::where('name', $req->name)->first();
        // return View::make('adm.outlet')->with('outlet', $outlet);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function edit(Outlet $outlet)
    {
        $provinces = Province::all();
        if (auth()->user()->role == 'Admin') {
            return view('adm.outlet.update')->with([
                'outlet' => $outlet,
                'provinces' => $provinces,
                "title" => "Data Master | Outlet | Update"
            ]);
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Outlet $outlet)
    {
        if (auth()->user()->role == 'Admin') {
            $validatedData=$request->validate([
                'name' => 'required|max:255',
                'province_id' => 'required|max:255',
                'regency_id' => 'required|max:255',
                'district_id' => 'required|max:255',
                'village_id' => 'required|max:255',
                'alamat' => 'required|max:255',
                'tlp' => 'required',
            ]);
            Outlet::where('id', $outlet->id)->update($validatedData);
            return redirect('/admin/outlet')->with('success', 'Data has been changed!!');
        }
        // $data = Outlet::findOrFail($id);
        // $data->name = $request->name;
        // $data->alamat = $request->alamat;
        // $data->tlp = $request->tlp;
        // $data->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Outlet $outlet)
    {
        // $data = Outlet::findOrFail($id);
        // $data->delete();

        if (auth()->user()->role == 'Admin') {
            Outlet::destroy($outlet->id);
            return redirect('/admin/outlet')->with('success', 'Data has been deleted!!');
        }
    }
}
