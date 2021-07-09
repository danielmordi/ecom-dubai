<?php

namespace App\Http\Controllers;

use App\Models\SiteConfig;
use Illuminate\Http\Request;

class SiteConfigController extends Controller
{
    public function index()
    {
        $config = SiteConfig::find(1);
        return view('admin.settings.index')->with('config', $config);
    }

    public function contactInfo(Request $request)
    {
        // SiteConfig::updateOrCreate([
        //     'sitename' => $request->get('site_name'),
        //     'location' => $request->get('location'),
        //     'facebook' => $request->get('facebook'),
        //     'instagram' => $request->get('instagram'),
        //     'email' => $request->get('email'),
        //     'whatsapp' => $request->get('whatsapp'),
        // ]);

        $config = SiteConfig::find(1);
        $config->sitename = $request->get('site_name');
        $config->location = $request->get('location');
        $config->facebook = $request->get('facebook');
        $config->instagram = $request->get('instagram');
        $config->email = $request->get('email');
        $config->whatsapp = $request->get('whatsapp');
        $config->save();

        return response()->json([
            'success' => 'Settings saved!'
        ]);
    }

    public function storeLogo(Request $request)
    {
        if ($request->file) {
            $file = $request->file;
            $filename = trim($file->getClientOriginalName());
            $file->storeAs('storage/logo', $filename, ['disk' => 'public']);
        }

        $request->validate([
            'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
        ]);

        $logo = SiteConfig::find(1);
        $logo->logo = $filename;
        $logo->save();

        return response()->json([
            'success' => 'Upload was successful!',
            'filename' => $filename
        ]);
    }
}
