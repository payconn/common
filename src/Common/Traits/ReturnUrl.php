<?php

namespace Payconn\Common\Traits;

trait ReturnUrl
{
    protected $successfulUrl;

    protected $failureUrl;

    public function getSuccessfulUrl(): string
    {
        return $this->successfulUrl;
    }

    public function setSuccessfulUrl(string $successfulUrl): void
    {
        $this->successfulUrl = $successfulUrl;
    }

    public function getFailureUrl(): string
    {
        return $this->failureUrl;
    }

    public function setFailureUrl(string $failureUrl): void
    {
        $this->failureUrl = $failureUrl;
    }
}
