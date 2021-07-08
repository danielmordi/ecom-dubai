<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteConfigController extends Controller
{
    public function index()
    {
        return view('admin.settings.index');
    }
}
