<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Outlet;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = User::all('kd_users');
        
        // return $arr;
        if (auth()->user()->role == 'Admin') {
            $arr = array();
            foreach ($datas as $data) {
            $dt = $data->kd_users;
            $split = substr($dt, 0, 3);
            if ($split=='KSR') {
                $krr = User::where('kd_users', $dt)->first();
                array_push($arr,$krr);
                }
            }
            return view('adm.user.index',[
                "title" => "Data Master | User",
            ])->with('data', $arr);
        }
        if (auth()->user()->role == 'Owner') {
            $arr = array();
            foreach ($datas as $data) {
            $dt = $data->kd_users;
            $split = substr($dt, 0, 3);
            if ($split=='ADM') {
                $krr = User::where('kd_users', $dt)->first();
                array_push($arr,$krr);
                }
            }
            return view('own.user.index',[
                "title" => "Data Master | User",
            ])->with('data', $arr);
        }
    }

    public function load()
    {
        return view('adm.user.read')->with([
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
            $q = User::select(User::raw('MAX(RIGHT(kd_users,5)) as kode'));
            $kd = "";
            if ($q->count()>0) {
                foreach ($q->get() as $k) {
                    $tmp = ((int)$k->kode)+1;
                    $kd = sprintf("%05s",$tmp);
                }
            } else {
                $kd = "00001";
            }
            return view('adm.user.create',[
                "title" => "Data Master | User | Add",
                'data' => $data,
                'kd' => $kd,
            ]);
        }
        if (auth()->user()->role == 'Owner') {
            $q1 = User::select(User::raw('MAX(RIGHT(kd_users,4)) as kode1'));
            $kd1 = "";
            if ($q1->count()>0) {
                foreach ($q1->get() as $k1) {
                    $tmp1 = ((int)$k1->kode1)+1;
                    $kd1 = sprintf("%04s",$tmp1);
                }
            } else {
                $kd1 = "0001";
            }
        // return "ADM-".$kd;
            return view('own.user.create',[
                "title" => "Data Master | User | Add",
                'data' => $data,
                'kd' => $kd1,
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
                'username' => 'required|unique:users|min:6|max:20',
                'password' => 'required|min:6|max:16',
                'outlet_id' => 'required',
                'kd_users' => 'required',
                'role' => 'required',
            ]);
    
            $validatedData['password'] = Hash::make($validatedData['password']);
    
            User::create($validatedData);
            return redirect('/admin/user')->with('success', 'Data has been added!!');
        }
        if (auth()->user()->role == 'Owner') {
            $validatedData=$request->validate([
                'name' => 'required|max:255',
                'username' => 'required|unique:users|min:6|max:20',
                'password' => 'required|min:6|max:16',
                'outlet_id' => 'required',
                'kd_users' => 'required',
                'role' => 'required',
            ]);
    
            $validatedData['password'] = Hash::make($validatedData['password']);
    
            User::create($validatedData);
            return redirect('/owner/user')->with('success', 'Data has been added!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $item = Outlet::all();
        if (auth()->user()->role == 'Admin') {
            return view('adm.user.update')->with([
                "title" => "Data Master | User | Update",
                'user' => $user,
                'item' => $item
            ]);
        }
        if (auth()->user()->role == 'Owner') {
            return view('own.user.update')->with([
                "title" => "Data Master | User | Update",
                'user' => $user,
                'item' => $item
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // return $request;
        if (auth()->user()->role == 'Admin') {
            $validatedData=$request->validate([
                'name' => 'required|max:255',
                'username' => 'required|min:6|max:20',
                // 'password' => 'required|min:6|max:16',
                'kd_users' => 'required',
                'outlet_id' => 'required',
                'role' => 'required',
            ]);
    
            // $validatedData['password'] = Hash::make($validatedData['password']);
    
            User::where('id', $user->id)->update($validatedData);
            return redirect('/admin/user')->with('success', 'Data has been changed!!');
        }
        if (auth()->user()->role == 'Owner') {
            $validatedData=$request->validate([
                'name' => 'required|max:255',
                'username' => 'required|min:6|max:20',
                // 'password' => 'required|min:6|max:16',
                'kd_users' => 'required',
                'outlet_id' => 'required',
                'role' => 'required',
            ]);
    
            // $validatedData['password'] = Hash::make($validatedData['password']);
    
            User::where('id', $user->id)->update($validatedData);
            return redirect('/owner/user')->with('success', 'Data has been changed!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (auth()->user()->role == 'Admin') {
            User::destroy($user->id);
            return redirect('/admin/user')->with('success', 'Data has been deleted!!');
        }
        if (auth()->user()->role == 'Owner') {
            User::destroy($user->id);
            return redirect('/owner/user')->with('success', 'Data has been deleted!!');
        }
    }
}
