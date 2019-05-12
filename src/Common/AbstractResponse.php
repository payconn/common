<?php

namespace Payconn\Common;

use Symfony\Component\HttpFoundation\ParameterBag;

abstract class AbstractResponse implements ResponseInterface
{
    private $parameters;

    public function __construct(array $parameters)
    {
        $this->parameters = new ParameterBag($parameters);
    }

    public function getParameters(): ParameterBag
    {
        return $this->parameters;
    }
}
