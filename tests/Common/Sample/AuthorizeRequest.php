<?php

namespace Payconn\Tests\Common\Sample;

use Payconn\Common\AbstractRequest;
use Payconn\Common\ResponseInterface;

class AuthorizeRequest extends AbstractRequest
{
    public function send(): ResponseInterface
    {
        return new AuthorizeResponse([
            'StatusCode' => '00',
            'ReturnCode' => '00',
            'ReturnMessage' => 'Successful',
        ]);
    }
}
