<?php

declare(strict_types=1);

namespace OH\Theme\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class ConfigProvider
{
	/**
	 * @var string
	 */
	const XML_CONFIG_MOBILE_MENU_STORE_CAT_ID = 'oh_theme/mobile_menu/store_item_cat_id';

    /**
     * @var string
     */
    const XML_CONFIG_MOBILE_MENU_STORE_TITLE = 'oh_theme/mobile_menu/store_item_title';

    /**
     * @var string
     */
    const XML_CONFIG_CHECKOUT = 'oh_theme/checkout/%s/%s';

    /**
     * @var string
     */
    const XML_CONFIG_DEV = 'oh_theme/dev/%s';

	/**
	 * @var ScopeInterface
	 */
	private $scopeInterface;

	public function __construct(
		ScopeConfigInterface $scopeInterface
	) {
		$this->scopeInterface = $scopeInterface;
	}

	public function getValue($path, $scopeType = ScopeConfigInterface::SCOPE_TYPE_DEFAULT, $scopeCode = null)
	{
		return $this->scopeInterface->getValue($path, $scopeType, $scopeCode);
	}
}
