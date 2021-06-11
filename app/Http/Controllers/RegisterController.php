<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RegisterController extends Controller
{
    function index() {
    
        return view('welcome');
    } 

    function add(Request $request) {
        $request->validate([
            'name'=>'required|min:5',
            'country'=>'required',
            'date'=>'required|date|before: -18 years'
        ]);

        $query = DB::table('registereds')->insert([
            'name'=>$request->input('name'),
            'country'=>$request->input('country'),
            'date'=>$request->input('date')
        ]);

            return back()->with('success', 'You have registered successfully!');
            
    }
}
