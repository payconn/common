<?php

namespace Payconn\Common;

interface ModelInterface
{
    public function __construct(TokenInterface $token);

    public function getToken(): TokenInterface;

    public function setTestMode(bool $testMode): self;

    public function isTestMode(): bool;

    public function setBaseUrl(string $baseUrl): self;

    public function getBaseUrl(): string;
}
