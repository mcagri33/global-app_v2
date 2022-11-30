<?php

namespace App\Http\Controllers\Castle;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\Language;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Image;
class CastleBlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $categories = BlogCategory::all();
        $languages = Language::all();
        $posts = BlogPost::paginate(10);
        return view('castle.blog.post.index',compact('categories','languages','posts'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg',
        ]);
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(800, 400)->save('upload/post/' . $name_gen);

        $save_url = 'upload/post/' . $name_gen;
        BlogPost::create([
            'title' => $request->title,
            'id' => Str::uuid(),
            'slug' => SlugService::createSlug(BlogPost::class,'slug',$request->title),
            'language_id' => $request->language_id,
            'category_id' => $request->category_id,
            'image' => $save_url,
            'description' => preg_replace("#([^>])&nbsp;#ui", "$1 ", $request->description),
            'tag' => $request->tag,
            'status' => $request->status,
        ]);
        return redirect()->route('castle.bpost.index')->with('success', 'Success Created!');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function edit($id)
    {
        $categories = BlogCategory::all();
        $languages = Language::all();
        $postFind = BlogPost::find($id);
        return view('castle.blog.post.edit',compact('postFind','categories','languages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $postId = BlogPost::findOrFail($request->id);
        $old_img = $request->old_image;

        if ($request->file('image')){
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(800, 400)->save('upload/post/' . $name_gen);

            $save_url = 'upload/post/' . $name_gen;
            if (file_exists($old_img)) {
                unlink($old_img);
            }
            $postId->title = $request->title;
            $postId->slug = SlugService::createSlug(BlogPost::class,'slug',$request->title);
            $postId->language_id = $request->language_id;
            $postId->category_id = $request->category_id;
            $postId->image = $save_url;

            $postId->description =  preg_replace("#([^>])&nbsp;#ui", "$1 ", $request->description);
            $postId->tag = $request->tag;
            $postId->status = $request->status;
            $postId->update();
        }else{
            $postId->title = $request->title;
            $postId->slug = SlugService::createSlug(BlogPost::class,'slug',$request->title);
            $postId->language_id = $request->language_id;
            $postId->category_id = $request->category_id;
            $postId->description =  preg_replace("#([^>])&nbsp;#ui", "$1 ", $request->description);
            $postId->tag = $request->tag;
            $postId->status = $request->status;
            $postId->update();
        }

        return redirect()->route('castle.bpost.index')->with('success', 'Success Updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $postDelete = BlogPost::findOrFail($id);
        $postDelete->delete();
        return redirect()->route('castle.bpost.index')->with('success', 'Success Deleted!');

    }
}
