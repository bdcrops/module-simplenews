<?php

namespace BDC\SimpleNews\Controller\Adminhtml\News;

use BDC\SimpleNews\Controller\Adminhtml\News;

class NewAction extends News
{
   /**
     * Create new news action
     *
     * @return void
     */
   public function execute()
   {
      $this->_forward('edit');
   }
}
