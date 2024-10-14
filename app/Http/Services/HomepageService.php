<?php

namespace App\Http\Services;

use Contentful\Delivery\Client;
use Contentful\Delivery\Query;

class HomepageService
{
    /**
     * The Contentful service instance.
     *
     * @var ContentfulService
     */
    protected ContentfulService $service;

    /**
     * The response from the Contentful API.
     *
     * @var array
     */
    protected array $response;

    /**
     * @var Client
     */
    public Client $client;

    /**
     * Create a new Contentful service instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->service = new ContentfulService();
        $this->client = new Client(env('CONTENTFUL_ACCESS_TOKEN'), env('CONTENTFUL_SPACE_ID'), env('CONTENTFUL_ENVIRONMENT'));
        $this->response = $this->service->getEntries([
            'content_type' => 'homepageCarousel',
            'limit' => 1,
            'include' => '1',
        ]);
    }

    /**
     * Get the carousel slides for the homepage.
     *
     * @return array
     */
    public function getCarousel(): array
    {
        $slides = [];

        foreach ($this->response['items'] as $item) {
            foreach ($item['fields']['tabs'] as $tab) {
                $entry = $this->service->getItemFrom($this->response['includes']['Entry'], $tab['sys']['id']);
                $image = $this->service->getItemFrom($this->response['includes']['Asset'], $entry['fields']['image']['sys']['id']);
                $slides[] = [
                    'heading' => $entry['fields']['heading'] ?? '',
                    'description' => $entry['fields']['description'] ?? '',
                    'image' => $image['fields']['file']['url'] ?? '',
                ];
            }
        }

        return $slides;
    }

    /**
     * Get the rotation for the carousel.
     *
     * @return string
     */
    public function getRotation(): string
    {
        if (!empty($this->response['items'][0]['fields']['rotation'])) {
            return $this->response['items'][0]['fields']['rotation'];
        }

        return '0';
    }

    /**
     * Get the latest news articles.
     *
     * @return \Contentful\Core\Resource\ResourceArray
     */
    public function getLatestNews(): \Contentful\Core\Resource\ResourceArray
    {
        return $this->client->getEntries((new Query())->setContentType('newsArticle')->setLimit(6));
    }
}
