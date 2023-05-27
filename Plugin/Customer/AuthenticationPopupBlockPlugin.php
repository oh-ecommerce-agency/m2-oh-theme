<?php

namespace OH\Theme\Plugin\Customer;

use Magento\Customer\Block\Account\AuthenticationPopup;

class AuthenticationPopupBlockPlugin extends SkipLoginPopup
{
    /**
     * If popup is disabled avoid template
     *
     * @param AuthenticationPopup $subject
     * @param string $result
     * @return string
     */
    public function afterToHtml(AuthenticationPopup $subject, string $result): string
    {
        return $this->canDisable() ? '' : $result;
    }
}