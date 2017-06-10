<?php

namespace App\Services;

class Weibo
{
    protected $http;

    /**
     * Weibo constructor.
     *
     * @param $http
     */
    public function __construct(Http $http)
    {
        $this->http = $http;
    }

    public function publish($status)
    {
        $this->http->post($status);
    }
}
