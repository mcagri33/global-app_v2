<?php

namespace App\Http\Controllers\Site;

use App\Helper\Helpers;
use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Language;
use Illuminate\Http\Request;

class SiteBlogController extends Controller
{

    public function index(Request $request)
    {
        Helpers::read_json();
        if(!session()->get('session_short_name')) {
            $current_short_name = Language::where('is_default','Yes')->first()->short_name;
        } else {
            $current_short_name = session()->get('session_short_name');
        }
        $current_language_id = Language::where('short_name',$current_short_name)->first()->id;

        $posts = BlogPost::where('language_id',$current_language_id)->where('status',1)->orderBy('updated_at', 'DESC')->paginate(12);
        return view('site.new.new_index',compact('posts'));
    }

    /*public function getPosts(Request $request){

        $start = $request->get("start");

        // Fetch records
        $posts = BlogPost::select('*')
            ->skip($start)
            ->take($this->rowperpage)
            ->get();

        $html = "";
        foreach($posts as $p){
            $html .= '<div class="col-md-3">
                    <div class="news-box"> <small>'.$p->bCategory->name.'</small>
                        <h4>'.$p->title.'.</h4>
                        <span>'.$p->created_at->format('F Y').'</span>
                        <p>'.Str::limit(strip_tags($p->description), 100).'</p>
                        <a href="'.route('site.new.detail','.$p->slug.').'">{{Read_More}}</a> </div>
                    <!-- end news-box -->
                </div>';
        }

        $data['html'] = $html;

        return response()->json($data);

    }*/

    public function details($slug_post)
    {
        Helpers::read_json();
        $post = BlogPost::where('slug', $slug_post)->firstOrFail();
        return view('site.new.detail',compact('post'));
    }


}
