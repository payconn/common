<?php

namespace Payconn\Common;

use Payconn\Common\Exception\NotFoundClassException;
use Payconn\Common\Model\AuthorizeInterface;

abstract class AbstractGateway implements GatewayInterface
{
    private $httpClient;

    private $token;

    private $baseUrl;

    public function __construct(TokenInterface $token, HttpClientInterface $httpClient = null)
    {
        if (!$httpClient) {
            $httpClient = new HttpClient();
        }
        $this->httpClient = $httpClient;
        $this->token = $token;
        $this->baseUrl = new BaseUrl();
    }

    public function setBaseUrl(BaseUrl $baseUrl)
    {
        $this->baseUrl = $baseUrl;

        return $this;
    }

    public function createRequest(string $class, ModelInterface $model): ResponseInterface
    {
        if (!class_exists($class)) {
            throw new NotFoundClassException('Method class not found');
        }
        $this->initialize();
        if ($model instanceof AuthorizeInterface) {
            $model->setBaseUrl($this->baseUrl->getSecureUrl($model->isTestMode()));
        } else {
            $model->setBaseUrl($this->baseUrl->getApiUrl($model->isTestMode()));
        }

        return (new $class($this->token, $this->httpClient, $model))->send();
    }
}
