<?php
declare(strict_types=1);

namespace OH\Theme\Plugin\Checkout;

use Magento\Checkout\Block\Checkout\LayoutProcessor;
use Magento\Framework\Stdlib\ArrayManager;

class LayoutProcessorPlugin
{
    const XML_PATH_SHIPPING_FORM_TELEPHONE = 'components/checkout/children/steps/children/shipping-step/children/shippingAddress/children/shipping-address-fieldset/children/telephone';
    const XML_PATH_BILLING_PAYMENT_LIST_CHILDREN = 'components/checkout/children/steps/children/billing-step/children/payment/children/payments-list/children';

    public function __construct(
        private ArrayManager $arrayManager
    ) {
    }

    /**
     * Change telephone component
     *
     * @param LayoutProcessor $layoutProcessor
     * @param $result
     * @return mixed
     */
    public function afterProcess(LayoutProcessor $layoutProcessor, $result)
    {

        $result = $this->changeTelComponentShipping($result);

        //@todo fix titles on js component
        //$this->changeTelComponentBilling();

        return $result;
    }

    private function changeTelComponentShipping($result)
    {
        $companyShipping = $this->arrayManager->get(self::XML_PATH_SHIPPING_FORM_TELEPHONE, $result);

        if ($companyShipping) {
            $result = $this->arrayManager->set(
                self::XML_PATH_SHIPPING_FORM_TELEPHONE . '/config/elementTmpl',
                $result,
                'Magento_Checkout/ui/form/element/input'
            );

            $result = $this->arrayManager->set(
                self::XML_PATH_SHIPPING_FORM_TELEPHONE . '/component',
                $result,
                'Magento_Checkout/js/view/shipping/form/element/telephone/input'
            );
        }

        return $result;
    }

    private function changeTelComponentBilling($result)
    {
        $paymentList = $this->arrayManager->get(self::XML_PATH_BILLING_PAYMENT_LIST_CHILDREN, $result);

        foreach ($paymentList as $paymentMethodCode => $paymentMethod) {
            $telPath = self::XML_PATH_BILLING_PAYMENT_LIST_CHILDREN . '/' . $paymentMethodCode . '/children/form-fields/children/telephone';
            $telephoneField = $this->arrayManager->get($telPath, $result);

            if ($telephoneField) {
                $result = $this->arrayManager->set(
                    $telPath . '/config/elementTmpl',
                    $result,
                    'Magento_Checkout/ui/form/element/input'
                );

                $result = $this->arrayManager->set(
                    $telPath . '/component',
                    $result,
                    'Magento_Checkout/js/view/shipping/form/element/telephone/input'
                );
            }
        }
    }
}
