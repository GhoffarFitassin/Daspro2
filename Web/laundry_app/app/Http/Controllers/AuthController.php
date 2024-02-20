<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // login function
    public function index()
    {
        return view('login.index', [
            "title" => "Login"
        ]);
    }

    public function auth(Request $req)
    {
        $validated=$req->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        // dd($validated);
        
        if (Auth::attempt($validated)) {
            switch (auth()->user()->role) {
                case 'Owner':
                    $req->session()->regenerate();

                    return redirect()->intended('/owner');
                    break;
                case 'Admin':
                    $req->session()->regenerate();

                    return redirect()->intended('/admin');
                    break;
                case 'Kasir':
                    $req->session()->regenerate();

                    return redirect()->intended('/kasir');
                    break;
                
                default:
                    # code...
                    break;
            }
        }
        
        return back()->with('error', 'LoginFailed!');
    }
    // login function end
    
    // logout function
    public function logout(Request $req)
    {
        Auth::logout();
    
        $req->session()->invalidate();
    
        $req->session()->regenerateToken();
    
        return redirect('/');
    }
    // logout function end
    
    // register function
    public function regis()
    {
        return view('register.index',[
            "title" => "register"
        ]);
    }
    // register function end
}
