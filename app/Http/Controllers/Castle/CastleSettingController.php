<?php

namespace App\Http\Controllers\Castle;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Setting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Image;
class CastleSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function info()
    {
        $langs = Language::all();
        $langId = Language::where('is_default','Yes')->first()->id;
        $infoFind = Setting::where('language_id',$langId)->first();

        return view('castle.setting.info',['infoFind' => $infoFind,'langs' => $langs]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function infoUpdate(Request $request)
    {
        $request->validate([
            'site_title' => 'required',
        ]);

        $infoId = Setting::findOrFail($request->id);
        $old_img = $request->old_image;
        $files = [];

        if($request->file('logo'))
            $files[] = $request->file('logo');
        if($request->file('favicon'))
            $files[] = $request->file('favicon');
        if($request->file('logo_dark'))
            $files[] = $request->file('logo_dark');

        foreach ($files as $file) {
            if(!empty($file)) {
                $filenames[] = $file->getClientOriginalName();
                $file->move(base_path() . '/public/upload/setting', end($filenames));
            }
        }
        if (file_exists($old_img)) {
            unlink($old_img);
        }

        if ($request->file('logo') || $request->file('favicon') || $request->file('logo_dark')) {

            $infoId->site_title = $request->site_title;
            $infoId->logo = 'upload/setting/' . $filenames[0];
            $infoId->favicon = 'upload/setting/' . $filenames[1];
            $infoId->logo_dark = 'upload/setting/' . $filenames[2];
            $infoId->company_desc = $request->company_desc;
            $infoId->email = $request->email;
            $infoId->meta_name = $request->meta_name;
            $infoId->meta_description = $request->meta_description;
            $infoId->address = $request->address;
            $infoId->phone = $request->phone;
            $infoId->fax = $request->fax;
            $infoId->gsm = $request->gsm;
            $infoId->update();
        }else{
            $infoId->site_title = $request->site_title;
            $infoId->company_desc = $request->company_desc;
            $infoId->email = $request->email;
            $infoId->meta_name = $request->meta_name;
            $infoId->meta_description = $request->meta_description;
            $infoId->address = $request->address;
            $infoId->phone = $request->phone;
            $infoId->fax = $request->fax;
            $infoId->gsm = $request->gsm;
            $infoId->update();
        }
            return redirect()->back()->with('success','Success Updated!');

    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function social()
    {
        $langs = Language::all();
        $langId = Language::where('is_default','Yes')->first()->id;
        $socialFind = Setting::where('language_id',$langId)->first();

        return view('castle.setting.social',['socialFind' => $socialFind,'langs' => $langs]);
    }

    public function socialUpdate(Request $request)
    {
        $socialId = Setting::findOrFail($request->id);
        $socialId->facebook = $request->facebook;
        $socialId->twitter = $request->twitter;
        $socialId->instagram = $request->instagram;
        $socialId->youtube = $request->youtube;
        $socialId->linkedin = $request->linkedin;
        $socialId->update();

        return redirect()->back()->with('success','Success Updated!');

    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function smtp()
    {
        $langs = Language::all();
        $langId = Language::where('is_default','Yes')->first()->id;
        $smtpFind = Setting::where('language_id',$langId)->first();

        return view('castle.setting.smtp',['smtpFind' => $smtpFind,'langs' => $langs]);
    }

    public function smtpUpdate(Request $request)
    {
        $smtpId = Setting::findOrFail($request->id);
        $smtpId->smtp_host = $request->smtp_host;
        $smtpId->smtp_port = $request->smtp_port;
        $smtpId->smtp_mail = $request->smtp_mail;
        $smtpId->smtp_pass = $request->smtp_pass;
        $smtpId->update();

        return redirect()->back()->with('success','Success Updated!');

    }



}
