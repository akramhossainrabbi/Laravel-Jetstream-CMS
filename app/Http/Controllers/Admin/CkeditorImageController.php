<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;

class CkeditorImageController extends Controller
{
    public function store()
    {
        $about = new AboutUs();
        $about->id = 0;
        $about->exists = true;
        $image = $about->addMediaFromRequest('upload')->toMediaCollection('images');

        return response()->json([
            'url' => $image->getUrl()
        ]);
    }
}
