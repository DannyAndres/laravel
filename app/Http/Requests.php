<?php

namespace App\Http;

use GuzzleHttp\Client;

class Requests
{
    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getUser($username)
    {
        return $this->client->get('https://api.github.com/users/' . $username)
         ->getBody()
         ->getContents();
    }

    public function getEvents($username)
    {
        return $this->client->get('https://api.github.com/users/' . $username . '/events')
            ->getBody()
            ->getContents();
    }

    public function getRepos($username)
    {
        return $this->client->get('https://api.github.com/users/' . $username . '/repos')
            ->getBody()
            ->getContents();
    }

    private function get($url)
    {
        return $this->client->request('GET', $url, [
            'auth' => ['dannyandres', env('GITHUB_KEY')]
        ])
            ->getBody()
            ->getContents();
    }
}
