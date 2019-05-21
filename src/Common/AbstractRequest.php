<?php

namespace Payconn\Common;

use Symfony\Component\HttpFoundation\ParameterBag;

abstract class AbstractRequest implements RequestInterface
{
    private $httpClient;

    private $token;

    private $parameters;

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

    public function getCreditCard(): CreditCard
    {
        return $this->parameters->get('creditCard', new CreditCard());
    }
}
