<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs as About;

class AboutUs extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.about-us', [
            'about' => About::where('id', 1)->first(),
        ]);
    }

    public function update(Request $request)
    {
        $about = About::find(1);
        $about->description = $request->description;
        $about->update();

        return back();
    }

}
