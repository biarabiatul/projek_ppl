<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function show()
    {
        return view('register');
    }

    public function store(Request $request): RedirectResponse
    {
        $validator = $request->validate([
            'namaInput' => 'required',
            'emailInput' => 'required|email',
            'nimInput' => 'required|numeric',
            'passwordInput' => 'required|min:8|confirmed',
        ]);


        $query = User::create([
            'name' => $request->namaInput,
            'email' => $request->emailInput,
            'nim' => $request->nimInput,
            'password' => Hash::make($request->passwordInput)
        ]);


        if ($query) {
            return redirect()->route('login');
        }else{
            return redirect()->back();
        }
    }
}


