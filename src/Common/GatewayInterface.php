<?php

namespace Payconn\Common;

interface GatewayInterface
{
    public function createRequest(string $class, ModelInterface $model): RequestInterface;

    public function authorize(ModelInterface $model): ResponseInterface;

    public function authorizeComplete(ModelInterface $model): ResponseInterface;

    public function purchase(ModelInterface $model): ResponseInterface;

    public function purchaseComplete(ModelInterface $model): ResponseInterface;

    public function refund(ModelInterface $model): ResponseInterface;

    public function overrideBaseUrl(ModelInterface $model): void;
}
