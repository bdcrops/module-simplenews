<?php

namespace BDC\SimpleNews\Controller\Index;

use BDC\SimpleNews\Controller\News;

class Index extends News
{

    public function execute()
    {
        $pageFactory = $this->_pageFactory->create();

        $pageFactory->getConfig()->getTitle()->set($this->_dataHelper->getHeadTitle());

        //Add breadcrumb
        $breadcrumbs = $pageFactory->getLayout()->getBlock('breadcrumbs');
        $breadcrumbs->addCrumb('home', ['label'=>__('Home'), 'title'=>__('Home'), 'link'=>$this->_url->getUrl('')]);
        $breadcrumbs->addCrumb('simplenews', ['label'=>__('Simple News'), 'title'=>__('Simple News')]);

        return $pageFactory;
    }
}


/*
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use BDC\SimpleNews\Model\NewsFactory;
class Index extends Action {
    protected $_modelNewsFactory;
    public function __construct( Context $context, NewsFactory $modelNewsFactory ) {
        parent::__construct($context);
        $this->_modelNewsFactory = $modelNewsFactory;
    }

    public function execute() {
        $newsModel = $this->_modelNewsFactory->create();
        // Load the item with ID is 1
        $item = $newsModel->load(1);
        //var_dump($item->getData('title'));
        // Get news collection
        $newsCollection = $newsModel->getCollection();
        // Load all data of collection
        var_dump($newsCollection->getData('title'));
    }
}*
