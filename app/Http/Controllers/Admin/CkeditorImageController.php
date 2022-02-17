<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pages;

class CkeditorImageController extends Controller
{
    public function store()
    {
        $page = new Pages();
        $page->id = 0;
        $page->exists = true;
        $image = $page->addMediaFromRequest('upload')->toMediaCollection('images');

        return response()->json([
            'url' => $image->getUrl()
        ]);
    }
}
