<?php

namespace App\Http\Controllers;

use App\Http\Services\HomepageService;
use Illuminate\View\View;

class HomepageController extends Controller
{

    /**
     * The Contentful service instance.
     *
     * @var HomepageService
     */
    protected HomepageService $service;

    /**
     * Create a new HomepageController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->service = new HomepageService();
    }

    /**
     * Display the homepage.
     *
     * @return View
     */
    public function index(): View
    {
        return view('pages.homepage', [
            'slides' => $this->service->getCarousel(),
            'rotation' => $this->service->getRotation(),
        ]);
    }
}
