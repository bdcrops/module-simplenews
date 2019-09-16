<?php

namespace BDC\SimpleNews\Controller\Adminhtml\Index;

use BDC\SimpleNews\Model\NewsFactory;

class Save extends \Magento\Backend\App\Action {
    private $newsFactory;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        NewsFactory $newsFactory
    ) {
        $this->newsFactory = $newsFactory;
        parent::__construct($context);
    }

    public function execute(){
        $this->newsFactory->create()
            ->setData($this->getRequest()->getPostValue()['general'])->save();
        return $this->resultRedirectFactory->create()->setPath('simplenews/index/index');
    }
}
