<?php

namespace App\Http\Controllers\Setting;

use App\Models\Setting;
use App\Http\Controllers\Controller;
use App\Http\Resources\Setting\SettingResource;

class SettingController extends Controller
{
    /**
     * Show the specified resource.
     * 
     * @return \Illuminate\Http\JsonResponse
     * @throws AuthorizationException
     */
    public function index()
    {
        return new SettingResource(Setting::first());
    }


    public function logo()
    {
        return response()->json([
            'dark-logo' => Setting::first()->getFirstMediaUrl('dark'),
            'light-logo' => Setting::first()->getFirstMediaUrl('light'),
        ]);
    }
}
