<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registration');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LoginRequest $request)
    {
        User::create($request->all());
        
    }

    /**
     * Display the specified resource.
     */
    public function show(User $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $login)
    {
        //
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('questions')
                        ->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("/")->withSuccess('Oppes! You have entered invalid email or password');
    }
}
