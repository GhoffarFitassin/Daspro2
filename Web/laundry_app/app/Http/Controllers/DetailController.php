<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksis = Transaksi::all();
        $data = Detail::all();
        if (auth()->user()->role == 'Admin') {
            return view('adm.laporan.index',[
                "title" => "Report",
                'data' => $data,
                'transaksis' => $transaksis,
            ]);
        }
        if (auth()->user()->role == 'Kasir') {
            return view('ksr.laporan.index',[
                "title" => "Report",
                'data' => $data,
                'transaksis' => $transaksis,
            ]);
        }
        if (auth()->user()->role == 'Owner') {
            return view('own.laporan.index',[
                "title" => "Report",
                'data' => $data
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pakets = Paket::all();
        $transaksis= Transaksi::all();
        $outlets= Outlet::all();
        $members = Member::all();
        if (auth()->user()->role == 'Admin') {
            return view('adm.laporan.create',[
                "title" => "Report | Add",
                'outlets' => $outlets,
                'pakets' => $pakets,
                'transaksis' => $transaksis,
                'members' => $members,
            ]);
        }
        if (auth()->user()->role == 'Kasir') {
            return view('ksr.laporan.create',[
                "title" => "Report | Add",
                'outlets' => $outlets,
                'pakets' => $pakets,
                'transaksis' => $transaksis,
                'members' => $members,
            ]);
        }
        if (auth()->user()->role == 'Owner') {
            return view('own.laporan.create',[
                "title" => "Report | Add",
                'outlets' => $outlets,
                'pakets' => $pakets,
                'transaksis' => $transaksis,
                'members' => $members,
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
        // return $request;
        if (auth()->user()->role == 'Admin') {
            
            // $data = Detail::all('transaksi_id');
            $validatedData=$request->validate([
                'transaksi_id' => 'required|unique:details',
            ]);
            if (!$validatedData) {
                dd(!$validatedData);
                Detail::create($validatedData);
                return redirect('/admin/detail')->with('success', 'Data has been added!!');
            } else {
                return redirect('/admin/detail')->with('fail', 'Failed to add data!!');
            }
            
            
        }
        if (auth()->user()->role == 'Kasir') {
            $validatedData=$request->validate([
                'transaksi_id' => 'required|unique:details',
            ]);
            if ($validatedData) {
                Detail::create($validatedData);
                return redirect('/kasir/detail')->with('success', 'Data has been added!!');
            } else {
                return redirect('/kasir/detail')->with('fail', 'Failed to add data!!');
            }
            
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $detail = Detail::all();
        if (auth()->user()->role == 'Admin') {
            return view('adm.laporan.detail',[
                "title" => "Report | Invoice",
                'data' => $detail,
            ]);
        }
        if (auth()->user()->role == 'Kasir') {
            return view('ksr.laporan.detail',[
                "title" => "Report | Invoice",
                'data' => $detail,
            ]);
        }
        if (auth()->user()->role == 'Owner') {
            return view('own.laporan.detail',[
                "title" => "Report | Invoice",
                'data' => $detail,
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Detail $detail)
    {
        $pakets = Paket::all();
        $transaksis= Transaksi::all();
        $outlets= Outlet::all();
        $members = Member::all();
        if (auth()->user()->role == 'Admin') {
            return view('adm.laporan.update',[
                "title" => "Report | Update",
                'detail' => $detail,
                'outlets' => $outlets,
                'pakets' => $pakets,
                'transaksis' => $transaksis,
                'members' => $members,
            ]);
        }
        if (auth()->user()->role == 'Kasir') {
            return view('ksr.laporan.update',[
                "title" => "Report | Update",
                'detail' => $detail,
                'outlets' => $outlets,
                'pakets' => $pakets,
                'transaksis' => $transaksis,
                'members' => $members,
            ]);
        }
        if (auth()->user()->role == 'Owner') {
            return view('own.laporan.update',[
                "title" => "Report | Update",
                'detail' => $detail,
                'outlets' => $outlets,
                'pakets' => $pakets,
                'transaksis' => $transaksis,
                'members' => $members,
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detail $detail)
    {
        // return $request;
        if (auth()->user()->role == 'Admin') {
            $validatedData=$request->validate([
                'transaksi_id' => 'required',
                'paket_id' => 'required',
                'outlet_id' => 'required',
                'member_id' => 'required',
                'qty' => 'required',
                'keterangan' => 'required',
            ]);
            Transaksi::where('id', $detail->id)->update($validatedData);
            return redirect('/admin/detail')->with('success', 'Data has been changed!!');
        }
        if (auth()->user()->role == 'Kasir') {
            $validatedData=$request->validate([
                'transaksi_id' => 'required',
                'paket_id' => 'required',
                'outlet_id' => 'required',
                'member_id' => 'required',
                'qty' => 'required',
                'keterangan' => 'required',
            ]);
            Transaksi::where('id', $detail->id)->update($validatedData);
            return redirect('/kasir/detail')->with('success', 'Data has been changed!!');
        }
        if (auth()->user()->role == 'Owner') {
            $validatedData=$request->validate([
                'transaksi_id' => 'required',
                'paket_id' => 'required',
                'outlet_id' => 'required',
                'member_id' => 'required',
                'qty' => 'required',
                'keterangan' => 'required',
            ]);
            Transaksi::where('id', $detail->id)->update($validatedData);
            return redirect('/owner/detail')->with('success', 'Data has been changed!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail $detail)
    {
        if (auth()->user()->role == 'Admin') {
            Transaksi::destroy($detail->id);
            return redirect('/admin/detail')->with('success', 'Data has been deleted!!');
        }
        if (auth()->user()->role == 'Kasir') {
            Transaksi::destroy($detail->id);
            return redirect('/kasir/detail')->with('success', 'Data has been deleted!!');
        }
        if (auth()->user()->role == 'Owner') {
            Transaksi::destroy($detail->id);
            return redirect('/owner/detail')->with('success', 'Data has been deleted!!');
        }
    }
}
