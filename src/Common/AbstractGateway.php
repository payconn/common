<?php

namespace Payconn\Common;

use Payconn\Common\Exception\NotFoundException;

abstract class AbstractGateway implements GatewayInterface
{
    private $httpClient;

    private $token;

    public function __construct(TokenInterface $token, HttpClientInterface $httpClient = null)
    {
        if (!$httpClient) {
            $httpClient = new HttpClient();
        }
        $this->httpClient = $httpClient;
        $this->token = $token;
    }

    public function createRequest(string $class, array $parameters): RequestInterface
    {
        if (!class_exists($class)) {
            throw new NotFoundException('Method class not found');
        }

        return new $class($this->token, $this->httpClient);
    }
}
