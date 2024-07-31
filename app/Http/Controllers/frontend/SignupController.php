<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\SignupModel;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.signup');
    }
    public function submitMessage(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'email|required',
                'password' => 'required',
                'confirmpassword' => 'required|same:password'
            ]
        );


        $signup = new SignupModel();
        $signup->name = $request->name;
        $signup->email = $request->email;
        $signup->password = $request->password;
        $signup->confirmpassword = $request->confirmpassword;
        $signup->save();
        return back()->withSuccess('Signup Successfull:)');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SignupModel $signupModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SignupModel $signupModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SignupModel $signupModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SignupModel $signupModel)
    {
        //
    }
}
