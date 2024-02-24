<?php

namespace App\Http\Controllers;

use ImageOptimizer;

class GalleryController extends Controller
{
    public function index($experience)
    {
        $title = $this->getTitle($experience);
        $headerImage = asset("images/headers/$experience.jpeg");
        $images = \File::allFiles(public_path('images/galleries/' . $experience));

        return view('pages.experiences-and-occasions.template', compact('title', 'headerImage', 'images'));
    }

    protected function getTitle($experience)
    {
        $experiences = [
            'weddings'            => 'Weddings',
            'celebrations'        => 'Celebrations',
            'honeymoons'          => 'Honeymoons',
            'meetings-and-events' => 'Meetings and Events',
            'family-experiences'  => 'Family Experiences',
            'exclusive-takeovers' => 'Exclusive Takeovers',
            'incentives'          => 'Incentives',
        ];

        return $experiences[$experience];
    }
}
