<?php

namespace Payconn\Common;

use Symfony\Component\HttpFoundation\ParameterBag;

class BaseUrl
{
    private ParameterBag $urls;

    public function __construct()
    {
        $this->urls = new ParameterBag([
            'prod' => [
                'api' => null,
                'secure' => null,
            ],
            'test' => [
                'api' => null,
                'secure' => null,
            ],
        ]);
    }

    public function setProdUrls(string $api, string $secure): self
    {
        $this->urls->set('prod', [
            'api' => $api,
            'secure' => $secure,
        ]);

        return $this;
    }

    public function setTestUrls(string $api, string $secure): self
    {
        $this->urls->set('test', [
            'api' => $api,
            'secure' => $secure,
        ]);

        return $this;
    }

    public function getApiUrl(bool $testMode = false): string
    {
        if ($testMode) {
            return $this->urls->get('test')['api'];
        }

        return $this->urls->get('prod')['api'];
    }

    public function getSecureUrl(bool $testMode = false): string
    {
        if ($testMode) {
            return $this->urls->get('test')['secure'];
        }

        return $this->urls->get('prod')['secure'];
    }
}
