<?php

namespace PHPShopify;

class DeprecatedApiCalls extends ShopifyResource
{
    /**
     * @inheritDoc
     */
    protected $resourceKey = 'deprecated_api_calls';

    /**
     * If the resource is read only. (No POST / PUT / DELETE actions)
     *
     * @var boolean
     */
    public $readOnly = true;
}
