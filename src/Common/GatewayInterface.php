<?php

namespace Payconn\Common;

interface GatewayInterface
{
    public function createRequest(string $class, array $parameters): RequestInterface;

    public function authorize(array $parameters): ResponseInterface;

    public function authorizeComplete(array $parameters): ResponseInterface;

    public function purchase(array $parameters): ResponseInterface;

    public function purchaseComplete(array $parameters): ResponseInterface;

    public function void(array $parameters): ResponseInterface;

    public function refund(array $parameters): ResponseInterface;
}
