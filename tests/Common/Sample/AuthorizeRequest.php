<?php

namespace Payconn\Tests\Common\Sample;

use Payconn\Common\AbstractRequest;
use Payconn\Common\ResponseInterface;

class AuthorizeRequest extends AbstractRequest
{
    public function send(): ResponseInterface
    {
        return new AuthorizeResponse(new \Payconn\Tests\Common\Sample\Authorize(new Token('username', 'pass')), [
            'StatusCode' => '00',
            'ReturnCode' => '00',
            'ReturnMessage' => 'Successful',
        ]);
    }
}
