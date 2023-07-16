<?php
declare(strict_types=1);

namespace OH\Theme\ViewModel;

use Magento\Checkout\Model\Type\Onepage;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Store\Model\ScopeInterface;

class CheckoutSuccess implements ArgumentInterface
{
    public function __construct(
        private ScopeConfigInterface $scopeConfig,
        private Onepage $onePage
    ) {
    }

    public function getOrder()
    {
        return $this->onePage->getCheckout()->getLastRealOrder();
    }

    public function getIsBankTransfer()
    {
        return str_contains($this->getOrder()->getPayment()->getMethod(), 'banktransfer');
    }

    public function getTransferDetailsExtra()
    {
        return $this->scopeConfig->getValue('contact/email/recipient_email', ScopeInterface::SCOPE_STORE);
    }

    public function getTransferDetails()
    {
        return trim($this->scopeConfig->getValue('payment/banktransfer/instructions', ScopeInterface::SCOPE_STORE));
    }

    public function getAdditionalMsg()
    {
        return sprintf('Una vez hecha la misma, por favor enviar un mail a %s adjuntando el comprobante de tranferencia.
         Recuerda colocar el número de orden de compra como referencia así podemos identificar
         la acreditación en nuestra cuenta bancaria de manera más rápida.',
            $this->getTransferDetailsExtra()
        );
    }
}