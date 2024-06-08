<?php

namespace App\Http\Controllers;

use App\Models\ContactSetting;
use Illuminate\Http\Request;

class ContactSettingController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'whatsapp' => 'required|string|url:http,https',
            'twitter' => 'required|string|url:http,https',
            'tiktok' => 'required|string|url:http,https',
            'instagram' => 'required|string|url:http,https'
        ]);

        $contact_setting = ContactSetting::first();
        $contact_setting->whatsapp = $request->whatsapp;
        $contact_setting->twitter = $request->twitter;
        $contact_setting->tiktok = $request->tiktok;
        $contact_setting->instagram = $request->instagram;
        $contact_setting->save();

        return back();
    }
}
