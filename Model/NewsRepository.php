<?php

namespace BDC\SimpleNews\Model;

use BDC\SimpleNews\Api\NewsRepositoryInterface;
use BDC\SimpleNews\Model\Resource\News\CollectionFactory;

class NewsRepository implements NewsRepositoryInterface
{
    private $collectionFactory;

    public function __construct(CollectionFactory $collectionFactory)
    {
        $this->collectionFactory = $collectionFactory;
    }

    public function getList()
    {
        return $this->collectionFactory->create()->getItems();
    }
}
