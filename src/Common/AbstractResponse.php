<?php

namespace Payconn\Common;

use Symfony\Component\HttpFoundation\ParameterBag;

abstract class AbstractResponse implements ResponseInterface
{
    protected $parameters;

    protected $model;

    public function __construct(ModelInterface $model, array $parameters)
    {
        $this->model = $model;
        $this->parameters = new ParameterBag($parameters);
    }

    public function getParameters(): ParameterBag
    {
        return $this->parameters;
    }

    public function getModel(): ModelInterface
    {
        return $this->model;
    }
}
