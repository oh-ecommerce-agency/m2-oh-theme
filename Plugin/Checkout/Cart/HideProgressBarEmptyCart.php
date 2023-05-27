<?php
declare(strict_types=1);

namespace OH\Theme\Plugin\Checkout\Cart;

use Magento\Checkout\Controller\Cart\Index;
use Magento\Checkout\Helper\Cart;
use Magento\Framework\View\Page\Config;
use Magento\Framework\View\Result\Page;

class HideProgressBarEmptyCart
{
    /**
     * @var string
     */
    const EMPTY_CART_CSS_PATH = 'OH_Theme::css/empty-cart.css';

    /**
     * @var Cart
     */
    private $cartHelper;

    /**
     * @var Config
     */
    private $config;

    public function __construct(
        Config $config,
        Cart $cartHelper
    ) {
        $this->cartHelper = $cartHelper;
        $this->config = $config;
    }

    /**
     *
     * @param Index $subject
     * @param Page $result
     * @return Page
     */
    public function afterExecute(Index $subject, Page $result): Page
    {
        if ($this->isCartEmpty()) {
            $this->config->addPageAsset(self::EMPTY_CART_CSS_PATH);
        }

        return $result;
    }

    /**
     * Returns if cart is empty
     *
     * @return bool
     */
    private function isCartEmpty()
    {
        return $this->cartHelper->getItemsCount() == 0;
    }
}