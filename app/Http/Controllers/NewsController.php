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
        $this->client = new Client(config('contentful.contentful.access_token'), config('contentful.contentful.space_id'), config('contentful.contentful.environment'));
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
