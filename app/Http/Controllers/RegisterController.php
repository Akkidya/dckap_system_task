<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\register;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required_with:password|same:password|',
            'mobile' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'image' => 'required',

        ]);


        $register = new register();
        $register->name = $request->input('name');
        $register->username = $request->input('username');
        $register->email = $request->input('email');
        $register->password = $request->input('password');
        $register->confirm_password = $request->input('confirm_password');
        $register->mobile = $request->input('mobile');
        $register->dob = $request->input('dob');
        $register->address = $request->input('address');
        $register->city = $request->input('city');
        $register->state = $request->input('state');
        $register->country = $request->input('country');

        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension= $file->getClientOriginalExtension();
            $filename= time() . ' . ' .$extension;
            $file->move('uploads/register',$filename);
            $register->image= $filename;
        }else{
            return $request;
            $register->image = '';
            }
            $register->save();
            return back() ->with('detail_saved','Registered Succussfully');
        }
}
