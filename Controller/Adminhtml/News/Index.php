<?php

namespace BDC\SimpleNews\Controller\Adminhtml\News;

use BDC\SimpleNews\Controller\Adminhtml\News;

class Index extends News
{
    /**
     * @return void
     */
   public function execute()
   {
      if ($this->getRequest()->getQuery('ajax')) {
            $this->_forward('grid');
            return;
        }

        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->_resultPageFactory->create();
        $resultPage->setActiveMenu('BDC_SimpleNews::main_menu');
        $resultPage->getConfig()->getTitle()->prepend(__('Simple News'));

        return $resultPage;
   }
}
