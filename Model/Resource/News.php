<?php

namespace BDC\SimpleNews\Model\Resource;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class News extends AbstractDb
//class News extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb    //\Magento\Framework\Model\ResourceModel\Db\
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('bdc_simplenews', 'id');
    }
}
