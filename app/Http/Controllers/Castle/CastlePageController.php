<?php

namespace App\Http\Controllers\Castle;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Page;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Image;
class CastlePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $languages = Language::all();
        $pages = Page::paginate(10);
        return view('castle.page.index',compact('languages','pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        $languages = Language::all();
        return view('castle.page.add',compact('languages'));
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
            'page_name' => 'required',
            'image' => 'mimes:jpg,png,jpeg',
        ]);

        $image = $request->file('banner');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(800, 400)->save('upload/banner/' . $name_gen);

        $save_url = 'upload/banner/' . $name_gen;
        Page::create([
            'page_name' => $request->page_name,
            'id' => Str::uuid(),
            'slug' => SlugService::createSlug(Page::class,'slug',$request->page_name),
            'language_id' => $request->language_id,
            'banner' => $save_url,
            'page_content' => preg_replace("#([^>])&nbsp;#ui", "$1 ", $request->page_content),
            'meta_name' => $request->meta_name,
            'meta_desc' => $request->meta_desc,
            'status' => $request->status
        ]);
        return redirect()->route('castle.page.index')->with('success', 'Success Created!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function edit($id)
    {
        $languages = Language::all();
        $pageFind = Page::find($id);
        return view('castle.page.edit',compact('languages','pageFind'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'page_name' => 'required',
        ]);
        $pageId = Page::findOrFail($request->id);
        $old_img = $request->old_image;

        if ($request->file('image')) {
            $image = $request->file('banner');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(800, 400)->save('upload/banner/' . $name_gen);

            $save_url = 'upload/banner/' . $name_gen;

            if (file_exists($old_img)) {
                unlink($old_img);
            }

            $pageId->page_name = $request->page_name;
            $pageId->slug = SlugService::createSlug(Page::class,'slug',$request->page_name);
            $pageId->language_id = $request->language_id;
            $pageId->banner = $save_url;
            $pageId->page_content = preg_replace("#([^>])&nbsp;#ui", "$1 ", $request->page_content);
            $pageId->meta_name = $request->meta_name;
            $pageId->meta_desc = $request->meta_desc;
            $pageId->status = $request->status;
            $pageId->update();
        }else{
            $pageId->page_name = $request->page_name;
            $pageId->slug = SlugService::createSlug(Page::class,'slug',$request->page_name);
            $pageId->language_id = $request->language_id;
            $pageId->page_content = preg_replace("#([^>])&nbsp;#ui", "$1 ", $request->page_content);
            $pageId->meta_name = $request->meta_name;
            $pageId->meta_desc = $request->meta_desc;
            $pageId->status = $request->status;
            $pageId->update();
        }

        return redirect()->route('castle.page.index')->with('success', 'Success Updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $pageDelete = Page::find($id);
        $pageDelete->delete();
        return redirect()->route('castle.page.index')->with('success', 'Success Deleted!');

    }
}
