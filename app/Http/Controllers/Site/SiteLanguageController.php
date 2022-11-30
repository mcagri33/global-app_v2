<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Language;

class SiteLanguageController extends Controller
{
    public function swich_language(Request $request)
    {
        session()->put('session_short_name',$request->short_name);

        return redirect()->back();
    }
}
