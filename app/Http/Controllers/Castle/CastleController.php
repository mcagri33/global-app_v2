<?php

namespace App\Http\Controllers\Castle;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CastleController extends Controller
{
    public function index()
    {
        return view('castle.castle_login');
    }

    public function dashboard()
    {
        return view('castle.index');
    }
}
