<?php

namespace BDC\SimpleNews\Controller\Adminhtml\News;

use BDC\SimpleNews\Controller\Adminhtml\News;

class MassDelete extends News
{
   /**
    * @return void
    */
   public function execute()
   {
      // Get IDs of the selected news
      $newsIds = $this->getRequest()->getParam('news');

        foreach ($newsIds as $newsId) {
            try {
               /** @var $newsModel \Mageworld\SimpleNews\Model\News */
                $newsModel = $this->_newsFactory->create();
                $newsModel->load($newsId)->delete();
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
            }
        }

        if (count($newsIds)) {
            $this->messageManager->addSuccess(
                __('A total of %1 record(s) were deleted.', count($newsIds))
            );
        }

        $this->_redirect('*/*/index');
   }
}
