<?php

namespace BDC\SimpleNews\Controller\Index;

use BDC\SimpleNews\Controller\News;

class View extends News
{
    public function execute()
    {
	// Get news ID
        $newsId = $this->getRequest()->getParam('id');
	// Get news data
        $news = $this->_newsFactory->create()->load($newsId);
	// Save news data into the registry
        $this->_objectManager->get('Magento\Framework\Registry')
            ->register('newsData', $news);

        $pageFactory = $this->_pageFactory->create();

        // Add title
        $pageFactory->getConfig()->getTitle()->set($news->getTitle());

        // Add breadcrumb
        /** @var \Magento\Theme\Block\Html\Breadcrumbs */
        $breadcrumbs = $pageFactory->getLayout()->getBlock('breadcrumbs');
        $breadcrumbs->addCrumb('home',
            [
                'label' => __('Home'),
                'title' => __('Home'),
                'link' => $this->_url->getUrl('')
            ]
        );
        $breadcrumbs->addCrumb('simplenews',
            [
                'label' => __('Simple News'),
                'title' => __('Simple News'),
                'link' => $this->_url->getUrl('news')
            ]
        );
        $breadcrumbs->addCrumb('news',
            [
                'label' => $news->getTitle(),
                'title' => $news->getTitle()
            ]
        );

        return $pageFactory;
    }
}
