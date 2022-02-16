<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use App\Traits\UploadAble;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    use UploadAble;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.settings.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->has('site_logo') && ($request->file('site_logo') instanceof UploadedFile)) {

            if (config('settings.site_logo') != null) {
                $this->deleteOne(config('settings.site_logo'));
            }
            $logo = $this->uploadOne($request->file('site_logo'), 'img');
            Setting::set('site_logo', $logo);
    
        } elseif ($request->has('site_favicon') && ($request->file('site_favicon') instanceof UploadedFile)) {
    
            if (config('settings.site_favicon') != null) {
                $this->deleteOne(config('settings.site_favicon'));
            }
            $favicon = $this->uploadOne($request->file('site_favicon'), 'img');
            Setting::set('site_favicon', $favicon);
    
        } elseif ($request->has('welcome_image') && ($request->file('welcome_image') instanceof UploadedFile)) {
    
            if (config('settings.welcome_image') != null) {
                $this->deleteOne(config('settings.welcome_image'));
            }
            $welcome_img = $this->uploadOne($request->file('welcome_image'), 'img');
            Setting::set('welcome_image', $welcome_img);
    
        }elseif ($request->has('featured_image') && ($request->file('featured_image') instanceof UploadedFile)) {
    
            if (config('settings.featured_image') != null) {
                $this->deleteOne(config('settings.featured_image'));
            }
            $featured_img = $this->uploadOne($request->file('featured_image'), 'img');
            Setting::set('featured_image', $featured_img);
    
        } else {
    
            $keys = $request->except('_token');
    
            foreach ($keys as $key => $value)
            {
                Setting::set($key, $value);
            }
        }
        return back()->with('success', 'Settings updated successfully.');
    }
}
