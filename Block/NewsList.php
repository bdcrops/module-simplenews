<?php

namespace BDC\SimpleNews\Block;

use Magento\Framework\View\Element\Template;
use BDC\SimpleNews\Model\NewsFactory;

class NewsList extends Template {
   /**
    * @var \BDC\SimpleNews\Model\NewsFactory
    */
   protected $_newsFactory;

   /**
    * @param Template\Context $context
    * @param NewsFactory $newsFactory
    * @param array $data
    */
   public function __construct(
      Template\Context $context,
      NewsFactory $newsFactory,
      array $data = []  ) {
        $this->_newsFactory = $newsFactory;
        parent::__construct($context, $data);
   }

   /**
     * Set news collection
     */
    protected  function _construct() {
        parent::_construct();
        $collection = $this->_newsFactory->create()
        ->getCollection()->addFilter('status', 1)->setOrder('id', 'DESC');
        //$_products->addAttributeToFilter('status', 1); // Without using the operator
        $this->setCollection($collection);
    }

   /**
     * @return $this
     */
    protected function _prepareLayout() {
        parent::_prepareLayout();
        /** @var \Magento\Theme\Block\Html\Pager */
        $pager = $this->getLayout()->createBlock(
           'Magento\Theme\Block\Html\Pager','simplenews.news.list.pager'
        );
        $pager->setLimit(5)->setShowAmounts(false)->setCollection($this->getCollection());
        $this->setChild('pager', $pager);
        $this->getCollection()->load();
        return $this;
    }

   /**
     * @return string
     */
    public function getPagerHtml() {
        return $this->getChildHtml('pager');
    }
}
