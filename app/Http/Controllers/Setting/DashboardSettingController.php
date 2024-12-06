<?php

namespace App\Http\Controllers\Setting;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class DashboardSettingController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Show the specified resource.
     * 
     * @return \Illuminate\Http\JsonResponse
     * @throws AuthorizationException
     */
    public function update(Request $request)
    {
        $request->validate([
            'name'       => 'nullable|string|max:255',
            'phone'      => 'nullable|string|max:20',
            'email'      => 'nullable|email|max:255',
            'facebook'   => 'nullable|url|max:255',
            'instagram'  => 'nullable|url|max:255',
            'linkedin'   => 'nullable|url|max:255',
            'whatsapp'   => 'nullable|string|max:20',
            'dark_logo'  => 'nullable|image|max:2048',
            'light_logo' => 'nullable|image|max:2048',
            'address_en' => 'nullable|string|max:255',
            'address_ar' => 'nullable|string|max:255',
        ]);


        try {
            DB::beginTransaction();

            $setting = Setting::first();
            $setting->update([
                'name'       => $request->name,
                'address:ar' => $request->address_ar,
                'address:en' => $request->address_en,
                'phone'      => $request->phone,
                'email'      => $request->email,
                'whatsapp'   => $request->whatsapp,
                'facebook'   => $request->facebook,
                'instagram'  => $request->instagram,
                'x'          => $request->x,
                'linkedin'   => $request->linkedin,
            ]);

            if ($request->dark_logo) {
                $setting->clearMediaCollection('dark');

                $setting->addMedia($request->dark_logo)->toMediaCollection('dark');
            }

            if ($request->light_logo) {
                $setting->clearMediaCollection('light');

                $setting->addMedia($request->light_logo)->toMediaCollection('light');
            }

            DB::commit();
            return back()->with('success', 'setting updated successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }
    }
}
