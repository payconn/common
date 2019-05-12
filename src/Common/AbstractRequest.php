<?php

namespace Payconn\Common;

abstract class AbstractRequest implements RequestInterface
{
    private $httpClient;

    private $token;

    public function __construct(HttpClientInterface $httpClient, TokenInterface $token)
    {
        $this->httpClient = $httpClient;
        $this->token = $token;
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
