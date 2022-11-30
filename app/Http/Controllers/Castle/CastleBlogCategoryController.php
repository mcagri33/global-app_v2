<?php

namespace App\Http\Controllers\Castle;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\Language;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class CastleBlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $categories = BlogCategory::paginate(10);
        $languages = Language::all();
        return view('castle.blog.category.index',compact('categories','languages'));
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
            'name' => 'required',
        ]);
        BlogCategory::create([
            'name' => $request->name,
            'id' => Str::uuid(),
            'slug' => SlugService::createSlug(BlogCategory::class,'slug',$request->name),
            'language_id' => $request->language_id
        ]);

        return redirect()->route('castle.bcategory.index')->with('success', 'Success Created!');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function edit($id)
    {
        $bcategoryFind = BlogCategory::find($id);
        $languages = Language::all();
        return view('castle.blog.category.edit',compact('bcategoryFind','languages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function update(Request $request)
    {
        $bcategoryId = BlogCategory::findOrFail($request->id);
        $bcategoryId->name = SlugService::createSlug(BlogCategory::class,'slug',$request->name);
        $bcategoryId->slug = $request->name;
        $bcategoryId->language_id = $request->language_id;
        return redirect()->route('castle.bcategory.index')->with('success', 'Success Created!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $bcategoryDelete = BlogCategory::find($id);
        $bcategoryDelete->delete();
        return redirect()->route('castle.bcategory.index')->with('success', 'Success Created!');
    }
}
