<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Carbon\CarbonInterval;

class DataController extends Controller
{
    function saved() {
        $data = array(
            'list' => DB::table('registereds')->where('created_at', '>', Carbon::now()->subMinutes(5)->diffForHumans())->get()
        );
        return view('data', $data);
            
    }
}
