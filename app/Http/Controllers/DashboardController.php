<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $datos = DB::table('tasks')->where('user_id', '=', auth()->user()->id)->get();
        return view('layouts.dashboard')->with(['datos'=>$datos]);
    }

    
}
