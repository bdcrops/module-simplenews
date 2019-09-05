<?php

namespace BDC\SimpleNews\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\Registry;

class View extends Template
{
   /**
    * @var \Magento\Framework\Registry
    */
   protected $_coreRegistry;

   /**
    * @param Template\Context $context
    * @param Registry $coreRegistry
    * @param array $data
    */
   public function __construct(
      Template\Context $context,
      Registry $coreRegistry,
      array $data = []
   ) {
      $this->_coreRegistry = $coreRegistry;
      parent::__construct($context, $data);
   }

   /**
    * Get news information from register which saved in controller
    *
    * @return \BDC\SimpleNews\Model\News
    */
   public function getNewsInformation()
   {
      return $this->_coreRegistry->registry('newsData');
   }
}
