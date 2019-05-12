<?php

namespace Payconn\Tests\Common\Sample;

use Payconn\Common\TokenInterface;

class Token implements TokenInterface
{
    private $username;

    private $password;

    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}
