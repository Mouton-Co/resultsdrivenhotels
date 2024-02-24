<?php

namespace App\Http\Controllers;

use ImageOptimizer;

class GalleryController extends Controller
{
    public function index($experience)
    {
        if (!in_array($experience, [
            'weddings',
            'celebrations',
            'honeymoons',
            'meetings-and-events',
            'family-experiences',
            'exclusive-takeovers',
            'incentives'
        ])) {
            abort(404);
        }

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
