<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'country' => 'required',
            'date' => 'required'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->country = $request->country;
        $user->date = $request->date;
        $user->save();
        return redirect(route('/'))->with('successMsg', 'User Successfully Added');
    }
}
