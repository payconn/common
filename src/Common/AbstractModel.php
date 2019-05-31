<?php

namespace Payconn\Common;

abstract class AbstractModel implements ModelInterface
{
    protected $testMode = false;

    protected $baseUrl;

    public function setTestMode(bool $testMode): ModelInterface
    {
        $this->testMode = $testMode;

        return $this;
    }

    public function isTestMode(): bool
    {
        return $this->testMode;
    }

    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    public function setBaseUrl(string $baseUrl): ModelInterface
    {
        $this->baseUrl = $baseUrl;

        return $this;
    }
}
