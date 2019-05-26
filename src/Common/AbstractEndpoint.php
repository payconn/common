<?php

namespace Payconn\Common;

abstract class AbstractEndpoint implements EndpointInterface
{
    protected $testMode;

    public function __construct(bool $testMode = false)
    {
        $this->testMode = $testMode;
    }
}
