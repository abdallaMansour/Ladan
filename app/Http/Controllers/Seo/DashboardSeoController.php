<?php

namespace App\Http\Controllers\Seo;

use App\Models\Seo;
use App\Traits\ApiTrait;
use App\Helpers\PageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Seo\SeoRequest;
use App\Repositories\Seo\SeoRepository;
use App\Http\Resources\Seo\DashboardSeoResource;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\ResponseTrait;

class DashboardSeoController extends Controller
{
    use AuthorizesRequests, ValidatesRequests, ResponseTrait, PageHelper;

    /**
     * Show the specified resource.
     * 
     * @param \App\Models\Seo $seo
     * @return Factory|View
     * @throws AuthorizationException
     */
    public function show(string $page)
    {
        $seo = $this->checkPage($page);

        return view('pages.seos.update', ['seo' => $seo, 'page' => $page]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $page, SeoRequest $request)
    {
        $seo = Seo::where('name_id', $page)->first();

        $dataToUpdate = [
            'title:ar' => $request->title_ar,
            'title:en' => $request->title_en,
            'description:ar' => $request->description_ar,
            'description:en' => $request->description_en,
            'keyword:ar' => $request->keyword_ar,
            'keyword:en' => $request->keyword_en,
        ];

        // Add additional fields for 'home' type if necessary
        if ($page == 'home') {
            $dataToUpdate['site_name:ar'] = $request->site_name_ar;
            $dataToUpdate['site_name:en'] = $request->site_name_en;
        }

        if ($seo) {
            // Update existing record
            $seo->update($dataToUpdate);
        } else {
            // Create a new record
            Seo::create(array_merge(['name_id' => $page], $dataToUpdate));
        }

        if ($request->hasFile('image')) {

            $seo->clearMediaCollection('image');

            $seo->addMedia($request->image)->toMediaCollection('image');
        }

        if ($request->hasFile('icon')) {

            $seo->clearMediaCollection('icon');

            $seo->addMedia($request->icon)->toMediaCollection('icon');
        }

        return back()->with('success', 'SEO updated successfully');
    }
}
