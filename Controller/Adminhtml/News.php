<?php

namespace BDC\SimpleNews\Controller\Adminhtml;

 use Magento\Backend\App\Action;
 use Magento\Backend\App\Action\Context;
 use Magento\Framework\Registry;
 use Magento\Framework\View\Result\PageFactory;
 use BDC\SimpleNews\Model\NewsFactory;

//class News extends Action
abstract class News extends Action   //\Magento\Backend\App\Action

{
    /**
     * Core registry
     *
     * @var \Magento\Framework\Registry
     */
    protected $_coreRegistry;

    /**
     * Result page factory
     *
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $_resultPageFactory;

    /**
     * News model factory
     *
     * @var \BDC\SimpleNews\Model\NewsFactory
     */
    protected $_newsFactory;

    /**
     * @param Context $context
     * @param Registry $coreRegistry
     * @param PageFactory $resultPageFactory
     * @param NewsFactory $newsFactory
     */
    public function __construct(
        Context $context,
        Registry $coreRegistry,
        PageFactory $resultPageFactory,
        NewsFactory $newsFactory
    ) {
       parent::__construct($context);
        $this->_coreRegistry = $coreRegistry;
        $this->_resultPageFactory = $resultPageFactory;
        $this->_newsFactory = $newsFactory;
    }


    /**
     * Initiate action
     *
     * @return this
     */
    /*
    protected function _initAction()
    {
    	$this->_view->loadLayout();
    	$this->_setActiveMenu('BDC_SimpleNews::items')->_addBreadcrumb(__('News'), __('News'));
    	return $this;
    }
    */
    /**
     * News access rights checking
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('BDC_SimpleNews::manage_news');
    }
}
