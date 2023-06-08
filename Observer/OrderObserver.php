<?php

namespace ReesMcIvor\StripeOrderStatus\Observer;

use Magento\Framework\Event\Observer;
use Magento\Payment\Observer\AbstractDataAssignObserver;
use StripeIntegration\Payments\Helper\Logger;

class OrderObserver extends AbstractDataAssignObserver
{
    private $helper;
    private $sessionManager;

    public function __construct(
        \StripeIntegration\Payments\Helper\Generic $helper,
        \Magento\Framework\Session\SessionManagerInterface $sessionManager
    )
    {
        $this->helper = $helper;
        $this->sessionManager = $sessionManager;
    }

    /**
     * @return void
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        dd($observer->getEvent()->getOrder());
        dd('got here');
    }
}
