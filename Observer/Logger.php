<?php

namespace BDC\SimpleNews\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class Logger implements ObserverInterface {
    private $logger;

    public function __construct(LoggerInterface $logger){
        $this->logger = $logger;
    }

    public function execute(Observer $observer){
        $this->logger->debug("Observer:".
            $observer->getEvent()->getObject()->getTitle() 
        );
    }
}
