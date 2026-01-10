<?php

namespace App\Http\Controllers;

use Contentful\Delivery\Client;

class PageController extends Controller
{
    /**
     * @var Client
     */
    private $client;

    /**
     * PageController constructor.
     */
    public function __construct()
    {
        $this->client = new Client(config('contentful.contentful.access_token'), config('contentful.contentful.space_id'), config('contentful.contentful.environment'));
    }

    /**
     * Display the privacy policy page.
     *
     * @return \Illuminate\View\View
     */
    public function privacyPolicy()
    {
        return view('pages.privacy-policy', [
            'image' => $this?->client?->getAsset('784Mx3UpN5Ywj9Qw4XP7l1')?->getFile()?->getUrl() ?? '',
        ]);
    }
}
