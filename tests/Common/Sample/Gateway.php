<?php

namespace Payconn\Tests\Common\Sample;

use Payconn\Common\AbstractGateway;
use Payconn\Common\Exception\NotSupportedMethodException;
use Payconn\Common\ModelInterface;
use Payconn\Common\ResponseInterface;

class Gateway extends AbstractGateway
{
    public function authorize(ModelInterface $model): ResponseInterface
    {
        return ($this->createRequest(AuthorizeRequest::class, $model))->send();
    }

    public function authorizeComplete(ModelInterface $model): ResponseInterface
    {
        throw new NotSupportedMethodException('Authorize complete not supported');
    }

    public function purchase(ModelInterface $model): ResponseInterface
    {
        throw new NotSupportedMethodException('Purchase not supported');
    }

    public function purchaseComplete(ModelInterface $model): ResponseInterface
    {
        throw new NotSupportedMethodException('Purchase complete not supported');
    }

    public function void(ModelInterface $model): ResponseInterface
    {
        throw new NotSupportedMethodException('Void not supported');
    }

    public function refund(ModelInterface $model): ResponseInterface
    {
        throw new NotSupportedMethodException('Refund not supported');
    }

    public function getBaseUrl(bool $testMode = false): string
    {
        return 'BASE_URL';
    }

    public function getBaseSecureUrl(bool $testMode = false): string
    {
        return 'BASE_SECURE_URL';
    }

}
