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
        return (Request::createFromGlobals())->getClientIp();
    }

    public function getModel(): ModelInterface
    {
        return $this->model;
    }
}
