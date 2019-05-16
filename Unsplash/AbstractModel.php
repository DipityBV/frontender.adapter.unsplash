<?php

namespace Prototype\Model\Unsplash;

use Slim\Container;
use Frontender\Core\Model\AbstractModel as FrontenderAbstractModel;

abstract class AbstractModel extends FrontenderAbstractModel
{
    protected $name;

    public function __construct(Container $container)
    {
        parent::__construct($container);

        \Crew\Unsplash\HttpClient::init([
            'applicationId'    => $container->config->unsplash_token,
            'secret'        => $container->config->unsplash_secret,
            'utmSource' => 'Frontender'
        ]);
    }
}
