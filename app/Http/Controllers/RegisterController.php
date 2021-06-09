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
            'name'=>'required',
            'country'=>'required',
            'date'=>'required'
        ]);

        $query = DB::table('registereds')->insert([
            'name'=>$request->input('name'),
            'country'=>$request->input('country'),
            'date'=>$request->input('date')
        ]);

        if($query) {
            return back()->with('successs', 'Data have been successfully inserted');
        }else{
            return back()->with('fail', 'Data fail'); 
        }
    }
}
