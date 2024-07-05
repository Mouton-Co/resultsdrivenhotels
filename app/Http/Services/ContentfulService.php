<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Http;

class ContentfulService
{
    /**
     * The base URL for the Contentful API.
     *
     * @var string
     */
    const BASE_URL = 'https://cdn.contentful.com';

    /**
     * The space ID of the Contentful space.
     *
     * @var string
     */
    protected string $spaceId;

    /**
     * The environment ID of the Contentful space.
     *
     * @var string
     */
    protected string $environmentId;

    /**
     * The access token for the Contentful space.
     *
     * @var string
     */
    protected string $accessToken;

    /**
     * Create a new Contentful service instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->spaceId = config('contentful.contentful.space_id');
        $this->environmentId = config('contentful.contentful.environment');
        $this->accessToken = config('contentful.contentful.access_token');
    }

    /**
     * Get the entries from the Contentful space.
     *
     * @param array $params
     * @return array
     */
    public function getEntries($params = []): array
    {
        return Http::retry(3, 250)->get(
            $this::BASE_URL . "/spaces/{$this->spaceId}/environments/{$this->environmentId}/entries",
            array_merge(
                [
                    'access_token' => $this->accessToken,
                ],
                $params,
            ),
        )->json();
    }

    /**
     * Get entry or asset from includes array.
     *
     * @param array $includes
     * @param string $sysId
     *
     * @return array|null
     */
    public function getItemFrom(array $includes, string $sysId): ?array
    {
        foreach ($includes as $include) {
            if ($include['sys']['id'] === $sysId) {
                return $include;
            }
        }

        return null;
    }
}
