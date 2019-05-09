<?php

namespace Payconn\Common;

use Symfony\Component\HttpFoundation\ParameterBag;

abstract class AbstractRequest implements RequestInterface
{
    protected $httpClient;

    protected $parameters;

    public function __construct(Client $httpClient, array $parameters)
    {
        $this->httpClient = $httpClient;
        $this->parameters = new ParameterBag($parameters);
    }
}
