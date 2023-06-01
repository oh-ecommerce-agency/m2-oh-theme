<?php

declare(strict_types=1);

namespace OH\Theme\ViewModel;

use Magento\Checkout\Model\Session;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Sales\ViewModel\Header\LogoPathResolver;
use Magento\Store\Model\ScopeInterface;
use Magento\Theme\Block\Html\Header\Logo;
use OH\Theme\Model\ConfigProvider;

class Theme implements ArgumentInterface
{
    /**
     * @var Logo
     */
    private $logo;

    /**
     * @var LogoPathResolver
     */
    private $logoPathResolver;

    /**
     * @var ConfigProvider
     */
    private $configProvider;

    /**
     * @var Session
     */
    private $session;

    public function __construct(
        Session $session,
        ConfigProvider $configProvider,
        LogoPathResolver $logoPathResolver,
        Logo $logo
    ) {
        $this->session = $session;
        $this->logo = $logo;
        $this->logoPathResolver = $logoPathResolver;
        $this->configProvider = $configProvider;
    }

    public function getLogoSrc()
    {
        $this->logo->setData('logoPathResolver', $this->logoPathResolver);
        return $this->logo->getLogoSrc();
    }

    public function getCheckoutLogoWidth($type)
    {
        if ($type == 'header') {
            return $this->configProvider->getValue(sprintf(ConfigProvider::XML_CONFIG_CHECKOUT, 'header', 'logo_width'), ScopeInterface::SCOPE_STORES);
        }

        return $this->configProvider->getValue(sprintf(ConfigProvider::XML_CONFIG_CHECKOUT, 'footer', 'logo_width'), ScopeInterface::SCOPE_STORES);
    }

    public function getCheckoutLogoHeight($type)
    {
        if ($type == 'header') {
            return $this->configProvider->getValue(sprintf(ConfigProvider::XML_CONFIG_CHECKOUT, 'header', 'logo_height'), ScopeInterface::SCOPE_STORES);
        }

        return $this->configProvider->getValue(sprintf(ConfigProvider::XML_CONFIG_CHECKOUT, 'footer', 'logo_height'), ScopeInterface::SCOPE_STORES);
    }

    public function getIsVirtualQuote()
    {
        if ($this->session->getQuote()->getItemsCount() > 0) {
            return $this->session->getQuote()->getIsVirtual();
        }

        return $this->session->getLastRealOrder()->getIsVirtual();
    }
}
