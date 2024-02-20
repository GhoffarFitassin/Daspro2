<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Member::all();
        if (auth()->user()->role == 'Admin') {
            return view('adm.pelanggan.index',[
                "title" => "Member",
                'data' => $data
            ]);
        }
        if (auth()->user()->role == 'Kasir') {
            return view('ksr.pelanggan.index',[
                "title" => "Member",
                'data' => $data
            ]);
        }
    }

    public function load()
    {
        $data = Member::all();
        if (auth()->user()->role == 'Admin') {
            return view('adm.pelanggan.read')->with([
                'data' => $data,
                
            ]);
        }
        if (auth()->user()->role == 'Kasir') {
            return view('ksr.pelanggan.read')->with([
                'data' => $data,
                
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
        $provinces = Province::all();
        if (auth()->user()->role == 'Admin') {
            return view('adm.pelanggan.create',[
                "title" => "Member | Add",
                'provinces' => $provinces,
            ]);
        }
        if (auth()->user()->role == 'Kasir') {
            return view('ksr.pelanggan.create',[
                "title" => "Member | Add",
                'provinces' => $provinces,
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
                'name' => 'required|max:255',
                'alamat' => 'required',
                'province_id' => 'required|max:255',
                'regency_id' => 'required|max:255',
                'district_id' => 'required|max:255',
                'village_id' => 'required|max:255',
                'jenis_kelamin' => 'required|max:255',
                'tlp' => 'required',
            ]);
            Member::create($validatedData);
            return redirect('/admin/member')->with('success', 'Data has been added!!');
        }
        if (auth()->user()->role == 'Kasir') {
            $validatedData=$request->validate([
                'name' => 'required|max:255',
                'alamat' => 'required',
                'province_id' => 'required|max:255',
                'regency_id' => 'required|max:255',
                'district_id' => 'required|max:255',
                'village_id' => 'required|max:255',
                'jenis_kelamin' => 'required|max:255',
                'tlp' => 'required',
            ]);
            Member::create($validatedData);
            return redirect('/kasir/member')->with('success', 'Data has been added!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        $provinces = Province::all();
        if (auth()->user()->role == 'Admin') {
            return view('adm.pelanggan.update')->with([
                "title" => "Member | Update",
                'provinces' => $provinces,
                'member' => $member
            ]);
        }
        if (auth()->user()->role == 'Kasir') {
            return view('ksr.pelanggan.update')->with([
                "title" => "Member | Update",
                'provinces' => $provinces,
                'member' => $member
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        // return $member;
        if (auth()->user()->role == 'Admin') {
            $validatedData=$request->validate([
                'name' => 'required|max:255',
                'alamat' => 'required',
                'province_id' => 'required|max:255',
                'regency_id' => 'required|max:255',
                'district_id' => 'required|max:255',
                'village_id' => 'required|max:255',
                'jenis_kelamin' => 'required|max:255',
                'tlp' => 'required',
            ]);
            Member::where('id', $member->id)->update($validatedData);
            return redirect('/admin/member')->with('success', 'Data has been changed!!');
        }
        if (auth()->user()->role == 'Kasir') {
            $validatedData=$request->validate([
                'name' => 'required|max:255',
                'alamat' => 'required',
                'province_id' => 'required|max:255',
                'regency_id' => 'required|max:255',
                'district_id' => 'required|max:255',
                'village_id' => 'required|max:255',
                'jenis_kelamin' => 'required|max:255',
                'tlp' => 'required',
            ]);
            Member::where('id', $member->id)->update($validatedData);
            return redirect('/kasir/member')->with('success', 'Data has been changed!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        if (auth()->user()->role == 'Admin') {
            Member::destroy($member->id);
            return redirect('/admin/member')->with('success', 'Data has been deleted!!');
        }
        if (auth()->user()->role == 'Kasir') {
            Member::destroy($member->id);
            return redirect('/kasir/member')->with('success', 'Data has been deleted!!');
        }
    }
}
