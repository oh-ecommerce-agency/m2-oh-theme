<?php

declare(strict_types=1);

namespace OH\Theme\ViewModel;

use Magento\Catalog\Model\ResourceModel\Category\CollectionFactory;
use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Store\Model\ScopeInterface;
use OH\Theme\Model\ConfigProvider;

class MobileMenu implements ArgumentInterface
{
    /**
     * @var UrlInterface
     */
    private $url;

    /**
     * @var ConfigProvider
     */
    private $configProvider;

    /**
     * @var CollectionFactory
     */
    private $catCollFact;

    public function __construct(
        CollectionFactory $catCollFact,
        ConfigProvider $configProvider,
        UrlInterface $url
    ) {
        $this->url = $url;
        $this->configProvider = $configProvider;
        $this->catCollFact = $catCollFact;
    }

    public function getStoreItemUrl()
    {
        $categoryId = $this->configProvider->getValue(ConfigProvider::XML_CONFIG_MOBILE_MENU_STORE_CAT_ID, ScopeInterface::SCOPE_STORES);

        if (!$categoryId) {
            return '#';
        }

        $category = $this->catCollFact
            ->create()
            ->addFieldToFilter('entity_id', $categoryId)
            ->getFirstItem();

        return $this->url->getUrl($category->getUrl());
    }

    public function getStoreItemTitle()
    {
        return $this->configProvider->getValue(ConfigProvider::XML_CONFIG_MOBILE_MENU_STORE_TITLE, ScopeInterface::SCOPE_STORES);
    }
}
