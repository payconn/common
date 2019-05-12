<?php

namespace Payconn\Tests\Common\Sample;

use Payconn\Common\AbstractGateway;
use Payconn\Common\Exception\NotSupportedMethodException;
use Payconn\Common\ResponseInterface;

class Gateway extends AbstractGateway
{
    public function authorize(array $parameters): ResponseInterface
    {
        return ($this->createRequest(AuthorizeRequest::class, $parameters))->send();
    }

    public function authorizeComplete(array $parameters): ResponseInterface
    {
        throw new NotSupportedMethodException('Authorize complete not supported');
    }

    public function purchase(array $parameters): ResponseInterface
    {
        throw new NotSupportedMethodException('Purchase not supported');
    }

    public function purchaseComplete(array $parameters): ResponseInterface
    {
        throw new NotSupportedMethodException('Purchase complete not supported');
    }

    public function void(array $parameters): ResponseInterface
    {
        throw new NotSupportedMethodException('Void not supported');
    }

    public function refund(array $parameters): ResponseInterface
    {
        throw new NotSupportedMethodException('Refund not supported');
    }
}
