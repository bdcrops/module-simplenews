<?php

namespace BDC\SimpleNews\Cron;

use BDC\SimpleNews\Model\NewsFactory;
//use BDC\SimpleNews\Model\Config;
class AddNews {
    private $newsFactory;
    public function __construct(NewsFactory $newsFactory) {
        $this->newsFactory = $newsFactory;
    }
    public function execute(){
        $this->newsFactory->create()
            ->setTitle('Scheduled News')
            ->setSummary('Scheduled News setSummary ' . date('Ymd'))
            ->setDescription('Scheduled News setDescription ' . date('Ymd'))
            ->save();
    }
}
