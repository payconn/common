<?php

namespace Payconn\Common;

abstract class AbstractRequest implements RequestInterface
{
    private $httpClient;

    private $token;

    public function __construct(TokenInterface $token, HttpClientInterface $httpClient = null)
    {
        $this->token = $token;
        if (!$httpClient) {
            $httpClient = new HttpClient();
        }
        $this->httpClient = $httpClient;
    }

    public function getHttpClient(): HttpClientInterface
    {
        return $this->httpClient;
    }

    public function getToken(): TokenInterface
    {
        return $this->token;
    }
}
