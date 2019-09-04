<?php

namespace BDC\SimpleNews\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use BDC\SimpleNews\Model\NewsFactory;

class Index extends Action
{
    /**
     * @var \BDC\SimpleNews\Model\NewsFactory
     */
    protected $_modelNewsFactory;

    /**
     * @param Context $context
     * @param NewsFactory $modelNewsFactory
     */
    public function __construct(
        Context $context,
        NewsFactory $modelNewsFactory
    ) {
        parent::__construct($context);
        $this->_modelNewsFactory = $modelNewsFactory;
    }

    public function execute()
    {
        /**
         * When Magento get your model, it will generate a Factory class
         * for your model at var/generaton folder and we can get your
         * model by this way
         */
        $newsModel = $this->_modelNewsFactory->create();

        // Load the item with ID is 1
        $item = $newsModel->load(1);
        var_dump($item->getData());

        // Get news collection
        $newsCollection = $newsModel->getCollection();
        // Load all data of collection
        var_dump($newsCollection->getData());
    }
}
