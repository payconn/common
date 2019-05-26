<?php

namespace Payconn\Common;

interface EndpointInterface
{
    public function __construct(bool $testMode = false);

    public function getBaseUrl(): string;

    public function getSecureBaseUrl(): string;
}
