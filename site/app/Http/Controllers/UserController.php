<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function getCreate() {

        return view('auth.register');
    }

    public function postSave(Request $r) {
        // dd($r);

        $validationRules = [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ];

        $r->validate($validationRules);

        $data = [
            'firstname' => $r->firstname,
            'lastname' => $r->lastname,
            'email' => $r->email,
            'password' => $r->password,
            'role' => $r->role,
        ];

        if($r->id) {
            $user = User::where('id', $r->id)->first();
            $user->update($data);
        } else {
            $user = User::create($data);
        }

        return redirect()->route('backoffice.index');
    }
}
