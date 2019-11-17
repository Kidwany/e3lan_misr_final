<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->custom_id = 0;
        $user->save();
        return redirect()->back();
    }




    public function login(Request $request)
    {


          $validator = \Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
             ]);

            if($validator->fails()) {

                return redirect()
                ->back()
                ->withInput($request->all())
                ->withErrors($validator, 'error');
                }

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'custom_id' => 0])) {

            return redirect()->back()->with('message', 'This account activated !');
        }  else {

            return redirect()->back()->with('error', 'This account is not activated !');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');

    }
}
