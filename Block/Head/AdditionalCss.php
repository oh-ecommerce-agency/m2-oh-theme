<?php

declare(strict_types=1);

namespace OH\Theme\Block\Head;

use Magento\Framework\View\Element\Template;
use Magento\Store\Model\ScopeInterface;
use OH\Theme\Model\ConfigProvider;

class AdditionalCss extends Template
{
    /**
     * @var ConfigProvider
     */
    private $configProvider;

    public function __construct(
        ConfigProvider $configProvider,
        Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->configProvider = $configProvider;
    }

    private function getCss()
    {
        return $this->configProvider->getValue(sprintf(ConfigProvider::XML_CONFIG_DEV, 'additional_css'), ScopeInterface::SCOPE_STORES);
    }

    protected function _toHtml()
    {
        $css = $this->getCss();
        return $css ? sprintf('<style>%s</style>', $css) : '';
    }
}