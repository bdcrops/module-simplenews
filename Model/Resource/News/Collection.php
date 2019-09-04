<?php

namespace BDC\SimpleNews\Model\Resource\News;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
//class Collection extends \Magento\Framework\Model\Resource\Db\Collection\AbstractCollection    //\Magento\Framework\Model\ResourceModel\Db\

{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'BDC\SimpleNews\Model\News',
            'BDC\SimpleNews\Model\Resource\News'
        );
    }
}
