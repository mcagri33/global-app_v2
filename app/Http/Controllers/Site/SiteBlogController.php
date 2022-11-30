<?php

namespace App\Http\Controllers\Site;

use App\Helper\Helpers;
use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class SiteBlogController extends Controller
{
    public function index()
    {
        Helpers::read_json();
        $post = BlogPost::orderBy('created_at', 'DESC')->paginate(12);
        return view('site.new.new_index',compact('post'));
    }

    public function details($slug_post)
    {
        Helpers::read_json();
        $post = BlogPost::where('slug', $slug_post)->firstOrFail();
        return view('site.new.detail',compact('post'));
    }


}
