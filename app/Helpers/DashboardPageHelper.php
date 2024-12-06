<?php

namespace App\Helpers;

use App\Models\Seo;
use App\Http\Resources\Seo\SeoResource;
use Illuminate\Http\Exceptions\HttpResponseException;

trait DashboardPageHelper
{
    /**
     * $pages
     * 
     * @var array
     */
    private $pages = [
        'home',
        'about_us',
        'services',
        'contact_us',
    ];

    /**
     * check the $page if exists or return exception
     * 
     * @param string $page
     * @return \App\Models\Seo
     */
    public function checkPage(string $page): \App\Models\Seo
    {
        if (!in_array($page, $this->pages)) {
            $this->throwError('the page ' . $page . ' not found');
        } else if (! ($seo = Seo::where('name_id', $page)->first())) {
            $this->throwError('the page ' . $page . ' dos not exists');
        }

        return $seo;
    }

    /**
     * throw an exception
     * 
     * @param string $error
     * @return void
     */
    private function throwError(string $error): void
    {
        throw new HttpResponseException(response()->json([
            'status' => false,
            'error' => $error
        ], 400));
    }
}
