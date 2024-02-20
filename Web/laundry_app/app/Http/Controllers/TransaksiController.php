<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Outlet;
use App\Models\Paket;
use App\Models\User;
use App\Models\Member;
use App\Models\Detail;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Transaksi::all();
        $data = Transaksi::all();
        if (auth()->user()->role == 'Admin') {
            return view('adm.transaksi.index',[
                "title" => "Transaksi",
                'data' => $data
            ]);
        }
        if (auth()->user()->role == 'Kasir') {
            return view('ksr.transaksi.index',[
                "title" => "Transaksi",
                'data' => $data
            ]);
        }
    }

    public function load()
    {
        $data = Transaksi::all();
        // return $data;
        if (auth()->user()->role == 'Admin') {
            return view('adm.laporan.index',[
                "title" => "Report",
                'data' => $data
            ]);
        }
        if (auth()->user()->role == 'Kasir') {
            return view('ksr.laporan.index',[
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
        $outlets = Outlet::all();
        $members = Member::all();
        $pakets = Paket::all();
        
        $q = Transaksi::select(Transaksi::raw('MAX(RIGHT(kode_invoice,5)) as kode'));
        $kd = "";
        if ($q->count()>0) {
            foreach ($q->get() as $k) {
                $tmp = ((int)$k->kode)+1;
                $kd = sprintf("%05s",$tmp);
            }
        } else {
            $kd = "00001";
        }

        $datas = User::all('kd_users');
        $arr = array();
        foreach ($datas as $data) {
        $dt = $data->kd_users;
        $split = substr($dt, 0, 3);
        if ($split=='KSR') {
            $krr = User::where('kd_users', $dt)->first();
            array_push($arr,$krr);
            }
        }
        // return $arr;
        // return "INV-".$kd;
        if (auth()->user()->role == 'Admin') {
            return view('adm.transaksi.create',[
                "title" => "Transaksi | Add",
                'outlets' => $outlets,
                'pakets' => $pakets,
                'members' => $members,
                'kd' => $kd,
            ])->with('data', $arr);
        }
        if (auth()->user()->role == 'Kasir') {
            return view('ksr.transaksi.create',[
                "title" => "Transaksi | Add",
                'outlets' => $outlets,
                'pakets' => $pakets,
                'members' => $members,
                'kd' => $kd,
            ])->with('data', $arr);
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
            // $validatedData=$request->validate([
            //     'kode_invoice' => 'required',
            //     'outlet_id' => 'required',
            //     'member_id' => 'required',
            //     'user_id' => 'required',
            //     'biaya_tambahan' => 'required|max:255',
            //     // 'tgl' => 'nullable|date',
            //     'tgl_bayar' => 'nullable|date',
            //     'batas_waktu' => 'nullable|date',
            //     'diskon' => 'required',
            //     'pajak' => 'required',
            //     'status' => 'required',
            //     'dibayar' => 'required',
            // ]);
            $tr = Transaksi::create([
                'kode_invoice' => $request['kode_invoice'],
                'outlet_id' => $request['outlet_id'],
                'member_id' => $request['member_id'],
                'paket_id' => $request['paket_id'],
                'user_id' => $request['user_id'],
                'biaya_tambahan' => $request['biaya_tambahan'],
                'batas_waktu' => date('Y-m-d H:i:s'),
                'qty' => $request['qty'],
                'status' => $request['status'],
                'dibayar' => $request['dibayar'],
            ]);
            // return $tr;
            if ($tr) {
                return redirect('/admin/transaksi')->with('success', 'Data has been added!!');
            } else {
                return redirect('/admin/transaksi')->with('fail', 'Failed to add data transaction!!');
            } 
        }
        if (auth()->user()->role == 'Kasir') {
            $tr = Transaksi::create([
                'kode_invoice' => $request['kode_invoice'],
                'outlet_id' => $request['outlet_id'],
                'member_id' => $request['member_id'],
                'paket_id' => $request['paket_id'],
                'user_id' => $request['user_id'],
                'biaya_tambahan' => $request['biaya_tambahan'],
                'batas_waktu' => date('Y-m-d H:i:s'),
                'qty' => $request['qty'],
                'status' => $request['status'],
                'dibayar' => $request['dibayar'],
            ]);
            if ($tr) {
                return redirect('/kasir/transaksi')->with('success', 'Data has been added!!');
            } else {
                return redirect('/kasir/transaksi')->with('fail', 'Failed to add data transaction!!');
            } 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        if (auth()->user()->role == 'Admin') {
            return view('adm.transaksi.detail',[
                "title" => "Transaksi | Detail",
                'transaksi' => $transaksi
            ]);
        }
        if (auth()->user()->role == 'Kasir') {
            return view('ksr.transaksi.detail',[
                "title" => "Transaksi | Detail",
                'transaksi' => $transaksi
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        $outlets = Outlet::all();
        $members = Member::all();
        $pakets = Paket::all();

        $datas = User::all('kd_users');
        $arr = array();
        foreach ($datas as $data) {
        $dt = $data->kd_users;
        $split = substr($dt, 0, 3);
        if ($split=='KSR') {
            $krr = User::where('kd_users', $dt)->first();
            array_push($arr,$krr);
            }
        }
        
        if (auth()->user()->role == 'Admin') {
            return view('adm.transaksi.update',[
                "title" => "Transaksi | Update",
                'outlets' => $outlets,
                'pakets' => $pakets,
                'members' => $members,
                'transaksi' => $transaksi,
            ])->with('data', $arr);
        }
        if (auth()->user()->role == 'Kasir') {
            return view('ksr.transaksi.update',[
                "title" => "Transaksi | Update",
                'outlets' => $outlets,
                'pakets' => $pakets,
                'members' => $members,
                'transaksi' => $transaksi,
            ])->with('data', $arr);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        // return $request;
        if (auth()->user()->role == 'Admin') {
            $validatedData=$request->validate([
                'kode_invoice' => 'required',
                'outlet_id' => 'required',
                'member_id' => 'required',
                'user_id' => 'required',
                'biaya_tambahan' => 'required|max:255',
                'tgl_bayar' => 'required',
                'qty' => 'required',
                'status' => 'required',
                'dibayar' => 'required',
            ]);
            Transaksi::where('id', $transaksi->id)->update($validatedData);
            return redirect('/admin/transaksi')->with('success', 'Data has been changed!!');
        }
        if (auth()->user()->role == 'Kasir') {
            $validatedData=$request->validate([
                'kode_invoice' => 'required',
                'outlet_id' => 'required',
                'member_id' => 'required',
                'user_id' => 'required',
                'biaya_tambahan' => 'required|max:255',
                'tgl_bayar' => 'required',
                'qty' => 'required',
                'status' => 'required',
                'dibayar' => 'required',
            ]);
            Transaksi::where('id', $transaksi->id)->update($validatedData);
            return redirect('/kasir/transaksi')->with('success', 'Data has been changed!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        if (auth()->user()->role == 'Admin') {
            Transaksi::destroy($transaksi->id);
            return redirect('/admin/transaksi')->with('success', 'Data has been deleted!!');
        }
        if (auth()->user()->role == 'Kasir') {
            Transaksi::destroy($transaksi->id);
            return redirect('/kasir/transaksi')->with('success', 'Data has been deleted!!');
        }
    }
}
