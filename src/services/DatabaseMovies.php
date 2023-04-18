<?php

namespace Fuke\RapidApi\Client\Services;

use Fuke\RapidApi\Client\RapidApiClient;

class MoviesDatabase extends RapidApiClient
{
    /**
     * @param string $prefix
     * @param array $optionalParameters
     * @return void
     */
    public function __construct(string $prefix = '/titles', array $optionalParameters = [])
    {
        $host = $config('RAPIDAPI_MOVIESDB_HOST');

        $url = 'https://' . $host . $prefix;

        parent::__construct($host, $url, $optionalParameters);
    }
}
