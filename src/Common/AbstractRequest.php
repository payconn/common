<?php

namespace Payconn\Common;

abstract class AbstractRequest implements RequestInterface
{
    private $httpClient;

    private $token;

    public function __construct(TokenInterface $token, HttpClientInterface $httpClient)
    {
        $this->token = $token;
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
