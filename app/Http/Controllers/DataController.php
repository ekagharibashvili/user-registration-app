<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    function saved() {
        $data = array(
        'list' => DB::table('registereds')->get()
        );
        return view('data', $data);
    }
}
