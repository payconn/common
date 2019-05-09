<?php

namespace Payconn\Common;

use Payconn\Common\Exception\RuntimeException;

abstract class AbstractGateway implements GatewayInterface
{
    protected $httpClient;

    protected $parameters;

    public function __construct(ClientInterface $httpClient = null)
    {
        if (!$httpClient) {
            $httpClient = new Client();
        }

        $this->httpClient = $httpClient;
    }

    protected function createRequest($class, array $parameters): RequestInterface
    {
        if (!class_exists($class)) {
            throw new RuntimeException('Request class not found');
        }
        $obj = new $class($this->httpClient, $parameters);

        return $obj->send();
    }
}
