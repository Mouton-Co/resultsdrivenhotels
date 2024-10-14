<?php

namespace App\Http\Controllers;

use Contentful\Delivery\Client;
use Contentful\Delivery\Query;
use Contentful\RichText\Renderer;

class NewsController extends Controller
{
    /**
     * @var Client
     */
    public Client $client;

    /**
     * @var Renderer
     */
    public Renderer $renderer;

    /**
     * NewsController constructor.
     */
    public function __construct()
    {
        $this->client = new Client(env('CONTENTFUL_ACCESS_TOKEN'), env('CONTENTFUL_SPACE_ID'), env('CONTENTFUL_ENVIRONMENT'));
        $this->renderer = new Renderer();
        $this->renderer->enableEmbeddedImageRenderer(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): \Illuminate\View\View
    {
        $entries = $this->client->getEntries((new Query())->setContentType('newsArticle')->setLimit(12));

        return view('news.index')->with([
            'entries' => $entries,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function show($slug): \Illuminate\View\View
    {
        $entries = $this->client->getEntries((new Query())->setContentType('newsArticle')->where('fields.slug', $slug));

        if ($entries->getTotal() == 0) {
            abort(404);
        }

        return view('news.show')->with([
            'entry' => $entries->getItems()[0],
            'renderer' => $this->renderer,
        ]);
    }
}
