<?php

namespace App\Http\Controllers\Castle;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Setting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;
use DB;
use Image;
class CastleLanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $languages = Language::paginate(10);
        return view('castle.language.index', compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('castle.language.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'short_name' => 'required',
            'flag' => 'required|image|mimes:jpg,jpeg,png,gif',
        ], [
            'name.required' => 'Bu alan zorunludur!',
            'short_name.required' => 'Bu alan zorunludur!',
            'flag.required' => 'Bu alan zorunludur!',

        ]);
        if ($request->is_default == 'Yes') {
            DB::table('languages')->update(['is_default' => 'No']);
        }
        $image = $request->file('flag');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(800, 400)->save('upload/flag/' . $name_gen);

        $save_url = 'upload/flag/' . $name_gen;

        $languageAdd = new Language();
        $languageAdd->id = Str::uuid();
        $languageAdd->name = $request->name;
        $languageAdd->flag = $save_url;
        $languageAdd->short_name = $request->short_name;
        $languageAdd->is_default = $request->is_default;
        $languageAdd->save();

        // When create language it will open settings with id
        $setting = new Setting();
        $setting->id = Str::uuid();
        $setting->language_id = $languageAdd->id;
        $setting->save();

        $test_file = file_get_contents(resource_path('language/sample.json'));
        file_put_contents(resource_path('language/' . $request->short_name . '.json'), $test_file);
        return redirect()->route('castle.language.index')->with('success', 'Başarıyla Kayıt Yapıldı!');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function edit($id)
    {
        $language = Language::find($id);
        return view('castle.language.edit', compact('language'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'short_name' => 'required',

        ], [
            'name.required' => 'Bu alan zorunludur!',
            'short_name.required' => 'Bu alan zorunludur!',
        ]);


        $language = Language::findOrFail($request->id);
        $old_img = $request->old_image;
        if ($request->is_default == 'Yes') {
            DB::table('languages')->update(['is_default' => 'No']);
        }
        if ($request->short_name) {
            unlink(resource_path('language/' . $language->short_name . '.json'));
            $test_file = file_get_contents(resource_path('language/sample.json'));
            file_put_contents(resource_path('language/' . $request->short_name . '.json'), $test_file);
        }
        if ($request->file('flag')){
            $image = $request->file('flag');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(800, 400)->save('upload/slider/' . $name_gen);

            $save_url = 'upload/flag/' . $name_gen;

            if (file_exists($old_img)) {
                unlink($old_img);
            }

            $language->name = $request->name;
            $language->flag = $save_url;
            $language->short_name = $request->short_name;
            $language->is_default = $request->is_default;
            $language->update();
        }else{
            $language->name = $request->name;
            $language->short_name = $request->short_name;
            $language->is_default = $request->is_default;
            $language->update();
        }

        return redirect()->route('castle.language.index')->with('success', 'Başarıyla Güncellendi!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $language = Language::where('id', $id)->first();
        if ($language->is_default == 'Yes') {
            DB::table('languages')->update(['is_default' => 'No']);
        }
        unlink(resource_path('language/' . $language->short_name . '.json'));
        $language->delete();
        return redirect()->route('castle.language.index')->with('Başarıyla Silindi!');
    }

    public function translation($id)
    {
        $language_data = Language::where('id', $id)->first();
        $lang_id = $language_data->id;
        $lang_name = $language_data->name;
        $json_data = json_decode(file_get_contents(resource_path('language/' . $language_data->short_name . '.json')));
        return view('castle.language.translation', compact('json_data', 'lang_id', 'lang_name'));
    }

    public function translation_update(Request $request, $id)
    {
        $language_data = Language::where('id', $id)->first();

        $arr1 = [];
        $arr2 = [];

        foreach ($request->arr_key as $val) {
            $arr1[] = $val;
        }

        foreach ($request->arr_value as $val) {
            $arr2[] = $val;
        }

        for ($i = 0; $i < count($arr1); $i++) {
            $data[$arr1[$i]] = $arr2[$i];
        }

        $after_encode = json_encode($data, JSON_UNESCAPED_UNICODE);
        file_put_contents(resource_path('language/' . $language_data->short_name . '.json'), $after_encode);
        return redirect()->route('castle.language.index')->with('success', 'Başarıyla Güncellendi!');

    }
}
