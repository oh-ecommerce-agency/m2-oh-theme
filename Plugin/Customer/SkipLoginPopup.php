<?php

namespace OH\Theme\Plugin\Customer;

use Magento\Framework\App\RequestInterface;
use Magento\Store\Model\ScopeInterface;
use OH\Theme\Model\ConfigProvider;

class SkipLoginPopup
{
    public function __construct(
        private RequestInterface $request,
        private ConfigProvider $configProvider
    ) {
    }

    /**
     * If popup is disabled redirect to cart
     *
     * @return bool
     */
    public function canDisable()
    {
        return !$this->configProvider->getValue(
                sprintf(ConfigProvider::XML_CONFIG_CHECKOUT, 'popup', 'enabled'),
                ScopeInterface::SCOPE_STORES) &&
            $this->request->getFullActionName() !== 'checkout_cart_index';
    }
}