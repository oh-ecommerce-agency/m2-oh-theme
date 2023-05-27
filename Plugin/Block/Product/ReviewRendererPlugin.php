<?php

namespace OH\Theme\Plugin\Block\Product;

use Magento\Catalog\Model\Product;
use Magento\Review\Block\Product\ReviewRenderer;

class ReviewRendererPlugin
{
    /**
     * Show review block always
     *
     * @param ReviewRenderer $subject
     * @param Product $product
     * @param string $templateType
     * @param bool $displayIfNoReviews
     * @return array
     */
    public function beforeGetReviewsSummaryHtml(
        ReviewRenderer $subject,
        Product $product,
        string $templateType = \Magento\Catalog\Block\Product\ReviewRendererInterface::DEFAULT_VIEW,
        $displayIfNoReviews = false
    ): array {
        $displayIfNoReviews = true;
        return [$product, $templateType, $displayIfNoReviews];
    }
}