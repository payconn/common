<?php

namespace Payconn\Common;

abstract class AbstractModel implements ModelInterface
{
    protected $testMode = false;

    protected $baseUrl;

    protected $token;

    protected $creditCard;

    protected $currency;

    protected $amount;

    public function __construct(TokenInterface $token)
    {
        $this->token = $token;
    }

    public function getToken(): TokenInterface
    {
        return $this->token;
    }

    public function setTestMode(bool $testMode): ModelInterface
    {
        $this->testMode = $testMode;

        return $this;
    }

    public function isTestMode(): bool
    {
        return $this->testMode;
    }

    public function getCreditCard(): CreditCard
    {
        return $this->creditCard;
    }

    public function setCreditCard(CreditCard $creditCard): ModelInterface
    {
        $this->creditCard = $creditCard;

        return $this;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): ModelInterface
    {
        $this->currency = $currency;

        return $this;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function setAmount($amount): ModelInterface
    {
        $this->amount = $amount;

        return $this;
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
