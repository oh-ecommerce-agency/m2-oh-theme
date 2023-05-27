<?php

namespace OH\Theme\Plugin\Customer;

use Magento\Checkout\Block\Cart\Sidebar;

class SidebarPlugin extends SkipLoginPopup
{
    /**
     * If popup is disabled redirect to cart
     *
     * @param Sidebar $subject
     * @param array $result
     * @return array
     */
    public function afterGetConfig(Sidebar $subject, array $result): array
    {
        if ($this->canDisable()) {
            $result = array_merge($result, [
                'isRedirectRequired' => true,
                'customerLoginUrl' => $subject->getCheckoutUrl(),
            ]);
        }

        return $result;
    }
}