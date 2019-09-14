<?php
namespace BDC\SimpleNews\Helper;

use \Magento\Framework\App\Helper\Context;
use \Magento\Store\Model\StoreManagerInterface;
use \Magento\Framework\App\State;
use \BDC\SimpleNews\Model\NewsFactory;
use \Symfony\Component\Console\Input\Input;
use \Psr\Log\LoggerInterface;
use \Magento\Framework\Event\ManagerInterface;

class News extends \Magento\Framework\App\Helper\AbstractHelper {
    const KEY_TITLE = 'news-title';
    const KEY_SUMMARY = 'news-summary';
    const KEY_DESC = 'news-description';


    protected $storeManager;
    protected $state;
    protected $newsFactory;
    protected $data;
    protected $newsId;
    protected $logger;
    protected $eventManager;
    // $eventManager


    public function __construct(
        Context $context,
        StoreManagerInterface $storeManager,
        State $state,
        NewsFactory $newsFactory,
        LoggerInterface $logger,
        ManagerInterface $eventManager) {
            $this->storeManager = $storeManager;
            $this->state = $state;
            $this->logger = $logger;
            $this->eventManager = $eventManager;
            $this->newsFactory = $newsFactory;

        parent::__construct($context);
    }

    public function setData(Input $input){
        $this->data = $input;
        return $this;
    }

    public function execute() {
        $this->state->setAreaCode('frontend');
        $news = $this->newsFactory->create();
        $news->setTitle($this->data->getOption(self::KEY_TITLE))
            ->setSummary($this->data->getOption(self::KEY_SUMMARY))
            ->setDescription($this->data->getOption(self::KEY_DESC));
        $news->save();

        $this->logger->debug('DI: '.$news->getTitle());
        // EventCode...
        $this->eventManager->dispatch('bdc_simplenews_save_after', ['object' => $news]);

        $this->newsId = $news->getId();

        // if($this->data->getOption(self::KEY_SENDEMAIL)) {
        //     $news->sendNewAccountEmail();
        // }
    }

    public function getNewsId()
    {
        return (int)$this->newsId;
    }
}
