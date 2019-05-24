<?php

namespace Payconn\Tests\Common\Sample;

use Payconn\Common\AbstractResponse;

class AuthorizeResponse extends AbstractResponse
{
    public function isSuccessful(): bool
    {
        return '00' == (bool) $this->getParameters()->get('StatusCode') ? true : false;
    }

    public function getResponseMessage(): string
    {
        return $this->getParameters()->get('ReturnMessage');
    }

    public function getResponseCode(): string
    {
        return $this->getParameters()->get('ReturnCode');
    }

    public function getResponseBody(): array
    {
        return $this->getParameters()->all();
    }

    public function isRedirection(): bool
    {
        return false;
    }

    public function redirect(): void
    {
    }
}
