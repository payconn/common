<?php

namespace Payconn\Common;

use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request;

abstract class AbstractRequest implements RequestInterface
{
    protected $parameters;
    private $httpClient;

    private $token;

    public function __construct(TokenInterface $token, HttpClientInterface $httpClient, array $parameters)
    {
        $this->token = $token;
        $this->httpClient = $httpClient;
        $this->parameters = new ParameterBag($parameters);
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

    public function getCreditCard(): ?CreditCard
    {
        return $this->parameters->get('creditCard');
    }

    public function isTestMode(): bool
    {
        return (bool) $this->parameters->get('testMode', false);
    }
}
