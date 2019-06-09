<?php

namespace Payconn\Common;

use Symfony\Component\HttpFoundation\Request;

abstract class AbstractRequest implements RequestInterface
{
    protected $model;

    private $httpClient;

    private $token;

    public function __construct(TokenInterface $token, HttpClientInterface $httpClient, ModelInterface $model)
    {
        $this->token = $token;
        $this->httpClient = $httpClient;
        $this->model = $model;
    }

    public function getHttpClient(): HttpClientInterface
    {
        return $this->httpClient;
    }

    public function getToken(): TokenInterface
    {
        return $this->token;
    }

    public function getIpAddress(): ?string
    {
        $clientIp = (Request::createFromGlobals())->getClientIp();
        if (!$clientIp) {
            $clientIp = '127.0.0.1';
        }

        return $clientIp;
    }

    public function getModel(): ModelInterface
    {
        return $this->model;
    }
}
